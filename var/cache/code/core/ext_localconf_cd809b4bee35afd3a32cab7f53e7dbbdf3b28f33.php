<?php
/**
 * Compiled ext_localconf.php cache file
 */

/**
 * Extension: core
 * File: /var/www/html/vendor/typo3/cms-core/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Authentication\AuthenticationService;
use TYPO3\CMS\Core\Controller\FileDumpController;
use TYPO3\CMS\Core\Controller\RequireJsController;
use TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck;
use TYPO3\CMS\Core\Hooks\BackendUserPasswordCheck;
use TYPO3\CMS\Core\Hooks\CreateSiteConfiguration;
use TYPO3\CMS\Core\Hooks\DestroySessionHook;
use TYPO3\CMS\Core\Hooks\PagesTsConfigGuard;
use TYPO3\CMS\Core\MetaTag\EdgeMetaTagManager;
use TYPO3\CMS\Core\MetaTag\Html5MetaTagManager;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Resource\Index\ExtractorRegistry;
use TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor;
use TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\RendererRegistry;
use TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer;
use TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer;
use TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect;
use TYPO3\CMS\Core\Resource\Security\SvgHookHandler;
use TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor;
use TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][GeneralUtility::class]['moveUploadedFile'][] = SvgHookHandler::class . '->processMoveUploadedFile';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserGroupIntegrityCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserPasswordCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DestroySessionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = PagesTsConfigGuard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][CreateSiteConfiguration::class] = CreateSiteConfiguration::class;
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = FileDumpController::class . '::dumpAction';
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['requirejs'] = RequireJsController::class . '::retrieveConfiguration';

$rendererRegistry = GeneralUtility::makeInstance(RendererRegistry::class);
$rendererRegistry->registerRendererClass(AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = GeneralUtility::makeInstance(TextExtractorRegistry::class);
$textExtractorRegistry->registerTextExtractor(PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = GeneralUtility::makeInstance(ExtractorRegistry::class);
$extractorRegistry->registerExtractionService(Extractor::class);
unset($extractorRegistry);

// Register base authentication service
ExtensionManagementUtility::addService(
    'core',
    'auth',
    AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserBE,authUserFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => TYPO3\CMS\Core\Authentication\AuthenticationService::class,
    ]
);

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'html5',
    Html5MetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'edge',
    EdgeMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(
    'config.pageTitleProviders.record.provider = TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider'
);

// Register preset for sys_news
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'] = 'EXT:core/Configuration/RTE/SysNews.yaml';
}
}


/**
 * Extension: scheduler
 * File: /var/www/html/vendor/typo3/cms-scheduler/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\ExecuteSchedulableCommandAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\ExecuteSchedulableCommandTask;
use TYPO3\CMS\Scheduler\Task\FileStorageExtractionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\FileStorageExtractionTask;
use TYPO3\CMS\Scheduler\Task\FileStorageIndexingAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\FileStorageIndexingTask;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationTask;
use TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableTask;
use TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask;

defined('TYPO3') or die();

// Add caching framework garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][CachingFrameworkGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
    'additionalFields' => CachingFrameworkGarbageCollectionAdditionalFieldProvider::class,
];

// Add task to index file in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][FileStorageIndexingTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
    'additionalFields' => FileStorageIndexingAdditionalFieldProvider::class,
];

// Add task for extracting metadata from files in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][FileStorageExtractionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
    'additionalFields' => FileStorageExtractionAdditionalFieldProvider::class,

];

// Add recycler directory cleanup task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][RecyclerGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
    'additionalFields' => RecyclerGarbageCollectionAdditionalFieldProvider::class,
];

// Add execute schedulable command task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][ExecuteSchedulableCommandTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:executeSchedulableCommandTask.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:executeSchedulableCommandTask.name',
    'additionalFields' => ExecuteSchedulableCommandAdditionalFieldProvider::class,
];

// Save any previous option array for table garbage collection task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$garbageCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options'] ?? [];
$garbageCollectionTaskOptions['tables'] = $garbageCollectionTaskOptions['tables'] ?? [];
// Add table garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
    'additionalFields' => TableGarbageCollectionAdditionalFieldProvider::class,
    'options' => $garbageCollectionTaskOptions,
];
unset($garbageCollectionTaskOptions);

// Register sys_log and sys_history table in table garbage collection task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_log'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 180,
    ];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_history'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_history'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 30,
    ];
}

// Save any previous option array for ip anonymization task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$ipAnonymizeCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options'] ?? [];
$ipAnonymizeCollectionTaskOptions['tables'] = $ipAnonymizeCollectionTaskOptions['tables'] ?? [];
// Add ip anonymization task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.description',
    'additionalFields' => IpAnonymizationAdditionalFieldProvider::class,
    'options' => $ipAnonymizeCollectionTaskOptions,
];
unset($ipAnonymizeCollectionTaskOptions);

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options']['tables']['sys_log'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'ipField' => 'IP',
    ];
}

// Add task for optimizing database tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][OptimizeDatabaseTableTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
    'additionalFields' => OptimizeDatabaseTableAdditionalFieldProvider::class,

];

// Available frequency options
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['frequencyOptions'] = [
    '0 9,15 * * 1-5' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example1',
    '0 */2 * * *' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example2',
    '*/20 * * * *' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example3',
    '0 7 * * 2' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example4',
];
}


/**
 * Extension: backend
 * File: /var/www/html/vendor/typo3/cms-backend/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider;
use TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider;
use TYPO3\CMS\Backend\View\BackendLayout\PageTsBackendLayoutDataProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
    'provider' => UsernamePasswordLoginProvider::class,
    'sorting' => 50,
    'iconIdentifier' => 'actions-key',
    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link',
];

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
    'provider' => DefaultAvatarProvider::class,
];

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Register BackendLayoutDataProvider for PageTs
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = PageTsBackendLayoutDataProvider::class;
}


/**
 * Extension: frontend
 * File: /var/www/html/vendor/typo3/cms-frontend/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Frontend\Controller\ShowImageController;
use TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks;

defined('TYPO3') or die();

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = ShowImageController::class . '::processRequest';

ExtensionManagementUtility::addUserTSConfig('
  options.saveDocView = 1
  options.saveDocNew = 1
  options.saveDocNew.pages = 0
  options.saveDocNew.sys_file = 0
  options.saveDocNew.sys_file_metadata = 0
  options.disableDelete.sys_file = 1
');

ExtensionManagementUtility::addTypoScriptSetup(
    '
# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Registering hooks for the tree list cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = TreelistCacheUpdateHooks::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';
}


/**
 * Extension: adminpanel
 * File: /var/www/html/vendor/typo3/cms-adminpanel/ext_localconf.php
 */

namespace {




use Psr\Log\LogLevel;
use TYPO3\CMS\Adminpanel\Controller\AjaxController;
use TYPO3\CMS\Adminpanel\Log\InMemoryLogWriter;
use TYPO3\CMS\Adminpanel\Modules\CacheModule;
use TYPO3\CMS\Adminpanel\Modules\Debug\Events;
use TYPO3\CMS\Adminpanel\Modules\Debug\Log;
use TYPO3\CMS\Adminpanel\Modules\Debug\PageTitle;
use TYPO3\CMS\Adminpanel\Modules\Debug\QueryInformation;
use TYPO3\CMS\Adminpanel\Modules\DebugModule;
use TYPO3\CMS\Adminpanel\Modules\Info\GeneralInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\PhpInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\RequestInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\UserIntInformation;
use TYPO3\CMS\Adminpanel\Modules\InfoModule;
use TYPO3\CMS\Adminpanel\Modules\PreviewModule;
use TYPO3\CMS\Adminpanel\Modules\TsDebug\TypoScriptWaterfall;
use TYPO3\CMS\Adminpanel\Modules\TsDebugModule;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules'] = [
    'preview' => [
        'module' => PreviewModule::class,
        'before' => ['cache'],
    ],
    'cache' => [
        'module' => CacheModule::class,
        'after' => ['preview'],
    ],
    'tsdebug' => [
        'module' => TsDebugModule::class,
        'after' => ['edit'],
        'submodules' => [
            'ts-waterfall' => [
                'module' => TypoScriptWaterfall::class,
            ],
        ],
    ],
    'info' => [
        'module' => InfoModule::class,
        'after' => ['tsdebug'],
        'submodules' => [
            'general' => [
                'module' => GeneralInformation::class,
            ],
            'request' => [
                'module' => RequestInformation::class,
            ],
            'phpinfo' => [
                'module' => PhpInformation::class,
            ],
            'userint' => [
                'module' => UserIntInformation::class,
            ],
        ],
    ],
    'debug' => [
        'module' => DebugModule::class,
        'after' => ['info'],
        'submodules' => [
            'log' => [
                'module' => Log::class,
            ],
            'queryInformation' => [
                'module' => QueryInformation::class,
            ],
            'pageTitle' => [
                'module' => PageTitle::class,
            ],
            'events' => [
                'module' => Events::class,
            ],
        ],
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['adminPanel_save']
    = AjaxController::class . '::saveDataAction';

// The admin panel has a module to show log messages. Register a debug logger to gather those.
$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][LogLevel::DEBUG][InMemoryLogWriter::class] = [];

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] = [];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['DB']['Connections']['Default']['driverMiddlewares'] = [];
}

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares']['adminpanel_loggingmiddleware'] = \TYPO3\CMS\Adminpanel\Log\DoctrineSqlLoggingMiddleware::class;
}


/**
 * Extension: dashboard
 * File: /var/www/html/vendor/typo3/cms-dashboard/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Cache\Backend\FileBackend;
use TYPO3\CMS\Core\Cache\Frontend\VariableFrontend;
use TYPO3\CMS\Dashboard\Persistence\DashboardCreationEnricher;

defined('TYPO3') or die();

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] = [
        'frontend' => VariableFrontend::class,
        'backend' => FileBackend::class,
        'options' => [
            'defaultLifetime' => 900,
        ],
    ];
}

// Fill the "owner" field of a dashboard with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DashboardCreationEnricher::class;
}


/**
 * Extension: fluid_styled_content
 * File: /var/www/html/vendor/typo3/cms-fluid-styled-content/ext_localconf.php
 */

namespace {




defined('TYPO3') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';
}


/**
 * Extension: reports
 * File: /var/www/html/vendor/typo3/cms-reports/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Reports\Task\SystemStatusUpdateTask;
use TYPO3\CMS\Reports\Task\SystemStatusUpdateTaskNotificationEmailField;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][SystemStatusUpdateTask::class] = [
    'extension' => 'reports',
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
    'additionalFields' => SystemStatusUpdateTaskNotificationEmailField::class,
];
}


/**
 * Extension: redirects
 * File: /var/www/html/vendor/typo3/cms-redirects/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Backend\Form\FormDataProvider\TcaInputPlaceholders;
use TYPO3\CMS\Redirects\Evaluation\SourceHost;
use TYPO3\CMS\Redirects\FormDataProvider\ValuePickerItemDataProvider;
use TYPO3\CMS\Redirects\Hooks\DataHandlerCacheFlushingHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerSlugUpdateHook;
use TYPO3\CMS\Redirects\Hooks\DispatchNotificationHook;

defined('TYPO3') or die();

// Rebuild cache in DataHandler on changing / inserting / adding redirect records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['redirects'] = DataHandlerCacheFlushingHook::class . '->rebuildRedirectCacheIfNecessary';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects'] = DataHandlerSlugUpdateHook::class;

// Inject sys_domains into valuepicker form
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[ValuePickerItemDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Add validation call for form field source_host and source_path
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][SourceHost::class] = '';

// Register update signal to send delayed notifications
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['redirects:slugChanged'] = DispatchNotificationHook::class . '->dispatchNotification';
}


/**
 * Extension: seo
 * File: /var/www/html/vendor/typo3/cms-seo/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Seo\Canonical\CanonicalGenerator;
use TYPO3\CMS\Seo\MetaTag\MetaTagGenerator;
use TYPO3\CMS\Seo\MetaTag\OpenGraphMetaTagManager;
use TYPO3\CMS\Seo\MetaTag\TwitterCardMetaTagManager;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['metatag'] =
    MetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical'] =
    CanonicalGenerator::class . '->generate';

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'opengraph',
    OpenGraphMetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'twitter',
    TwitterCardMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        seo {
            provider = TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
            before = record
        }
    }
'));
}


/**
 * Extension: form
 * File: /var/www/html/vendor/typo3/cms-form/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Form\Controller\FormFrontendController;
use TYPO3\CMS\Form\Hooks\FormElementHooks;
use TYPO3\CMS\Form\Hooks\ImportExportHook;
use TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration;

defined('TYPO3') or die();

call_user_func(static function () {
    if (ExtensionManagementUtility::isLoaded('impexp')) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/impexp/class.tx_impexp.php']['before_addSysFileRecord'][1530637161]
            = ImportExportHook::class . '->beforeAddSysFileRecordOnImport';
    }

    // Add module configuration
    ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_form {
    features.enableNamespacedArgumentsForBackend = 1
    settings {
        yamlConfigurations {
            10 = EXT:form/Configuration/Yaml/FormSetup.yaml
        }
    }
}'
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterSubmit'][1489772699]
        = FormElementHooks::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['beforeRendering'][1489772699]
        = FormElementHooks::class;

    // FE file upload processing
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1489772699]
        = PropertyMappingConfiguration::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterFormStateInitialized'][1613296803]
        = PropertyMappingConfiguration::class;

    // Register "formvh:" namespace
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['formvh'][] = 'TYPO3\\CMS\\Form\\ViewHelpers';

    // Register FE plugin
    ExtensionUtility::configurePlugin(
        'Form',
        'Formframework',
        [FormFrontendController::class => 'render, perform'],
        [FormFrontendController::class => 'perform'],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
});
}


/**
 * Extension: reactions
 * File: /var/www/html/vendor/typo3/cms-reactions/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Reactions\Form\Element\FieldMapElement;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1660911089] = [
    'nodeName' => 'fieldMap',
    'priority' => 40,
    'class' => FieldMapElement::class,
];
}


/**
 * Extension: recycler
 * File: /var/www/html/vendor/typo3/cms-recycler/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Recycler\Task\CleanerFieldProvider;
use TYPO3\CMS\Recycler\Task\CleanerTask;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][CleanerTask::class] = [
    'extension' => 'recycler',
    'title' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
    'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
    'additionalFields' => CleanerFieldProvider::class,
];
}


/**
 * Extension: rte_ckeditor
 * File: /var/www/html/vendor/typo3/cms-rte-ckeditor/ext_localconf.php
 */

namespace {




use TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver;

defined('TYPO3') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => RichTextNodeResolver::class,
];

// Register the presets
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}
}


/**
 * Extension: webhooks
 * File: /var/www/html/vendor/typo3/cms-webhooks/ext_localconf.php
 */

namespace {




defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Webhooks\Listener\PageModificationListener::class;
}


/**
 * Extension: extensionmanager
 * File: /var/www/html/vendor/typo3/cms-extensionmanager/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask;

defined('TYPO3') or die();

// Register extension list update task
if (!(bool)GeneralUtility::makeInstance(
    ExtensionConfiguration::class
)->get('extensionmanager', 'offlineMode')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][UpdateExtensionListTask::class] = [
        'extension' => 'extensionmanager',
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}
}


/**
 * Extension: felogin
 * File: /var/www/html/vendor/typo3/cms-felogin/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\FrontendLogin\Controller\LoginController;
use TYPO3\CMS\FrontendLogin\Controller\PasswordRecoveryController;

defined('TYPO3') or die();

// Add default TypoScript
ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:felogin/Configuration/TypoScript/constants.typoscript'"
);
ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:felogin/Configuration/TypoScript/setup.typoscript'"
);

ExtensionUtility::configurePlugin(
    'Felogin',
    'Login',
    [
        LoginController::class => 'login, overview',
        PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword',
    ],
    [
        LoginController::class => 'login, overview',
        PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword',
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
}


/**
 * Extension: opendocs
 * File: /var/www/html/vendor/typo3/cms-opendocs/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Opendocs\Backend\ToolbarItems\OpendocsToolbarItem;

defined('TYPO3') or die();

// Register update signal to update the number of open documents
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['OpendocsController::updateNumber'] = OpendocsToolbarItem::class . '->updateNumberOfOpenDocsHook';
}


/**
 * Extension: sys_note
 * File: /var/www/html/vendor/typo3/cms-sys-note/ext_localconf.php
 */

namespace {




use TYPO3\CMS\SysNote\Persistence\NoteCreationEnricher;

defined('TYPO3') or die();

// Fill the "owner" field of a dashboard with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = NoteCreationEnricher::class;
}


/**
 * Extension: t3editor
 * File: /var/www/html/vendor/typo3/cms-t3editor/ext_localconf.php
 */

namespace {




use TYPO3\CMS\T3editor\Form\Element\T3editorElement;

defined('TYPO3') or die();

// Register backend FormEngine node
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = [
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => T3editorElement::class,
];
}


/**
 * Extension: tstemplate
 * File: /var/www/html/vendor/typo3/cms-tstemplate/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['tstemplate'] = DataHandlerClearCachePostProcHook::class . '->clearPageCacheIfNecessary';
}


/**
 * Extension: container
 * File: /var/www/html/vendor/b13/container/ext_localconf.php
 */

namespace {


defined('TYPO3') || die('Access denied.');

call_user_func(static function () {
    $typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);

    if ($typo3Version->getMajorVersion() === 10) {
        // register default icons
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \TYPO3\CMS\Core\Imaging\IconRegistry::class
        );
        $iconsToRegister = [
            'container-1col',
            'container-2col',
            'container-2col-left',
            'container-2col-right',
            'container-3col',
            'container-4col',
        ];
        foreach ($iconsToRegister as $icon) {
            $iconRegistry->registerIcon(
                $icon,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                [
                    'source' => 'EXT:container/Resources/Public/Icons/' . $icon . '.svg',
                ]
            );
        }
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['extTablesInclusion-PostProcessing']['tx_container'] =
            \B13\Container\Hooks\TableConfigurationPostProcessing::class;
    }

    if ($typo3Version->getMajorVersion() < 12) {
        // remove container colPos from "unused" page-elements (v12: IsContentUsedOnPageLayoutEvent)
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['record_is_used']['tx_container'] =
            \B13\Container\Hooks\UsedRecords::class . '->addContainerChildren';
        // add tx_container_parent parameter to wizard items (v12: ModifyNewContentElementWizardItemsEvent)
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms']['db_new_content_el']['wizardItemsHook']['tx_container'] =
            \B13\Container\Hooks\WizardItems::class;
        // LocalizationController Xclass (v12: AfterRecordSummaryForLocalizationEvent)
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Backend\Controller\Page\LocalizationController::class] = [
            'className' => \B13\Container\Xclasses\LocalizationController::class,
        ];
        if (\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\Features::class)->isFeatureEnabled('fluidBasedPageModule') === false) {
            // draw container grid
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][] =
                \B13\Container\Hooks\DrawItem::class;
            // else, if enabled we register container previewRenderer in registry foreach container CType
        }
    }

    $commandMapHooks = [
        'tx_container-post-process' => \B13\Container\Hooks\Datahandler\CommandMapPostProcessingHook::class,
        'tx_container-before-start' => \B13\Container\Hooks\Datahandler\CommandMapBeforeStartHook::class,
        'tx_container-delete' => \B13\Container\Hooks\Datahandler\DeleteHook::class,
        'tx_container-after-finish' => \B13\Container\Hooks\Datahandler\CommandMapAfterFinishHook::class,
    ];

    $datamapHooks = [
        'tx_container-before-start' => \B13\Container\Hooks\Datahandler\DatamapBeforeStartHook::class,
        'tx_container-pre-process-field-array' => \B13\Container\Hooks\Datahandler\DatamapPreProcessFieldArrayHook::class,
    ];

    // EXT:content_defender
    $packageManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Package\PackageManager::class);
    if ($packageManager->isPackageActive('content_defender')) {
        if (version_compare($packageManager->getPackage('content_defender')->getPackageMetaData()->getVersion(), '3.1.0', '>=')) {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['content_defender']['ColumnConfigurationManipulationHook']['tx_container'] =
                \B13\Container\ContentDefender\Hooks\ColumnConfigurationManipulationHook::class;
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\IchHabRecht\ContentDefender\Hooks\DatamapDataHandlerHook::class] = [
                'className' => \B13\Container\ContentDefender\Xclasses\DatamapHook::class,
            ];
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\IchHabRecht\ContentDefender\Hooks\CmdmapDataHandlerHook::class] = [
                'className' => \B13\Container\ContentDefender\Xclasses\CommandMapHook::class,
            ];
        }
    }

    // set our hooks at the beginning of Datamap Hooks
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'] = array_merge(
        $commandMapHooks,
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'] ?? []
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'] = array_merge(
        $datamapHooks,
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][B13\Container\Updates\ContainerMigrateSorting::IDENTIFIER]
        = B13\Container\Updates\ContainerMigrateSorting::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][B13\Container\Updates\ContainerDeleteChildrenWithWrongPid::IDENTIFIER]
        = B13\Container\Updates\ContainerDeleteChildrenWithWrongPid::class;
});
}


/**
 * Extension: mask
 * File: /var/www/html/vendor/mask/mask/ext_localconf.php
 */

namespace {


defined('TYPO3') or die();

// Enhance Fluid Output with overridden FluidTemplateContentObject
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Frontend\ContentObject\FluidTemplateContentObject::class] = [
    'className' => \MASK\Mask\Fluid\FluidTemplateContentObject::class,
];

// Hook to override tt_content backend_preview
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['mask'] = \MASK\Mask\Hooks\PageLayoutViewDrawItem::class;
// Hook to override colpos check for unused tt_content elements
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['record_is_used'][] = \MASK\Mask\Hooks\PageLayoutViewHook::class . '->contentIsUsed';

// Extend Page Tca Fields specific for backend layout
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\MASK\Mask\Form\FormDataProvider\TcaTypesShowitemMaskBeLayoutFields::class] = [
    'depends' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRecordTypeValue::class,
    ],
    'before' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\TcaColumnsProcessCommon::class,
    ],
];

// Update wizards
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['convertTemplatesToUppercase'] = \MASK\Mask\Updates\ConvertTemplatesToUppercase::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['moveRteOptions'] = \MASK\Mask\Updates\MoveRteOptions::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['fillTranslationSourceField'] = \MASK\Mask\Updates\FillTranslationSourceField::class;

(static function () {
    // Register Icons needed in the backend module
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    foreach (\MASK\Mask\Enumeration\FieldType::getConstants() as $maskIcon) {
        $iconRegistry->registerIcon(
            'mask-fieldtype-' . $maskIcon,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:mask/Resources/Public/Icons/Fieldtypes/' . \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($maskIcon) . '.svg']
        );
    }

    // Add all the typoscript we need in the correct files
    $typoScriptCodeGenerator = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(MASK\Mask\CodeGenerator\TyposcriptCodeGenerator::class);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($typoScriptCodeGenerator->generateTsConfig());
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($typoScriptCodeGenerator->generatePageTSConfigOverridesForBackendLayouts());
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup($typoScriptCodeGenerator->generateSetupTyposcript());

    /** @var \MASK\Mask\Definition\TableDefinitionCollection $tables */
    $tables = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\MASK\Mask\Loader\LoaderRegistry::class)->loadActiveDefinition();
    if ($tables->hasTable('pages')) {
        $rootlineFields = [];
        if ($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] !== '') {
            $rootlineFields = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields']);
        }
        foreach ($tables->getTable('pages')->tca as $field) {
            if ($field->hasFieldType() && !$field->getFieldType()->isGroupingField()) {
                // Add addRootLineFields for all page fields
                $rootlineFields[] = $field->fullKey;
            }
        }
        $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] = implode(',', $rootlineFields);
    }
})();
}


/**
 * Extension: ke_search
 * File: /var/www/html/vendor/tpwd/ke_search/ext_localconf.php
 */

namespace {


defined('TYPO3') or die();

(function () {
    // add Searchbox Plugin, override class name with namespace
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43('ke_search', '', '_pi1');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'tx_kesearch',
        'setup',
        'plugin.tx_kesearch_pi1.userFunc = Tpwd\KeSearch\Plugins\SearchboxPlugin->main'
    );

    // add Resultlist Plugin, override class name with namespace
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43('ke_search', '', '_pi2');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'tx_kesearch',
        'setup',
        'plugin.tx_kesearch_pi2.userFunc = Tpwd\KeSearch\Plugins\ResultlistPlugin->main'
    );

    // add cachable Searchbox Plugin, override class name with namespace
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43('ke_search', '', '_pi3', 'list_type', 1);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'tx_kesearch',
        'setup',
        'plugin.tx_kesearch_pi3.userFunc = Tpwd\KeSearch\Plugins\SearchboxPlugin->main'
    );

    // Add TypoScript configuration for dashboard widgets
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ke_search/Configuration/TypoScript/Backend/dashboard.typoscript">'
    );

    // add page TSconfig (Content element wizard icons, hide index table)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ke_search/Configuration/TSconfig/Page/pageTSconfig.tsconfig">'
    );

    // use hooks for generation of sortdate values
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerAdditionalFields'][] =
        \Tpwd\KeSearch\Hooks\AdditionalFields::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyPagesIndexEntry'][] =
        \Tpwd\KeSearch\Hooks\AdditionalFields::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyContentIndexEntry'][] =
        \Tpwd\KeSearch\Hooks\AdditionalFields::class;

    // Custom validators for TCA (eval)
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']
    ['Tpwd\\KeSearch\\UserFunction\\CustomFieldValidation\\FilterOptionTagValidator'] =
        'EXT:ke_search/Classes/UserFunction/CustomFieldValidation/FilterOptionTagValidator.php';

    // logging
    $extConf = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    )->get('ke_search');
    $loglevel = strtolower($extConf['loglevel'] ?? 'ERROR');
    $GLOBALS['TYPO3_CONF_VARS']['LOG']['Tpwd']['KeSearch']['writerConfiguration'] = [
        $loglevel => [
            \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
                'logFileInfix' => 'kesearch',
            ],
        ],
    ];

    // register "after save" hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']
    ['ke_search-filter-option'] = \Tpwd\KeSearch\Hooks\FilterOptionHook::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']
    ['ke_search-filter-option'] = \Tpwd\KeSearch\Hooks\FilterOptionHook::class;

    // Upgrade Wizards
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['keSearchMakeTagsAlphanumericUpgradeWizard']
        = \Tpwd\KeSearch\Updates\MakeTagsAlphanumericUpgradeWizard::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['keSearchPopulateFilterOptionsSlugsUpgradeWizard']
        = \Tpwd\KeSearch\Updates\PopulateFilterOptionSlugsUpgradeWizard::class;

    // Custom aspects for routing
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['KeSearchUrlEncodeMapper'] =
        \Tpwd\KeSearch\Routing\Aspect\KeSearchUrlEncodeMapper::class;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['KeSearchTagToSlugMapper'] =
        \Tpwd\KeSearch\Routing\Aspect\KeSearchTagToSlugMapper::class;
})();
}


/**
 * Extension: c1_adaptive_images
 * File: /var/www/html/vendor/c1/c1-adaptive-images/ext_localconf.php
 */

namespace {


defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['ai'] = ['C1\\AdaptiveImages\\ViewHelpers'];
}


/**
 * Extension: news
 * File: /var/www/html/vendor/georgringer/news/ext_localconf.php
 */

namespace {


defined('TYPO3') or die();

$boot = static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'Pi1',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'list,detail',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'NewsListSticky',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'list',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'NewsDetail',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'detail',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'NewsSelectedList',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'selectedList',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'NewsDateMenu',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'dateMenu',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'NewsSearchForm',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'searchForm',
        ],
        [
            \GeorgRinger\News\Controller\NewsController::class => 'searchForm',
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'NewsSearchResult',
        [
            \GeorgRinger\News\Controller\NewsController::class => 'searchResult',
        ],
        [
            \GeorgRinger\News\Controller\NewsController::class => 'searchResult',
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'CategoryList',
        [
            \GeorgRinger\News\Controller\CategoryController::class => 'list',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'News',
        'TagList',
        [
            \GeorgRinger\News\Controller\TagController::class => 'list',
        ],
        [],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['news_clearcache'] =
        \GeorgRinger\News\Hooks\DataHandlerHook::class . '->clearCachePostProc';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass']['news_clearcache'] =
        \GeorgRinger\News\Hooks\DataHandlerHook::class;

    // Edit restriction for news records
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['news'] =
        \GeorgRinger\News\Hooks\DataHandlerHook::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['news'] =
        \GeorgRinger\News\Hooks\DataHandlerHook::class;

//    // Modify flexform fields since core 8.5 via formEngine: Inject a data provider between TcaFlexPrepare and TcaFlexProcess
//    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\GeorgRinger\News\Backend\FormDataProvider\NewsFlexFormManipulation::class] = [
//        'depends' => [
//            \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexPrepare::class,
//        ],
//        'before' => [
//            \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexProcess::class,
//        ],
//    ];

    // Hide content elements in list module & filter in administration module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Recordlist\RecordList\DatabaseRecordList::class]['modifyQuery']['ext:news']
        = \GeorgRinger\News\Hooks\Backend\RecordListQueryHook::class;

    // Hide content elements in page module
    // @extensionScannerIgnoreLine
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Backend\View\PageLayoutView::class]['modifyQuery']['ext:news'] = \GeorgRinger\News\Hooks\Backend\PageViewQueryHook::class;

    // Inline records hook
    // @extensionScannerIgnoreLine
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['tceformsInlineHook']['news'] = \GeorgRinger\News\Hooks\InlineElementHook::class;

    /* ===========================================================================
        Custom cache, done with the caching framework
    =========================================================================== */
    if (empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news_category'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news_category'] = [];
    }
    // Define string frontend as default frontend, this must be set with TYPO3 4.5 and below
    // and overrides the default variable frontend of 4.6
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news_category']['frontend'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news_category']['frontend'] = \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class;
    }

    /* ===========================================================================
        Add TSconfig
    =========================================================================== */
    // For linkvalidator
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('linkvalidator')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import \'EXT:news/Configuration/TSconfig/Page/mod.linkvalidator.tsconfig\'');
    }
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('guide')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import \'EXT:news/Configuration/TSconfig/Tours/AdministrationModule.tsconfig\'');
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    @import \'EXT:news/Configuration/TSconfig/ContentElementWizard.tsconfig\'
    @import \'EXT:news/Configuration/TSconfig/Administration.tsconfig\'
    ');

    /* ===========================================================================
        Hooks
    =========================================================================== */
    // Register cache frontend for proxy class generation
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news'] = [
        'frontend' => \TYPO3\CMS\Core\Cache\Frontend\PhpFrontend::class,
        'backend' => \TYPO3\CMS\Core\Cache\Backend\FileBackend::class,
        'groups' => [
            'all',
            'system',
        ],
        'options' => [
            'defaultLifetime' => 0,
        ],
    ];

    if (class_exists(\GeorgRinger\News\Utility\ClassLoader::class)) {
        \GeorgRinger\News\Utility\ClassLoader::registerAutoloader();
    }
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['ext:news'] =
        \GeorgRinger\News\Utility\ClassCacheManager::class . '->reBuild';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\GeorgRinger\News\Backend\FormDataProvider\NewsRowInitializeNew::class] = [
        'depends' => [
            \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowInitializeNew::class,
        ],
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['realurlAliasNewsSlug'] = \GeorgRinger\News\Updates\RealurlAliasNewsSlugUpdater::class; // Recommended before 'newsSlug'
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['newsSlug'] = \GeorgRinger\News\Updates\NewsSlugUpdater::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysCategorySlugs'] = \GeorgRinger\News\Updates\PopulateCategorySlugs::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['txNewsTagSlugs'] = \GeorgRinger\News\Updates\PopulateTagSlugs::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['txNewsRelatedLinkIntegerDefault'] = \GeorgRinger\News\Updates\RelatedLinkIntegerDefault::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['txNewsTitleFieldDefault'] = \GeorgRinger\News\Updates\TitleFieldDefault::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['txNewsPluginUpdater'] = \GeorgRinger\News\Updates\PluginUpdater::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['txNewsPluginPermissionUpdater'] = \GeorgRinger\News\Updates\PluginPermissionUpdater::class;

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
    plugin {
        tx_news_newsliststicky.view.pluginNamespace = tx_news_pi1
        tx_news_newsdetail.view.pluginNamespace = tx_news_pi1
        tx_news_newsselectedlist.view.pluginNamespace = tx_news_pi1
        tx_news_newsdatemenu.view.pluginNamespace = tx_news_pi1
        tx_news_categorylist.view.pluginNamespace = tx_news_pi1
        tx_news_newssearchform.view.pluginNamespace = tx_news_pi1
        tx_news_newssearchresult.view.pluginNamespace = tx_news_pi1
        tx_news_taglist.view.pluginNamespace = tx_news_pi1
    }
    config.pageTitleProviders {
        news {
            provider = GeorgRinger\News\Seo\NewsTitleProvider
            before = altPageTitle,record,seo
        }
    }
'));

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('seo')) {
        $GLOBALS['TYPO3_CONF_VARS']['FE']['additionalCanonicalizedUrlParameters'] = array_merge(
            $GLOBALS['TYPO3_CONF_VARS']['FE']['additionalCanonicalizedUrlParameters'] ?? [],
            [
                'tx_news_pi1[news]',
                'tx_news_pi1[overwriteDemand][tags]',
                'tx_news_pi1[overwriteDemand][categories]',
                'tx_news_pi1[overwriteDemand][year]',
                'tx_news_pi1[overwriteDemand][month]',
                'tx_news_pi1[overwriteDemand][day]',
            ]
        );
    }

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Extbase\Service\ExtensionService::class] = [
        'className' => \GeorgRinger\News\Xclass\ExtensionServiceXclassed::class,
    ];

    // Add routing features
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['NewsCategory'] = \GeorgRinger\News\Routing\NewsAliasMapper::class;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['NewsTag'] = \GeorgRinger\News\Routing\NewsAliasMapper::class;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['NewsTitle'] = \GeorgRinger\News\Routing\NewsAliasMapper::class;
};

$boot();
unset($boot);
}


/**
 * Extension: setup_package
 * File: /var/www/html/vendor/techdivision/setup-package/ext_localconf.php
 */

namespace {

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$packageKey = "setup_package";
/***************
 * overrite default news files
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/News/locallang.xlf";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/News/de.locallang.xlf";

/***************
 * ke_search
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:ke_search/Resources/Private/Language/locallang_searchbox.xlf'][] = "EXT:$packageKey/Resources/Private/Language/KeSearch/locallang_searchbox.xml";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:ke_search/Resources/Private/Language/locallang_resultlist.xlf'][] = "EXT:$packageKey/Resources/Private/Language/KeSearch/locallang_resultlist.xml";

/***************
 * overrite default cookie consent files
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:mindshape_cookie_consent/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/CookieConsent/locallang.xlf";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:mindshape_cookie_consent/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/CookieConsent/de.locallang.xlf";

/***************
 * add custom RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = "EXT:$packageKey/Configuration/Yaml/RTE/custom.yaml";
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mask'] = "EXT:$packageKey/Configuration/Yaml/RTE/mask.yaml";
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['news'] = "EXT:$packageKey/Configuration/Yaml/RTE/news.yaml";

/***************
 * extend css for CkEditor backend
 */
$GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['setup_package']  = "EXT:$packageKey/Resources/Public/Styles/Backend/";

/***************
 * BE setup for form
*/
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    trim('
        module.tx_form {
        settings {
            yamlConfigurations {
                100 = EXT:setup_package/Configuration/Yaml/FormDefinition/DefaultFormConfiguration.yaml
                }
            }
        }
    ')
);
}


/**
 * Extension: webp
 * File: /var/www/html/vendor/plan2net/webp/ext_localconf.php
 */

namespace {


defined('TYPO3') || exit;

(static function () {
    if (\Plan2net\Webp\Service\Configuration::get('hide_webp')) {
        // Hide webp files in file lists
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['fal']['defaultFilterCallbacks'][] = [
            \Plan2net\Webp\Core\Filter\FileNameFilter::class,
            'filterWebpFiles',
        ];
    }
})();
}


#