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

namespace TYPO3\CMS\Core\Security\ContentSecurityPolicy;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;
use TYPO3\CMS\Core\Core\RequestId;
use TYPO3\CMS\Core\Http\NormalizedParams;
use TYPO3\CMS\Core\Http\Uri;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Event\PolicyMutatedEvent;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Reporting\Resolution;
use TYPO3\CMS\Core\Security\ContentSecurityPolicy\Reporting\ResolutionRepository;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Type\Map;

/**
 * Provide a Content-Security-Policy representation for a given scope (e.g. backend, frontend, frontend.my-site).
 *
 * @internal
 */
final class PolicyProvider
{
    protected const REPORTING_URI = '@http-reporting';

    /**
     * @param Map<Scope, Map<MutationOrigin, MutationCollection>> $mutations
     */
    public function __construct(
        private readonly Map $mutations,
        private readonly RequestId $requestId,
        private readonly SiteFinder $siteFinder,
        private readonly ModelService $modelService,
        private readonly ResolutionRepository $resolutionRepository,
        private readonly EventDispatcherInterface $eventDispatcher,
    ) {
    }

    /**
     * Provides the complete, dynamically mutated policy to be used in HTTP responses.
     */
    public function provideFor(Scope $scope): Policy
    {
        // @todo add policy cache per scope
        $defaultPolicy = $this->provideDefaultFor($scope);
        $mutationCollections = array_map(
            static fn (Resolution $resolution) => $resolution->mutationCollection,
            $this->resolutionRepository->findByScope($scope)
        );
        $currentPolicy = $defaultPolicy->mutate(...$mutationCollections);
        $event = new PolicyMutatedEvent($scope, $defaultPolicy, $currentPolicy, ...$mutationCollections);
        $this->eventDispatcher->dispatch($event);
        return $event->getCurrentPolicy();
    }

    /**
     * Provides the base policy which contains only static mutations - either from
     * `Configuration/ContentSecurityPolicies.php of each extension, or from the
     * corresponding `contentSecurityPolicies.mutations` section of a frontend
     * site definition.
     */
    public function provideDefaultFor(Scope $scope): Policy
    {
        // @todo add runtime policy cache per scope
        $isFrontendSite = $scope->siteIdentifier !== null && $scope->type->isFrontend();
        if ($isFrontendSite && $this->shallInheritDefault($scope)) {
            $policy = $this->provideFor(Scope::frontend());
        } else {
            $policy = new Policy();
        }
        // apply static mutations (from DI, declared in `Configuration/ContentSecurityPolicies.php`)
        foreach ($this->mutations[$scope] ?? [] as $mutationCollection) {
            $policy = $policy->mutate($mutationCollection);
        }
        // apply site mutations (declared in corresponding site configuration's csp.yaml file)
        if ($isFrontendSite) {
            foreach ($this->resolveSiteMutations($scope) as $mutation) {
                $policy = $policy->mutate($mutation);
            }
        }
        return $policy;
    }

    public function getReportingUrlFor(Scope $scope, ServerRequestInterface $request): ?UriInterface
    {
        $value = $GLOBALS['TYPO3_CONF_VARS'][$scope->type->abbreviate()]['contentSecurityPolicyReportingUrl'] ?? null;
        if (!empty($value) && is_string($value)) {
            try {
                return new Uri($value);
            } catch (\InvalidArgumentException) {
                return null;
            }
        }
        $uriBase = $this->getDefaultReportingUriBase($scope, $request);
        return $uriBase->withQuery($uriBase->getQuery() . '&requestTime=' . $this->requestId->microtime);
    }

    /**
     * Returns the URI base, for better partitioning it should be extended by `&requestTime=...`
     */
    public function getDefaultReportingUriBase(Scope $scope, ServerRequestInterface $request, bool $absolute = true): UriInterface
    {
        $normalizedParams = $request->getAttribute('normalizedParams') ?? NormalizedParams::createFromRequest($request);
        $url = $absolute ? $normalizedParams->getSiteUrl() : $normalizedParams->getSitePath();
        if ($scope->type->isBackend()) {
            $url .= 'typo3/';
        }
        return (new Uri($url . self::REPORTING_URI))->withQuery('csp=report');
    }

    /**
     * Whether to inherit default (site-unspecific) frontend policy mutations.
     */
    private function shallInheritDefault(Scope $scope): bool
    {
        $site = $this->resolveSite($scope);
        return (bool)($site->getConfiguration()['contentSecurityPolicies']['inheritDefault'] ?? true);
    }

    /**
     * @return list<Mutation>
     */
    private function resolveSiteMutations(Scope $scope): array
    {
        $site = $this->resolveSite($scope);
        $mutationConfigurations = $site->getConfiguration()['contentSecurityPolicies']['mutations'] ?? [];
        if (empty($mutationConfigurations) || !is_array($mutationConfigurations)) {
            return [];
        }
        return array_map(
            fn (array $array) => $this->modelService->buildMutationFromArray($array),
            $mutationConfigurations
        );
    }

    private function resolveSite(Scope $scope): Site
    {
        return $scope->site ?? $this->siteFinder->getSiteByIdentifier($scope->siteIdentifier);
    }
}
