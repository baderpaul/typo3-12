<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Core\Hooks;

use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\Configuration\Exception\SiteConfigurationWriteException;
use TYPO3\CMS\Core\Configuration\SiteConfiguration;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Http\NormalizedParams;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\SysLog\Action\Site as SiteAction;
use TYPO3\CMS\Core\SysLog\Error as SystemLogErrorClassification;
use TYPO3\CMS\Core\SysLog\Type;
use TYPO3\CMS\Core\Type\ContextualFeedbackSeverity;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Hook for creating a basic site configuration for new pages on root level.
 *
 * @internal This class is a hook implementation and is not part of the TYPO3 Core API.
 */
class CreateSiteConfiguration
{
    /**
     * @var int[]
     */
    protected $allowedPageTypes = [
        PageRepository::DOKTYPE_DEFAULT,
        PageRepository::DOKTYPE_LINK,
        PageRepository::DOKTYPE_SHORTCUT,
    ];

    public function processDatamap_afterDatabaseOperations(string $status, string $table, $id, array $fieldValues, DataHandler $dataHandler): void
    {
        /**
         * Take action only on
         *   - new records
         *   - pages table
         *   - live workspace
         *   - resolved uids
         *   - pages on root level
         *   - pages in default language
         *   - non-versioned records
         *   - allowed doktypes
         *   - not bulk importing things via CLI
         */
        if ($status !== 'new'
            || $table !== 'pages'
            || $dataHandler->BE_USER->workspace > 0
            || !isset($dataHandler->substNEWwithIDs[$id])
            || (int)$fieldValues['pid'] !== 0
            || (int)$fieldValues['l10n_parent'] !== 0
            || (isset($fieldValues['t3ver_oid']) && (int)$fieldValues['t3ver_oid'] > 0)
            || !in_array((int)$fieldValues['doktype'], $this->allowedPageTypes, true)
            || $dataHandler->isImporting
        ) {
            return;
        }

        $uid = (int)$dataHandler->substNEWwithIDs[$id];
        $this->generateSiteConfigurationForRootPage($uid, $dataHandler->BE_USER);
    }

    protected function generateSiteConfigurationForRootPage(int $pageId, BackendUserAuthentication $backendUser): void
    {
        $entryPoint = 'autogenerated-' . $pageId;
        $siteIdentifier = $entryPoint . '-' . md5((string)$pageId);

        if (!$this->siteExistsByRootPageId($pageId)) {
            $siteConfiguration = GeneralUtility::makeInstance(SiteConfiguration::class);
            $normalizedParams = $this->getNormalizedParams();
            $basePrefix = Environment::isCli() ? $normalizedParams->getSitePath() : $normalizedParams->getSiteUrl();
            try {
                $siteConfiguration->createNewBasicSite(
                    $siteIdentifier,
                    $pageId,
                    $basePrefix . $entryPoint
                );
                $backendUser->writelog(Type::SITE, SiteAction::CREATE, SystemLogErrorClassification::MESSAGE, 0, 'Site configuration \'%s\' was automatically created for new root page (%s).', [$siteIdentifier, $pageId], 'site');
                $this->updateSlugForPage($pageId);
            } catch (SiteConfigurationWriteException $e) {
                $flashMessage = GeneralUtility::makeInstance(FlashMessage::class, $e->getMessage(), '', ContextualFeedbackSeverity::WARNING, true);
                $flashMessageService = GeneralUtility::makeInstance(FlashMessageService::class);
                $defaultFlashMessageQueue = $flashMessageService->getMessageQueueByIdentifier();
                $defaultFlashMessageQueue->enqueue($flashMessage);
            }
        }
    }

    protected function getNormalizedParams(): NormalizedParams
    {
        $normalizedParams = null;
        $serverParams = Environment::isCli() ? ['HTTP_HOST' => 'localhost'] : $_SERVER;
        if (isset($GLOBALS['TYPO3_REQUEST'])) {
            $normalizedParams = $GLOBALS['TYPO3_REQUEST']->getAttribute('normalizedParams');
            $serverParams = $GLOBALS['TYPO3_REQUEST']->getServerParams();
        }

        if (!$normalizedParams instanceof NormalizedParams) {
            $normalizedParams = NormalizedParams::createFromServerParams($serverParams);
        }

        return $normalizedParams;
    }

    /**
     * Updates the slug of the given pageId by spinning up a new DataHandler instance.
     */
    protected function updateSlugForPage(int $pageId): void
    {
        $dataHandler = GeneralUtility::makeInstance(DataHandler::class);
        $dataMap = [
            'pages' => [
                $pageId => [
                    'slug' => '',
                ],
            ],
        ];
        $dataHandler->start($dataMap, []);
        $dataHandler->process_datamap();
    }

    /**
     * Checks whether a site exists by its root page. Sets up a new SiteFinder instance
     *
     * @param int $rootPageId the page ID (default language)
     */
    protected function siteExistsByRootPageId(int $rootPageId): bool
    {
        try {
            GeneralUtility::makeInstance(SiteFinder::class)->getSiteByRootPageId($rootPageId);
        } catch (SiteNotFoundException $e) {
            return false;
        }
        return true;
    }
}
