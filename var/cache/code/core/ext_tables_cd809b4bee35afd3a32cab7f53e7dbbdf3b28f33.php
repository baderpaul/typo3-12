<?php
/**
 * Compiled ext_tables.php cache file
 */

/**
 * Extension: setup
 * File: /var/www/html/vendor/typo3/cms-setup/ext_tables.php
 */

namespace {




use TYPO3\CMS\Setup\Controller\SetupModuleController;

defined('TYPO3') or die();

$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [
        'realName' => [
            'type' => 'text',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
            'table' => 'be_users',
            'max' => 80,
        ],
        'email' => [
            'type' => 'email',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
            'table' => 'be_users',
            'max' => 255,
        ],
        'emailMeAtLogin' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
        ],
        'password' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
            'table' => 'be_users',
        ],
        'password2' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
            'table' => 'be_users',
        ],
        'passwordCurrent' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordCurrent',
            'table' => 'be_users',
        ],
        'avatar' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
            'type' => 'avatar',
            'table' => 'be_users',
            'allowed' => 'common-image-types',
        ],
        'lang' => [
            'type' => 'language',
            'table' => 'be_users',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
        ],
        'startModule' => [
            'type' => 'select',
            'itemsProcFunc' => SetupModuleController::class . '->renderStartModuleSelect',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
        ],
        'titleLen' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
        ],
        'edit_RTE' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_RTE',
        ],
        'edit_docModuleUpload' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
        ],
        'showHiddenFilesAndFolders' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
        ],
        'copyLevels' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
        ],
        'resetConfiguration' => [
            'type' => 'button',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
            'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
            'confirm' => true,
            'confirmData' => [
                'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                'eventName' => 'setup:confirmation:response',
            ],
        ],
        'mfaProviders' => [
            'type' => 'mfa',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:mfaProviders',
        ],
        'backendTitleFormat' => [
            'type' => 'select',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat',
            'items' => [
                'titleFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.titleFirst',
                'sitenameFirst' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:backendTitleFormat.sitenameFirst',
            ],
        ],
    ],
    'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:accountSecurity,passwordCurrent,password,password2,mfaProviders,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,edit_RTE,titleLen,backendTitleFormat,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,resetConfiguration',
];
}

/**
 * Extension: fontawesome_provider
 * File: /var/www/html/vendor/friendsoftypo3/fontawesome-provider/ext_tables.php
 */

namespace {




defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\VersionNumberUtility;

(static function () {
    $typo3VersionNumber = VersionNumberUtility::convertVersionNumberToInteger(
        VersionNumberUtility::getNumericTypo3Version()
    );

    // If TYPO3 version is at least 12
    if ($typo3VersionNumber >= 12000000) {
        // Register as a skin
        $GLOBALS['TBE_STYLES']['skins']['fontawesome_provider']['stylesheetDirectories']['css'] = 'EXT:fontawesome_provider/Resources/Public/Css/';
    }
})();
}

/**
 * Extension: mask
 * File: /var/www/html/vendor/mask/mask/ext_tables.php
 */

namespace {


defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'mask',
    'after:extensionmanager',
    null,
    [
        'routeTarget' => \MASK\Mask\Controller\MaskController::class . '::mainAction',
        'access' => 'group,user',
        'name' => 'tools_mask',
        'icon' => 'EXT:mask/Resources/Public/Icons/module-mask_wizard.svg',
        'labels' => 'LLL:EXT:mask/Resources/Private/Language/locallang_mask.xlf',
    ]
);

// Include css for styling of backend preview of mask content elements
$GLOBALS['TBE_STYLES']['skins']['mask']['stylesheetDirectories']['mask'] = 'EXT:mask/Resources/Public/Styles/Backend/';

(static function () {
    // Allow all inline tables on standard pages
    $tables = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\MASK\Mask\Loader\LoaderRegistry::class)->loadActiveDefinition();
    foreach ($tables->getCustomTables() as $tableDefinition) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($tableDefinition->table);
    }
})();
}

/**
 * Extension: ke_search
 * File: /var/www/html/vendor/tpwd/ke_search/ext_tables.php
 */

namespace {


defined('TYPO3') or die();

(function () {
    // TODO: Remove this once support for TYPO3 11 is dropped
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'KeSearch',
        'web',
        'backend_module',
        '',
        [
            \Tpwd\KeSearch\Controller\BackendModuleController::class => 'startIndexing, indexedContent, indexTableInformation, searchwordStatistics, clearSearchIndex, lastIndexingReport, alert',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:ke_search/Resources/Public/Icons/moduleicon.svg',
            'labels' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
})();
}

/**
 * Extension: news
 * File: /var/www/html/vendor/georgringer/news/ext_tables.php
 */

namespace {


use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$boot = static function (): void {
    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    if ($versionInformation->getMajorVersion() < 12) {
        // CSH - context sensitive help
        foreach (['news', 'tag', 'link'] as $table) {
            // @extensionScannerIgnoreLine
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_news_domain_model_' . $table);

            // @extensionScannerIgnoreLine
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
                'tx_news_domain_model_' . $table,
                'EXT:news/Resources/Private/Language/locallang_csh_' . $table . '.xlf'
            );
        }

        // @extensionScannerIgnoreLine
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tt_content.pi_flexform.news_pi1.list',
            'EXT:news/Resources/Private/Language/locallang_csh_flexforms.xlf'
        );

        // @extensionScannerIgnoreLine
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'sys_file_reference',
            'EXT:news/Resources/Private/Language/locallang_csh_sys_file_reference.xlf'
        );
    }

    $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\GeorgRinger\News\Domain\Model\Dto\EmConfiguration::class);

    // Extend user settings
    $GLOBALS['TYPO3_USER_SETTINGS']['columns']['newsoverlay'] = [
        'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:usersettings.overlay',
        'type' => 'select',
        'itemsProcFunc' => \GeorgRinger\News\Hooks\ItemsProcFunc::class . '->user_categoryOverlay',
    ];
    if (!isset($GLOBALS['TYPO3_USER_SETTINGS']['showitem'])) {
        $GLOBALS['TYPO3_USER_SETTINGS']['showitem'] = '';
    }
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToUserSettings('--div--;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pi1_title,newsoverlay');

    // Add tables to livesearch (e.g. "#news:fo" or "#newscat:fo")
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['news'] = 'tx_news_domain_model_news';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['newstag'] = 'tx_news_domain_model_tag';

    /* ===========================================================================
        Register BE-Module for Administration
    =========================================================================== */
    if ($configuration->getShowAdministrationModule()) {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'News',
            'web',
            'administration',
            '',
            [\GeorgRinger\News\Controller\AdministrationController::class => 'index,newNews,newCategory,newTag,newsPidListing,donate'],
            [
                'access' => 'user,group',
                'icon' => 'EXT:news/Resources/Public/Icons/module_administration.svg',
                'labels' => 'LLL:EXT:news/Resources/Private/Language/locallang_modadministration.xlf',
                'navigationComponentId' => $configuration->getHidePageTreeForAdministrationModule() ? '' : 'TYPO3/CMS/Backend/PageTree/PageTreeElement',
                'inheritNavigationComponentFromMainModule' => false,
                'path' => '/module/web/NewsAdministration/',
            ]
        );
    }

    /* ===========================================================================
        Default configuration
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByCategory'] = 'uid,title,tstamp,sorting';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] = 'tstamp,datetime,crdate,title' . ($configuration->getManualSorting() ? ',sorting' : '');
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByTag'] = 'tstamp,crdate,title';
};

$boot();
unset($boot);
}

/**
 * Extension: setup_package
 * File: /var/www/html/vendor/techdivision/setup-package/ext_tables.php
 */

namespace {

defined('TYPO3') or die();
}

#