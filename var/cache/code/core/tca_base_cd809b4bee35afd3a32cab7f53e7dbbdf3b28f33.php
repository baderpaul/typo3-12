<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'groupName' => 'backendaccess',
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailablePageTypes',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExcludeFields',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExplicitAuthValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateCustomPermissionOptions',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'mfa_providers' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:mfa_providers',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Authentication\\Mfa\\MfaProviderRegistry->allowedProvidersItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT({#be_groups}.{#uid} = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'availableWidgets' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:availableWidgets',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Dashboard\\WidgetRegistry->widgetItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,
                groupMods, availableWidgets, mfa_providers, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny, allowed_languages, custom_options,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'nospace,trim,lower,unique',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
          ),
        ),
        'mfa' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.mfa',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'mfaInfo',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'size' => 5,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'file',
            'maxitems' => 1,
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isRecordCurrentUser:false',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'default' => 1,
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSystemLanguagesForBackend',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'English',
                'value' => 'default',
              ),
            ),
            'itemGroups' => 
            array (
              'installed' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.installed',
              'unavailable' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.unavailable',
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                admin, username, password, mfa, usergroup, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.personal_data,
                realName, email, avatar,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,
                userMods, allowed_languages,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, options, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                disable, --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                admin, username, password, mfa, usergroup, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.personal_data,
                realName, email, avatar,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig, db_mountpoints, options, file_mountpoints,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                disable, --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
          'contains-newsplugins' => 'apps-pagetree-page-contains-news',
        ),
        'searchFields' => 'title,nav_title,subtitle,url,slug,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                'value' => '--div--',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                'value' => '1',
                'icon' => 'apps-pagetree-page-default',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                'value' => '6',
                'icon' => 'apps-pagetree-page-backend-users',
                'group' => 'default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                'value' => '--div--',
                'group' => 'link',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                'value' => '4',
                'icon' => 'apps-pagetree-page-shortcut',
                'group' => 'link',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                'value' => '7',
                'icon' => 'apps-pagetree-page-mountpoint',
                'group' => 'link',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                'value' => '3',
                'icon' => 'apps-pagetree-page-shortcut-external',
                'group' => 'link',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                'value' => '--div--',
                'group' => 'special',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                'value' => '254',
                'icon' => 'apps-pagetree-folder-default',
                'group' => 'special',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                'value' => '255',
                'icon' => 'apps-filetree-folder-recycler',
                'group' => 'special',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                'value' => '199',
                'icon' => 'apps-pagetree-spacer',
                'group' => 'special',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
              'link' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition->isInPseudoSite:pages:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#uid}=###CURRENT_PID### AND {#pages}.{#sys_language_uid} = 0',
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
            'softref' => 'url',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                'value' => 60,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                'value' => 300,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                'value' => 900,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                'value' => 1800,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                'value' => 3600,
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                'value' => 14400,
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                'value' => 86400,
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                'value' => 172800,
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                'value' => 604800,
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                'value' => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                'value' => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 23,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'file',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                'value' => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                'value' => 'fe_users',
                'icon' => 'status-user-frontend',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-folder',
                'value' => 'news',
                'icon' => 'apps-pagetree-folder-contains-news',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-page',
                'value' => 'newsplugins',
                'icon' => 'apps-pagetree-page-contains-news',
              ),
            ),
            'default' => '',
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'fieldInformation' => 
            array (
              'backendLayoutFromParentPage' => 
              array (
                'renderType' => 'backendLayoutFromParentPage',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'EXT:ke_search :: Restrict pages to ke_search records (ke_search)',
                'value' => 'EXT:ke_search/Configuration/TSconfig/AllowedNewTables.tsconfig',
              ),
              1 => 
              array (
                'label' => 'EXT:news :: Restrict pages to news records (news)',
                'value' => 'EXT:news/Configuration/TSconfig/Page/news_only.tsconfig',
              ),
              2 => 
              array (
                'label' => 'Backend Layouts (Templates, Crop Variants) (setup_package)',
                'value' => 'EXT:setup_package/Configuration/TSconfig/Page/TSBeLayouts.tsconfig',
              ),
              3 => 
              array (
                'label' => 'Backend settings (setup_package)',
                'value' => 'EXT:setup_package/Configuration/TSconfig/Page/Page.tsconfig',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.always',
                'value' => 'always',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.hourly',
                'value' => 'hourly',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.daily',
                'value' => 'daily',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.weekly',
                'value' => 'weekly',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.monthly',
                'value' => 'monthly',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.yearly',
                'value' => 'yearly',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.never',
                'value' => 'never',
              ),
            ),
          ),
        ),
        'sitemap_priority' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '0.5',
            'items' => 
            array (
              0 => 
              array (
                'label' => '0.0',
                'value' => '0.0',
              ),
              1 => 
              array (
                'label' => '0.1',
                'value' => '0.1',
              ),
              2 => 
              array (
                'label' => '0.2',
                'value' => '0.2',
              ),
              3 => 
              array (
                'label' => '0.3',
                'value' => '0.3',
              ),
              4 => 
              array (
                'label' => '0.4',
                'value' => '0.4',
              ),
              5 => 
              array (
                'label' => '0.5',
                'value' => '0.5',
              ),
              6 => 
              array (
                'label' => '0.6',
                'value' => '0.6',
              ),
              7 => 
              array (
                'label' => '0.7',
                'value' => '0.7',
              ),
              8 => 
              array (
                'label' => '0.8',
                'value' => '0.8',
              ),
              9 => 
              array (
                'label' => '0.9',
                'value' => '0.9',
              ),
              10 => 
              array (
                'label' => '1.0',
                'value' => '1.0',
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'url',
              2 => 'record',
            ),
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'rel',
              ),
            ),
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'summary',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary',
                'value' => 'summary',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary_large_image',
                'value' => 'summary_large_image',
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_kesearch_tags' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_tags',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 100,
            'items' => 
            array (
            ),
            'allowNonIdValues' => true,
            'itemsProcFunc' => 'Tpwd\\KeSearch\\Backend\\Filterlist->getListOfAvailableFiltersForTCA',
          ),
        ),
        'tx_kesearch_abstract' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'tx_kesearch_resultimage' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_resultimage',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => '',
            'disallowed' => '',
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_kesearch_resultimage',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'breadcrumb' => 
        array (
          'label' => 'LLL:EXT:setup_package/Resources/Private/Language/locallang_be.xlf:show-breadcrumb',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title, breadcrumb, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.seo, --palette--;;seo, --palette--;;robots, --palette--;;canonical, --palette--;;sitemap, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'headerdesktop' => 
                          array (
                            'title' => 'Headerformat Desktop',
                            'selectedRatio' => '24:7',
                            'allowedAspectRatios' => 
                            array (
                              '24:7' => 
                              array (
                                'title' => '24:7',
                                'value' => '3.42857',
                              ),
                            ),
                          ),
                          'headermobile' => 
                          array (
                            'title' => 'Headerformat Mobile < 768px',
                            'selectedRatio' => '16:9',
                            'allowedAspectRatios' => 
                            array (
                              '16:19' => 
                              array (
                                'title' => '16:9',
                                'value' => '1.7777777',
                              ),
                            ),
                          ),
                          'default' => 
                          array (
                            'disabled' => true,
                          ),
                          'tablet' => 
                          array (
                            'disabled' => true,
                          ),
                          'mobilelandscape' => 
                          array (
                            'disabled' => true,
                          ),
                          'mobile' => 
                          array (
                            'disabled' => true,
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        6 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title, breadcrumb,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, breadcrumb,
                    --palette--;;external,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, breadcrumb,
                    --palette--;;shortcut,
                    --palette--;;shortcutpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'headerdesktop' => 
                          array (
                            'title' => 'Headerformat Desktop',
                            'selectedRatio' => '24:7',
                            'allowedAspectRatios' => 
                            array (
                              '24:7' => 
                              array (
                                'title' => '24:7',
                                'value' => '3.42857',
                              ),
                            ),
                          ),
                          'headermobile' => 
                          array (
                            'title' => 'Headerformat Mobile < 768px',
                            'selectedRatio' => '16:9',
                            'allowedAspectRatios' => 
                            array (
                              '16:19' => 
                              array (
                                'title' => '16:9',
                                'value' => '1.7777777',
                              ),
                            ),
                          ),
                          'default' => 
                          array (
                            'disabled' => true,
                          ),
                          'tablet' => 
                          array (
                            'disabled' => true,
                          ),
                          'mobilelandscape' => 
                          array (
                            'disabled' => true,
                          ),
                          'mobile' => 
                          array (
                            'disabled' => true,
                          ),
                          'card' => 
                          array (
                            'disabled' => true,
                          ),
                          'flipcard' => 
                          array (
                            'disabled' => true,
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, breadcrumb,
                    --palette--;;mountpoint,
                    --palette--;;mountpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage, breadcrumb',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage, breadcrumb',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, tx_kesearch_tags, tx_kesearch_abstract, tx_kesearch_resultimage, breadcrumb',
        ),
      ),
      'palettes' => 
      array (
        'standard' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard',
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel, target',
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle_formlabel, nav_hide;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle_formlabel',
        ),
        'hiddenonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract',
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags',
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel',
        ),
        'editorial' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial',
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'layout, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module',
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace',
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links',
          'showitem' => 'target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching',
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags',
        ),
        'language' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language',
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel,  php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media',
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config',
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
        'seo' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo',
          'showitem' => 'seo_title;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'robots' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.robots',
          'showitem' => 'no_index;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel, no_follow;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
        ),
        'canonical' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.canonical',
          'showitem' => 'canonical_link',
        ),
        'sitemap' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.sitemap',
          'showitem' => 'sitemap_changefreq, sitemap_priority',
        ),
        'opengraph' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.opengraph',
          'showitem' => 'og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.twittercards',
          'showitem' => 'twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image, --linebreak--, twitter_card',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'versioningWS' => true,
        'rootLevel' => -1,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
        'label_userFunc' => 'GeorgRinger\\News\\Hooks\\Labels->getUserLabelCategory',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, slug, parent,
                --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,
                    items,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,--palette--;;timeRestriction, --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.tabs.seo, seo_title, seo_description, seo_headline, seo_text,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options, images, description, single_pid, shortcut,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:pages.tx_kesearch_label, tx_kesearch_filter, tx_kesearch_filtersubcat',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND {#sys_category}.{#pid}=###CURRENT_PID### AND {#sys_category}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'tx_news_domain_model_news' => 
              array (
                0 => 'categories',
              ),
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'tx_kesearch_filter' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:sys_category.tx_kesearch_filter',
          'config' => 
          array (
            'default' => 0,
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_kesearch_filters',
            'foreign_table_where' => ' AND tx_kesearch_filters.sys_language_uid IN (-1,0)',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'tx_kesearch_filtersubcat' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:sys_category.tx_kesearch_filtersubcat',
          'config' => 
          array (
            'default' => 0,
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_kesearch_filters',
            'foreign_table_where' => ' AND tx_kesearch_filters.sys_language_uid IN (-1,0)',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'images' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.image',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'images',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'single_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.single_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.shortcut',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'VERSION:IS:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'unique',
            'default' => '',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                'value' => 3,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                'value' => 4,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                'value' => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'number',
            'size' => 8,
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND {#sys_file_collection}.{#pid}=###CURRENT_PID### AND {#sys_file_collection}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                'value' => 'static',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                'value' => 'folder',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                'value' => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'file',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'folder_identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'folder',
            'required' => true,
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'static' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'folder' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,folder_identifier, recursive,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'category' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,category,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_metadata',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND {#sys_file}.{#uid} = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.width',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.height',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'tx_kesearch_no_search' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.tx_kesearch_no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                fileinfo, alternative, description, title, --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.tx_kesearch_label, tx_kesearch_no_search',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_reference',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'size' => 1,
            'maxitems' => 1,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 20,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
            ),
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'showinpreview' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.0',
                'value' => 0,
                'icon' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.1',
                'value' => 1,
                'icon' => '',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.2',
                'value' => 2,
                'icon' => '',
              ),
            ),
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				alternative,description,--linebreak--,
				link,title,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        'newsPalette' => 
        array (
          'showitem' => 'showinpreview',
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'groupName' => 'system',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                'label' => 'Local filesystem',
                'value' => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,
                    --palette--;Capabilities;capabilities,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    is_online,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.identifier',
          'config' => 
          array (
            'type' => 'folder',
            'required' => true,
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, identifier, read_only,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'channel' => 
        array (
          'label' => 'channel',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'level' => 
        array (
          'label' => 'level',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
        'searchFields' => 'title,content',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'sys_news',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,content,crdate,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'searchFields' => 'groupName',
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'required' => true,
            'eval' => 'unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    groupName,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'maxitems' => 1,
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,icon,config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'groupName' => 'frontendaccess',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT({#fe_groups}.{#uid} = ###THIS_UID###)',
            'size' => 6,
            'autoSizeMax' => 10,
            'maxitems' => 20,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                'value' => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup, felogin_redirectPid,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup, felogin_redirectPid,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'groupName' => 'frontendaccess',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'required' => true,
            'eval' => 'nospace,trim,lower,uniqueInPid',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'size' => 6,
            'minitems' => 1,
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'maxitems' => 6,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                'value' => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup, felogin_redirectPid,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personalData,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup, felogin_redirectPid,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personalData,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.rootDescription',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clearDescription',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Constants',
              ),
              1 => 
              array (
                'label' => 'Setup',
              ),
            ),
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 15,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_fileDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Fluid Content Elements (fluid_styled_content)',
                'value' => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              1 => 
              array (
                'label' => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                'value' => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              2 => 
              array (
                'label' => 'XML Sitemap (seo)',
                'value' => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
              3 => 
              array (
                'label' => 'Form (form)',
                'value' => 'EXT:form/Configuration/TypoScript/',
              ),
              4 => 
              array (
                'label' => 'Mask (mask)',
                'value' => 'EXT:mask/Configuration/TypoScript',
              ),
              5 => 
              array (
                'label' => 'Faceted Search (ke_search)',
                'value' => 'EXT:ke_search/Configuration/TypoScript',
              ),
              6 => 
              array (
                'label' => 'adaptive image viewhelpers for fluid styled content (c1_adaptive_images)',
                'value' => 'EXT:c1_adaptive_images/Configuration/TypoScript',
              ),
              7 => 
              array (
                'label' => 'News (news)',
                'value' => 'EXT:news/Configuration/TypoScript',
              ),
              8 => 
              array (
                'label' => 'News Sitemap (news)',
                'value' => 'EXT:news/Configuration/TypoScript/Sitemap',
              ),
              9 => 
              array (
                'label' => 'News Styles Twitter Bootstrap (news)',
                'value' => 'EXT:news/Configuration/TypoScript/Styles/Twb',
              ),
              10 => 
              array (
                'label' => 'News Styles Twitter Bootstrap V5 (news)',
                'value' => 'EXT:news/Configuration/TypoScript/Styles/Twb5',
              ),
              11 => 
              array (
                'label' => 'Typoscript constants & setup in folder packages (setup_package)',
                'value' => 'EXT:setup_package/Configuration/TypoScript',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOnDescription',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOnDescription',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 15,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_modeDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, constants, config,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,
                clear, root, include_static_file, basedOn, includeStaticAfterBasedOn, static_file_mode,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,--palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType,tx_container_parent',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'previewRenderer' => 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'felogin_login' => 'mimetypes-x-content-login',
          'mask_bticonteaser' => 'mask-ce-bticonteaser',
          'mask_btslider' => 'mask-ce-btslider',
          'mask_flipcard' => 'mask-ce-flipcard',
          'mask_openstreetmap' => 'mask-ce-openstreetmap',
          'mask_btaccordion' => 'mask-ce-btaccordion',
          'mask_bttabs' => 'mask-ce-bttabs',
          'mask_socialmedia' => 'mask-ce-socialmedia',
          'mask_btcard' => 'mask-ce-btcard',
          'news_pi1' => 'ext-news-plugin-news-list',
          'news_newsliststicky' => 'ext-news-plugin-news-list-sticky',
          'news_newsdetail' => 'ext-news-plugin-news-detail',
          'news_newsdatemenu' => 'ext-news-plugin-news-date-menu',
          'news_newssearchform' => 'ext-news-plugin-news-search-form',
          'news_newssearchresult' => 'ext-news-plugin-news-search-result',
          'news_newsselectedlist' => 'ext-news-plugin-news-selected-list',
          'news_categorylist' => 'ext-news-plugin-category-list',
          'news_taglist' => 'ext-news-plugin-tag-list',
          'section' => 'section',
          'cols_2' => 'cols_2',
          'cols_3' => 'cols_3',
          'cols_4' => 'cols_4',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform,tx_mask_latitudeinput,tx_mask_longitudeinput',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                'value' => '--div--',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                'value' => 'header',
                'icon' => 'content-header',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                'value' => 'text',
                'icon' => 'content-text',
                'group' => 'default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                'value' => 'textpic',
                'icon' => 'content-textpic',
                'group' => 'default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                'value' => 'image',
                'icon' => 'content-image',
                'group' => 'default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                'value' => 'textmedia',
                'icon' => 'content-textmedia',
                'group' => 'default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                'value' => '--div--',
                'group' => 'lists',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                'value' => 'bullets',
                'icon' => 'content-bullets',
                'group' => 'lists',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                'value' => 'table',
                'icon' => 'content-table',
                'group' => 'lists',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                'value' => 'uploads',
                'icon' => 'content-special-uploads',
                'group' => 'lists',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                'value' => '--div--',
                'group' => 'menu',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                'value' => 'menu_abstract',
                'icon' => 'content-menu-abstract',
                'group' => 'menu',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                'value' => 'menu_categorized_content',
                'icon' => 'content-menu-categorized',
                'group' => 'menu',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                'value' => 'menu_categorized_pages',
                'icon' => 'content-menu-categorized',
                'group' => 'menu',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                'value' => 'menu_pages',
                'icon' => 'content-menu-pages',
                'group' => 'menu',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                'value' => 'menu_subpages',
                'icon' => 'content-menu-pages',
                'group' => 'menu',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                'value' => 'menu_recently_updated',
                'icon' => 'content-menu-recently-updated',
                'group' => 'menu',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                'value' => 'menu_related_pages',
                'icon' => 'content-menu-related',
                'group' => 'menu',
              ),
              18 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                'value' => 'menu_section',
                'icon' => 'content-menu-section',
                'group' => 'menu',
              ),
              19 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                'value' => 'menu_section_pages',
                'icon' => 'content-menu-section',
                'group' => 'menu',
              ),
              20 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                'value' => 'menu_sitemap',
                'icon' => 'content-menu-sitemap',
                'group' => 'menu',
              ),
              21 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                'value' => 'menu_sitemap_pages',
                'icon' => 'content-menu-sitemap-pages',
                'group' => 'menu',
              ),
              22 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                'value' => '--div--',
                'group' => 'special',
              ),
              23 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                'value' => 'shortcut',
                'icon' => 'content-special-shortcut',
                'group' => 'special',
              ),
              24 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                'value' => 'list',
                'icon' => 'content-plugin',
                'group' => 'special',
              ),
              25 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                'value' => 'div',
                'icon' => 'content-special-div',
                'group' => 'special',
              ),
              26 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                'value' => 'html',
                'icon' => 'content-special-html',
                'group' => 'special',
              ),
              27 => 
              array (
                'label' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_title',
                'value' => 'form_formframework',
                'icon' => 'content-form',
                'group' => 'forms',
              ),
              28 => 
              array (
                'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:tt_content.CType.felogin_login.title',
                'value' => 'felogin_login',
                'icon' => 'mimetypes-x-content-login',
                'group' => 'forms',
              ),
              29 => 
              array (
                'label' => 'Bt-IconTeaser',
                'value' => 'mask_bticonteaser',
                'icon' => 'mask-ce-bticonteaser',
                'group' => 'mask',
              ),
              30 => 
              array (
                'label' => 'Bt-Slider',
                'value' => 'mask_btslider',
                'icon' => 'mask-ce-btslider',
                'group' => 'mask',
              ),
              31 => 
              array (
                'label' => 'FlipCard',
                'value' => 'mask_flipcard',
                'icon' => 'mask-ce-flipcard',
                'group' => 'mask',
              ),
              32 => 
              array (
                'label' => 'OpenStreetMap',
                'value' => 'mask_openstreetmap',
                'icon' => 'mask-ce-openstreetmap',
                'group' => 'mask',
              ),
              33 => 
              array (
                'label' => 'Bt-Accordion',
                'value' => 'mask_btaccordion',
                'icon' => 'mask-ce-btaccordion',
                'group' => 'mask',
              ),
              34 => 
              array (
                'label' => 'Bt-Tabs',
                'value' => 'mask_bttabs',
                'icon' => 'mask-ce-bttabs',
                'group' => 'mask',
              ),
              35 => 
              array (
                'label' => 'Socialmedia',
                'value' => 'mask_socialmedia',
                'icon' => 'mask-ce-socialmedia',
                'group' => 'mask',
              ),
              36 => 
              array (
                'label' => 'Bt-Card',
                'value' => 'mask_btcard',
                'icon' => 'mask-ce-btcard',
                'group' => 'mask',
              ),
              37 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_list.title',
                'value' => 'news_pi1',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              38 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_list_sticky.title',
                'value' => 'news_newsliststicky',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              39 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_detail.title',
                'value' => 'news_newsdetail',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              40 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_date_menu.title',
                'value' => 'news_newsdatemenu',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              41 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_search_form.title',
                'value' => 'news_newssearchform',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              42 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_search_result.title',
                'value' => 'news_newssearchresult',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              43 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_selected_list.title',
                'value' => 'news_newsselectedlist',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              44 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.category_list.title',
                'value' => 'news_categorylist',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              45 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.tag_list.title',
                'value' => 'news_taglist',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
              ),
              46 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-section-title',
                'value' => 'section',
                'icon' => 'section',
                'group' => 'container',
              ),
              47 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2-col-title',
                'value' => 'cols_2',
                'icon' => 'cols_2',
                'group' => 'container',
              ),
              48 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-3-col-title',
                'value' => 'cols_3',
                'icon' => 'cols_3',
                'group' => 'container',
              ),
              49 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-4-col-title',
                'value' => 'cols_4',
                'icon' => 'cols_4',
                'group' => 'container',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
              'mask' => 'LLL:EXT:mask/Resources/Private/Language/locallang_mask.xlf:new_content_element_tab',
              'lists' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
              'menu' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
              'forms' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
              'container' => 'LLL:EXT:container/Resources/Private/Language/locallang.xlf:container',
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'itemsProcFunc' => 'MASK\\Mask\\ItemsProcFuncs\\CTypeList->itemsProcFunc',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND {#tt_content}.{#pid}=###CURRENT_PID### AND {#tt_content}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                'value' => 'ruler-before',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                'value' => 'ruler-after',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                'value' => 'indent',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                'value' => 'indent-left',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                'value' => 'indent-right',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                'value' => 'none',
              ),
            ),
            'default' => 'default',
          ),
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'MASK\\Mask\\ItemsProcFuncs\\ColPosList->itemsProcFunc',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                'value' => '0',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:section',
                'value' => 501,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-1',
                'value' => 201,
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2',
                'value' => 202,
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-1',
                'value' => 301,
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2',
                'value' => 302,
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-3',
                'value' => 303,
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-1',
                'value' => 401,
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2',
                'value' => 402,
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-3',
                'value' => 403,
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-4',
                'value' => 404,
              ),
            ),
            'default' => 0,
            'm_itemsProcFunc' => 'B13\\Container\\Tca\\ItemProcFunc->colPos',
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                'value' => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                'value' => 'center',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                'value' => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
            ),
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 80,
            'rows' => 15,
            'softref' => 'typolink_tag,email[subst],url',
            'search' => 
            array (
              'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                'value' => 0,
                'icon' => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                'value' => 1,
                'icon' => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                'value' => 2,
                'icon' => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                'value' => 8,
                'icon' => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                'value' => 9,
                'icon' => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                'value' => 10,
                'icon' => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                'value' => 17,
                'icon' => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                'value' => 18,
                'icon' => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                'value' => 25,
                'icon' => 'content-beside-text-img-right',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                'value' => 26,
                'icon' => 'content-beside-text-img-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
              6 => 
              array (
                'label' => '7',
                'value' => 7,
              ),
              7 => 
              array (
                'label' => '8',
                'value' => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => '4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => '5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => '6',
                'value' => '6',
              ),
              7 => 
              array (
                'label' => '7',
                'value' => '7',
              ),
              8 => 
              array (
                'label' => '8',
                'value' => '8',
              ),
              9 => 
              array (
                'label' => '9',
                'value' => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                'value' => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
                'group' => 'none',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
                'value' => 'ke_search_pi1',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/Extension.svg',
                'group' => 'ke_search',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi2',
                'value' => 'ke_search_pi2',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/Extension.svg',
                'group' => 'ke_search',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi3',
                'value' => 'ke_search_pi3',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/Extension.svg',
                'group' => 'ke_search',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
              'ke_search' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_mod.xlf:mlang_tabs_tab',
            ),
            'sortItems' => 
            array (
              'label' => 'asc',
            ),
            'default' => '',
            'authMode' => 'explicitAllow',
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'size' => 5,
            'fieldControl' => 
            array (
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                'value' => 'extension',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                'value' => 'name',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                'value' => 'type',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                'value' => 'size',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                'value' => 'creation_date',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                'value' => 'modification_date',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.title',
                'value' => 'title',
              ),
            ),
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                'value' => 'asc',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                'value' => 'desc',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content,tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <label>The Title:</label>
                                <config>
                                    <type>input</type>
                                    <size>48</size>
                                </config>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              '*,felogin_login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              'ke_search_pi1,list' => 'FILE:EXT:ke_search/Configuration/FlexForms/flexform_searchbox.xml',
              'ke_search_pi2,list' => 'FILE:EXT:ke_search/Configuration/FlexForms/flexform_resultlist.xml',
              'ke_search_pi3,list' => 'FILE:EXT:ke_search/Configuration/FlexForms/flexform_searchbox.xml',
              '*,news_pi1' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_list.xml',
              '*,news_newsliststicky' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_list.xml',
              '*,news_newsdetail' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_detail.xml',
              '*,news_newsdatemenu' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_date_menu.xml',
              '*,news_newssearchform' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_search_form.xml',
              '*,news_newssearchresult' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_list.xml',
              '*,news_newsselectedlist' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_selected_list.xml',
              '*,news_categorylist' => 'FILE:EXT:news/Configuration/FlexForms/flexform_category_list.xml',
              '*,news_taglist' => 'FILE:EXT:news/Configuration/FlexForms/flexform_tag_list.xml',
              '*,section' => 'FILE:EXT:setup_package/Configuration/FlexForms/Section.xml',
              '*,cols_2' => 'FILE:EXT:setup_package/Configuration/FlexForms/2ColSet.xml',
              '*,cols_3' => 'FILE:EXT:setup_package/Configuration/FlexForms/3ColSet.xml',
              '*,cols_4' => 'FILE:EXT:setup_package/Configuration/FlexForms/4ColSet.xml',
            ),
            'search' => 
            array (
              'andWhere' => '{#CType}=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableCategoryFields',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                'value' => 'striped',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                'value' => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                'value' => 124,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                'value' => 59,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                'value' => 44,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                'value' => 58,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                'value' => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                'value' => 39,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                'value' => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_container_parent' => 
        array (
          'label' => 'LLL:EXT:container/Resources/Private/Language/locallang.xlf:container',
          'config' => 
          array (
            'default' => 0,
            'type' => 'select',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => ' AND 1=2',
            'itemsProcFunc' => 'B13\\Container\\Tca\\ItemProcFunc->txContainerParent',
            'renderType' => 'selectSingle',
          ),
        ),
        'tx_mask_accordionset' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'top',
              'newRecordLinkTitle' => 'Neues Accordionset',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'useSortable' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_accordionset',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'tx_mask_cards' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'delete' => 1,
                'dragdrop' => 1,
                'hide' => 1,
                'info' => 1,
                'localize' => 1,
                'new' => 1,
                'sort' => 1,
              ),
              'expandSingle' => 0,
              'levelLinksPosition' => 'bottom',
              'newRecordLinkTitle' => 'Cardelement anlegen',
              'showAllLocalizationLink' => 1,
              'showNewRecordLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showSynchronizationLink' => 1,
              'useSortable' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_cards',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'tx_mask_cardspace_desktop' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '20px',
                'value' => 'g-xl-20',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '25px',
                'value' => 'g-xl-25',
                'icon' => '',
                'group' => '',
              ),
              4 => 
              array (
                'label' => '30px',
                'value' => 'g-xl-30',
                'icon' => '',
                'group' => '',
              ),
              5 => 
              array (
                'label' => '40px',
                'value' => 'g-xl-40',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_cardspace_mobile' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '10px',
                'value' => 'g-10',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '15px',
                'value' => 'g-15',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '20px',
                'value' => 'g-20',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_cardspace_tablet' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '15px',
                'value' => 'g-md-15',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '20px',
                'value' => 'g-md-20',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '25px',
                'value' => 'g-md-25',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_responsive_lg' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '3',
                'value' => 'row-cols-lg-3',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '4',
                'value' => 'row-cols-lg-4',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_responsive_md' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 'row-cols-md-2',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 'row-cols-md-3',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 'row-cols-md-4',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_responsive_sm' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => 'row-cols-sm-1',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => 'row-cols-sm-2',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => 'row-cols-sm-3',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_responsive_xl' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '3',
                'value' => 'row-cols-xl-3',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '4',
                'value' => 'row-cols-xl-4',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '5',
                'value' => 'row-cols-xl-5',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_responsive_xs' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => 'row-cols-1',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => 'row-cols-2',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => 'row-cols-3',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_responsive_xxl' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '4',
                'value' => 'row-cols-xxl-4',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '6',
                'value' => 'row-cols-xxl-6',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '10',
                'value' => 'row-cols-xxl-10',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteaseralignment' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'zentrieren',
              ),
            ),
            'renderType' => 'checkboxToggle',
            'type' => 'check',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteaserctabuttonsameheight' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'CTA auf selber Höhe',
              ),
            ),
            'renderType' => 'checkboxToggle',
            'type' => 'check',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteaserdesktop' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '3',
                'value' => 'row-cols-lg-3',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '4',
                'value' => 'row-cols-lg-4',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '5',
                'value' => 'row-cols-lg-5',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteasermobile' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => 'row-cols-1',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => 'row-cols-2',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteasermodus' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 0,
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Oberhalb',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'Unterhalb',
                'value' => '2',
              ),
            ),
            'type' => 'radio',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteasersize' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Klein',
                'value' => 'feature-icon-sm',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => 'Mittel',
                'value' => 'feature-icon-md',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => 'Groß',
                'value' => 'feature-icon-lg',
                'icon' => '',
                'group' => '',
              ),
            ),
            'maxitems' => '1',
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_iconteasertablet' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 'row-cols-md-2',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 'row-cols-md-3',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_teaseritems' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'both',
              'newRecordLinkTitle' => 'Teaseritem anlegen',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'useSortable' => 1,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_teaseritems',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'tx_mask_carouselcontrol' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'type' => 'check',
          ),
          'exclude' => 1,
        ),
        'tx_mask_carouselindicator' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'type' => 'check',
          ),
          'exclude' => 1,
        ),
        'tx_mask_indicatorthumbnail' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'type' => 'check',
          ),
          'exclude' => 1,
        ),
        'tx_mask_modus' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'slide',
                'value' => '1',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => 'fade',
                'value' => '2',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectMultipleSideBySide',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_slideimages' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'top',
              'newRecordLinkTitle' => 'Datensatz anlegen',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'useSortable' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_slideimages',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'tx_mask_tabdisplay' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Tabs',
                'value' => '1',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => 'Pills',
                'value' => '2',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_tabs' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 0,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'top',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_tabs',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flip_responsive_lg' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '3',
                'value' => 'row-cols-lg-3',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '4',
                'value' => 'row-cols-lg-4',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flip_responsive_md' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 'row-cols-md-2',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 'row-cols-md-3',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 'row-cols-md-4',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flip_responsive_sm' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => 'row-cols-sm-1',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => 'row-cols-sm-2',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => 'row-cols-sm-3',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flip_responsive_xl' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '3',
                'value' => 'row-cols-xl-3',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '4',
                'value' => 'row-cols-xl-4',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '5',
                'value' => 'row-cols-xl-5',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flip_responsive_xs' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => 'row-cols-1',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => 'row-cols-2',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => 'row-cols-3',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flip_responsive_xxl' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '4',
                'value' => 'row-cols-xxl-4',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '6',
                'value' => 'row-cols-xxl-6',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '10',
                'value' => 'row-cols-xxl-10',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flipcard' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'delete' => 1,
                'dragdrop' => 1,
                'hide' => 1,
                'info' => 1,
                'localize' => 1,
                'new' => 1,
                'sort' => 1,
              ),
              'levelLinksPosition' => 'top',
              'showAllLocalizationLink' => 1,
              'showNewRecordLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showSynchronizationLink' => 1,
              'useSortable' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_flipcard',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flipcardspace_desktop' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '20px',
                'value' => 'g-xl-20',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '25px',
                'value' => 'g-xl-25',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '30px',
                'value' => 'g-xl-30',
                'icon' => '',
                'group' => '',
              ),
              4 => 
              array (
                'label' => '40px',
                'value' => 'g-xl-40',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flipcardspace_mobile' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '10px',
                'value' => 'g-10',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '15px',
                'value' => 'g-15',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '20px',
                'value' => 'g-20',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_flipcardspace_tablet' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '15px',
                'value' => 'g-md-15',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '20px',
                'value' => 'g-md-20',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '25px',
                'value' => 'g-md-25',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_latitudeinput' => 
        array (
          'config' => 
          array (
            'eval' => 'nospace',
            'max' => '9',
            'placeholder' => 'z.B. 47.849900',
            'size' => '10',
            'type' => 'input',
            'required' => true,
          ),
          'exclude' => 1,
        ),
        'tx_mask_longitudeinput' => 
        array (
          'config' => 
          array (
            'max' => '9',
            'placeholder' => 'z.B. 12.058030',
            'size' => '10',
            'type' => 'input',
            'required' => true,
          ),
          'exclude' => 1,
        ),
        'tx_mask_zoom' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => '14',
                'value' => '14',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '15',
                'value' => '15',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '16',
                'value' => '16',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '17',
                'value' => '17',
                'icon' => '',
                'group' => '',
              ),
            ),
            'maxitems' => '1',
            'minitems' => '1',
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => 1,
        ),
        'tx_mask_socialmedia' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'bottom',
              'newRecordLinkTitle' => 'Socialmediadatensatz anlegen',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'useSortable' => 1,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_socialmedia',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
          ),
          'exclude' => 1,
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_news_related_news' => 
        array (
          'label' => 'tx_news_related_news',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType',
        ),
        'bullets' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bullets_type,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'header' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'text' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextpicPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextmediaPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    assets,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\ImagePreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'html' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
                    list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,
                    recursive,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'subtype_value_field' => 'list_type',
          'subtypes_addlist' => 
          array (
            'ke_search_pi1' => 'pi_flexform',
            'ke_search_pi2' => 'pi_flexform',
            'ke_search_pi3' => 'pi_flexform',
          ),
          'subtypes_excludelist' => 
          array (
            'ke_search_pi1' => 'select_key,recursive',
            'ke_search_pi2' => 'select_key,recursive,pages',
            'ke_search_pi3' => 'select_key,recursive',
          ),
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'shortcut' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,
                    records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'table' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,
                    --palette--;;tableconfiguration,
                    table_caption,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;tablelayout,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    --palette--;;uploads,
                    --palette--;;uploadslayout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'previewRenderer' => 'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer',
        ),
        'felogin_login' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_bticonteaser' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_iconteasermodus' => 
            array (
              'label' => 'Modus auswählen',
            ),
            'tx_mask_iconteaseralignment' => 
            array (
              'label' => 'Teaserinhalt zentrieren',
              'description' => 'Ist diese Einstellung aktiviert wird der Teaser zentriert angezeigt. Default ist der Teaser linksbündig angeordnet.',
            ),
            'tx_mask_iconteasersize' => 
            array (
              'label' => 'Größe des Icons',
            ),
            'tx_mask_iconteaserctabuttonsameheight' => 
            array (
              'label' => 'CTA Buttons auf gleiche Höhe setzen.',
            ),
            'tx_mask_iconteaserdesktop' => 
            array (
              'label' => 'Anzahl Desktopansicht',
            ),
            'tx_mask_iconteasertablet' => 
            array (
              'label' => 'Anzahl Tabletansicht',
            ),
            'tx_mask_iconteasermobile' => 
            array (
              'label' => 'Anzahl Mobileansicht',
            ),
            'tx_mask_teaseritems' => 
            array (
              'label' => 'Teaseritems ',
              'description' => 'Einzelne Teaser mit icon Text und Link anlegen.',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;Iconteaser General,tx_mask_iconteasermodus,tx_mask_iconteaseralignment,tx_mask_iconteasersize,tx_mask_iconteaserctabuttonsameheight,--div--;Responsives verhalten,tx_mask_iconteaserdesktop,tx_mask_iconteasertablet,tx_mask_iconteasermobile,--div--;Teaser anlegen,tx_mask_teaseritems,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_btslider' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_modus' => 
            array (
              'label' => 'Modus wählen',
              'description' => 'fade oder slide',
            ),
            'tx_mask_carouselcontrol' => 
            array (
              'label' => 'Prev Next einblenden',
            ),
            'tx_mask_carouselindicator' => 
            array (
              'label' => 'Buttons für die vorhandenen Bilder anzeigen',
            ),
            'tx_mask_indicatorthumbnail' => 
            array (
              'label' => 'Buttons als Thumbnail aus den Bildern generieren',
            ),
            'tx_mask_slideimages' => 
            array (
              'label' => 'Bilder',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;General,tx_mask_modus,tx_mask_carouselcontrol,tx_mask_carouselindicator,tx_mask_indicatorthumbnail,--div--;Slideelemente,tx_mask_slideimages,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_flipcard' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_flipcard' => 
            array (
              'label' => 'FlipCards anlegen',
            ),
            'tx_mask_flip_responsive_xs' => 
            array (
              'label' => 'Anzahl Cards Mobile kleiner 576px',
            ),
            'tx_mask_flip_responsive_sm' => 
            array (
              'label' => 'Anzahl Cards Mobile sm > 576px ',
            ),
            'tx_mask_flip_responsive_md' => 
            array (
              'label' => 'Anzahl Cards Tablet md < 768px',
            ),
            'tx_mask_flip_responsive_lg' => 
            array (
              'label' => 'Anzahl Cards Desktop lg > 992px',
            ),
            'tx_mask_flip_responsive_xl' => 
            array (
              'label' => 'Anzahl Cards Desktop xl > 1200px',
            ),
            'tx_mask_flip_responsive_xxl' => 
            array (
              'label' => 'Anzahl Cards Desktop xxl > 1400px',
            ),
            'tx_mask_flipcardspace_mobile' => 
            array (
              'label' => 'Abstände Mobile',
            ),
            'tx_mask_flipcardspace_tablet' => 
            array (
              'label' => 'Abstände Tablet',
            ),
            'tx_mask_flipcardspace_desktop' => 
            array (
              'label' => 'Abstände Desktop',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;Flipcardelemente,tx_mask_flipcard,--div--;Responsives Verhalten,--palette--;;tx_mask_4ddc7cea95ec8,--palette--;;tx_mask_08e3689a5bb24,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_openstreetmap' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_latitudeinput' => 
            array (
              'label' => 'Latitude',
              'description' => 'Es könnte sich um eine Zahl mit sechs Stellen hinter dem Punkt handeln',
            ),
            'tx_mask_longitudeinput' => 
            array (
              'label' => 'Longitude',
              'description' => 'Es könnte sich um eine Zahl mit sechs Stellen hinter dem Punkt handeln',
            ),
            'tx_mask_zoom' => 
            array (
              'label' => 'Zoom',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;General,tx_mask_latitudeinput,tx_mask_longitudeinput,tx_mask_zoom,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_btaccordion' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_accordionset' => 
            array (
              'label' => 'Accordiondatensatze',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;Accordionelemente,tx_mask_accordionset,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_bttabs' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_tabdisplay' => 
            array (
              'label' => 'Modus',
            ),
            'tx_mask_tabs' => 
            array (
              'label' => 'Tabs anlegen',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;Modus auswählen,tx_mask_tabdisplay,--div--;Tabs anlegen,tx_mask_tabs,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_socialmedia' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_socialmedia' => 
            array (
              'label' => 'Datensatz erstellen',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;Socialmedialinks,tx_mask_socialmedia,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'mask_btcard' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'Pluginheadline im TYPO3 Backend',
            ),
            'tx_mask_cards' => 
            array (
              'label' => 'Cards Anlegen',
              'description' => 'Cardelemente anlegen',
            ),
            'tx_mask_responsive_xs' => 
            array (
              'label' => 'Anzahl Cards Mobile kleiner 576px',
            ),
            'tx_mask_responsive_sm' => 
            array (
              'label' => 'Anzahl Cards Mobile sm > 576px ',
            ),
            'tx_mask_responsive_md' => 
            array (
              'label' => 'Anzahl Cards Tablet md < 768px',
            ),
            'tx_mask_responsive_lg' => 
            array (
              'label' => 'Anzahl Cards Desktop lg > 992px',
            ),
            'tx_mask_responsive_xl' => 
            array (
              'label' => 'Anzahl Cards Desktop xl > 1200px',
            ),
            'tx_mask_responsive_xxl' => 
            array (
              'label' => 'Anzahl Cards Desktop xxl > 1400px',
            ),
            'tx_mask_cardspace_mobile' => 
            array (
              'label' => 'Abstände Mobile',
            ),
            'tx_mask_cardspace_tablet' => 
            array (
              'label' => 'Abstände Tablet',
            ),
            'tx_mask_cardspace_desktop' => 
            array (
              'label' => 'Abstände Desktop',
            ),
          ),
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;Cardelemente,tx_mask_cards,--div--;Responsives Verhalten,--palette--;;tx_mask_5ce0133bf327b,--palette--;;tx_mask_cbb62f76ad907,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'news_pi1' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsliststicky' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsdetail' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsdatemenu' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newssearchform' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newssearchresult' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsselectedlist' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_categorylist' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_taglist' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'section' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => 'sys_language_uid,CType,header,layout,sectionIndex,pi_flexform',
        ),
        'cols_2' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => 'sys_language_uid,CType,header,header_layout,header_position,layout,colPos,tx_container_parent,pi_flexform',
        ),
        'cols_3' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => 'sys_language_uid,CType,header,layout,colPos,tx_container_parent,pi_flexform',
        ),
        'cols_4' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => 'sys_language_uid,CType,header,layout,colPos,tx_container_parent,pi_flexform',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
          'showitem' => 'CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel, tx_container_parent',
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings',
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments',
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks',
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                filelink_sorting_direction,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility',
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout',
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks',
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            ',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout',
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
        'tx_mask_5ce0133bf327b' => 
        array (
          'label' => 'Anzahl der Cards',
          'description' => 'Anzahl der Cardselemente die innerhalb einer Reihe je Device angezeigt werden sollen.',
          'showitem' => 'tx_mask_responsive_xs,tx_mask_responsive_sm,tx_mask_responsive_md,--linebreak--,tx_mask_responsive_lg,tx_mask_responsive_xl,tx_mask_responsive_xxl',
        ),
        'tx_mask_cbb62f76ad907' => 
        array (
          'label' => 'Cardspacing',
          'description' => 'Horizontal und Vertikaler Zwischenraum zwischen den Cardelementen. ',
          'showitem' => 'tx_mask_cardspace_mobile,tx_mask_cardspace_tablet,tx_mask_cardspace_desktop,--linebreak--',
        ),
        'tx_mask_08e3689a5bb24' => 
        array (
          'label' => 'Flip-Cardspacing',
          'description' => '',
          'showitem' => 'tx_mask_flipcardspace_mobile,tx_mask_flipcardspace_tablet,tx_mask_flipcardspace_desktop,--linebreak--',
        ),
        'tx_mask_4ddc7cea95ec8' => 
        array (
          'label' => 'Anzahl der Flip-Cards',
          'description' => 'Anzahl der Cardselemente die innerhalb einer Reihe je Device angezeigt werden sollen.',
          'showitem' => 'tx_mask_flip_responsive_xs,tx_mask_flip_responsive_sm,tx_mask_flip_responsive_md,--linebreak--,tx_mask_flip_responsive_lg,tx_mask_flip_responsive_xl,tx_mask_flip_responsive_xxl',
        ),
      ),
      'containerConfiguration' => 
      array (
        'section' => 
        array (
          'cType' => 'section',
          'icon' => 'EXT:setup_package/Resources/Public/Icons/SVGs/Active/onecol.png',
          'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-section-title',
          'description' => 'LLL:EXT:setup_package/Resources/Private/Language/locallang.xlf:ctype.section.desc',
          'backendTemplate' => 'EXT:container/Resources/Private/Templates/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:section',
                'colPos' => 501,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials12/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'cols_2' => 
        array (
          'cType' => 'cols_2',
          'icon' => 'EXT:setup_package/Resources/Public/Icons/SVGs/Active/2-col.svg',
          'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2-col-title',
          'description' => 'LLL:EXT:setup_package/Resources/Private/Language/locallang.xlf:ctype.col-2.desc',
          'backendTemplate' => 'EXT:container/Resources/Private/Templates/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-1',
                'colPos' => 201,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2',
                'colPos' => 202,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials12/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'cols_3' => 
        array (
          'cType' => 'cols_3',
          'icon' => 'EXT:setup_package/Resources/Public/Icons/SVGs/Active/3-col.svg',
          'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-3-col-title',
          'description' => 'LLL:EXT:setup_package/Resources/Private/Language/locallang.xlf:ctype.col-3.desc',
          'backendTemplate' => 'EXT:container/Resources/Private/Templates/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-1',
                'colPos' => 301,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2',
                'colPos' => 302,
              ),
              2 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-3',
                'colPos' => 303,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials12/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'cols_4' => 
        array (
          'cType' => 'cols_4',
          'icon' => 'EXT:setup_package/Resources/Public/Icons/SVGs/Active/4-col.svg',
          'label' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-4-col-title',
          'description' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:ctype.col-4.desc',
          'backendTemplate' => 'EXT:container/Resources/Private/Templates/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-1',
                'colPos' => 401,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-2',
                'colPos' => 402,
              ),
              2 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-3',
                'colPos' => 403,
              ),
              3 => 
              array (
                'name' => 'LLL:EXT:setup_package/Resources/Private/Language/Backend/locallang.xlf:grid-4',
                'colPos' => 404,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials12/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
      ),
    ),
    'be_dashboards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:be_dashboard',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'content-dashboard',
        ),
        'searchFields' => 'identifier,title',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'cruser_id' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    identifier,title,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'sys_redirect' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect',
        'descriptionColumn' => 'description',
        'label' => 'source_host',
        'label_alt' => 'source_path',
        'label_alt_force' => true,
        'crdate' => 'createdon',
        'tstamp' => 'updatedon',
        'versioningWS' => false,
        'groupName' => 'system',
        'default_sortby' => 'source_host, source_path',
        'rootLevel' => -1,
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_redirect',
        ),
        'searchFields' => 'source_host,source_path,target,target_statuscode',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;source, --palette--;;targetdetails, protected, creation_type,
                --div--;LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;visibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, description',
        ),
      ),
      'palettes' => 
      array (
        'visibility' => 
        array (
          'showitem' => 'disabled, --linebreak--, starttime, endtime',
        ),
        'source' => 
        array (
          'showitem' => 'source_host, --linebreak--, source_path, respect_query_parameters, is_regexp',
        ),
        'targetdetails' => 
        array (
          'showitem' => 'target, target_statuscode, --linebreak--, force_https, keep_query_parameters',
        ),
      ),
      'columns' => 
      array (
        'disabled' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'source_host' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim,TYPO3\\CMS\\Redirects\\Evaluation\\SourceHost',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host_global_text',
                  1 => '*',
                ),
              ),
            ),
            'default' => '*',
          ),
        ),
        'source_path' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
            'eval' => 'trim',
            'placeholder' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path.placeholder',
            'max' => 2048,
          ),
        ),
        'force_https' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.force_https.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'keep_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.keep_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'respect_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.respect_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'record',
            ),
            'appearance' => 
            array (
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'rel',
              ),
            ),
          ),
        ),
        'target_statuscode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.301',
                'value' => 301,
                'group' => 'change',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.302',
                'value' => 302,
                'group' => 'change',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.303',
                'value' => 303,
                'group' => 'change',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.307',
                'value' => 307,
                'group' => 'keep',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.308',
                'value' => 308,
                'group' => 'keep',
              ),
            ),
            'itemGroups' => 
            array (
              'keep' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.keep',
              'change' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.change',
            ),
            'default' => 307,
          ),
        ),
        'hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 5,
            'default' => 0,
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'lasthiton' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.lasthiton',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'createdon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'disable_hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcountState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'is_regexp' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.is_regexp',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'protected' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'creation_type' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.1',
                'value' => 1,
              ),
            ),
            'default' => 1,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 40,
          ),
        ),
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:tx_impexp_presets',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'typeicon_classes' => 
        array (
          'default' => 'actions-cog',
        ),
        'hideTable' => true,
        'rootLevel' => -1,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'public' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:public',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'user_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:user_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'item_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:item_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'preset_data' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:preset_data',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, public, user_uid, item_uid, preset_data',
        ),
      ),
    ),
    'sys_reaction' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction',
        'label' => 'name',
        'descriptionColumn' => 'description',
        'crdate' => 'createdon',
        'tstamp' => 'updatedon',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'system',
        'default_sortby' => 'name',
        'type' => 'reaction_type',
        'typeicon_column' => 'reaction_type',
        'typeicon_classes' => 
        array (
          'default' => 'content-webhook',
          'create-record' => 'content-database',
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'name,secret',
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;access',
        ),
        'create-record' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;config,
        --palette--;;createRecord,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;access',
          'columnsOverrides' => 
          array (
            'impersonate_user' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'config' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:palette.config',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:palette.config.description',
          'showitem' => 'reaction_type, --linebreak--, name, description, --linebreak--, identifier, secret',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'disabled, starttime, endtime',
        ),
        'createRecord' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:palette.additional',
          'showitem' => 'table_name, --linebreak--, storage_pid, impersonate_user, --linebreak--, fields',
        ),
      ),
      'columns' => 
      array (
        'reaction_type' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.reaction_type',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.reaction_type.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'required' => true,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.reaction_type.select',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.reaction_type.create_record',
                'value' => 'create-record',
                'icon' => 'content-database',
              ),
            ),
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.name',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.name.description',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.description',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.description.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.identifier',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.identifier.description',
          'config' => 
          array (
            'type' => 'uuid',
          ),
        ),
        'secret' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.secret',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.secret.description',
          'config' => 
          array (
            'type' => 'password',
            'required' => true,
            'fieldControl' => 
            array (
              'passwordGenerator' => 
              array (
                'renderType' => 'passwordGenerator',
                'options' => 
                array (
                  'title' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.secret.passwordGenerator',
                  'allowEdit' => false,
                  'passwordRules' => 
                  array (
                    'length' => 40,
                    'random' => 'hex',
                  ),
                ),
              ),
            ),
          ),
        ),
        'impersonate_user' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.impersonate_user',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.impersonate_user.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'table_name' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.table_name',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.table_name.description',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'required' => true,
            'default' => '',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
                'value' => 'tt_content',
                'icon' => 'mimetypes-x-content-text',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
                'value' => 'pages',
                'icon' => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
                'value' => 'sys_category',
                'icon' => 'mimetypes-x-sys_category',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
                'value' => 'sys_file_collection',
                'icon' => 'apps-filetree-folder-media',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
                'value' => 'sys_note',
                'icon' => 'mimetypes-x-sys_note',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news',
                'value' => 'tx_news_domain_model_news',
                'icon' => 'ext-news-type-default',
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Reactions\\Form\\ReactionItemsProcFunc->validateAllowedTablesForExternalCreation',
          ),
        ),
        'disabled' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'storage_pid' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.storage_pid',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.storage_pid.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'fields' => 
        array (
          'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.fields',
          'description' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.fields.description',
          'displayCond' => 'FIELD:table_name:REQ:true',
          'config' => 
          array (
            'type' => 'json',
            'renderType' => 'fieldMap',
            'default' => '{}',
          ),
        ),
      ),
    ),
    'sys_webhook' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook',
        'label' => 'name',
        'descriptionColumn' => 'description',
        'crdate' => 'createdon',
        'tstamp' => 'updatedon',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'system',
        'default_sortby' => 'name',
        'type' => 'webhook_type',
        'typeicon_column' => 'webhook_type',
        'typeicon_classes' => 
        array (
          'default' => 'content-webhook',
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'name, secret',
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;config,
                --div--;LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:palette.http_settings,
                --palette--;;http_settings,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;access',
        ),
      ),
      'palettes' => 
      array (
        'config' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:palette.config',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:palette.config.description',
          'showitem' => 'webhook_type, identifier, --linebreak--, name, description, --linebreak--, url, secret',
        ),
        'http_settings' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:palette.http_settings',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:palette.http_settings.description',
          'showitem' => 'method, verify_ssl, --linebreak--, additional_headers',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'disabled, starttime, endtime',
        ),
      ),
      'columns' => 
      array (
        'webhook_type' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.webhook_type',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.webhook_type.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'required' => true,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.webhook_type.select',
                'vaule' => '',
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Webhooks\\Tca\\ItemsProcFunc\\WebhookTypesItemsProcFunc->getWebhookTypes',
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.name',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.name.description',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.description',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.description.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.identifier',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.identifier.description',
          'config' => 
          array (
            'type' => 'uuid',
          ),
        ),
        'secret' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.secret',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.secret.description',
          'config' => 
          array (
            'type' => 'password',
            'hashed' => false,
            'required' => true,
            'fieldControl' => 
            array (
              'passwordGenerator' => 
              array (
                'renderType' => 'passwordGenerator',
                'options' => 
                array (
                  'title' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.secret.passwordGenerator',
                  'allowEdit' => false,
                  'passwordRules' => 
                  array (
                    'length' => 40,
                    'random' => 'hex',
                  ),
                ),
              ),
            ),
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.url',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.url.description',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
            'allowedTypes' => 
            array (
              0 => 'url',
            ),
          ),
        ),
        'method' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.method',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'required' => true,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'POST',
                'value' => 'POST',
              ),
              1 => 
              array (
                'label' => 'GET',
                'value' => 'GET',
              ),
            ),
          ),
        ),
        'verify_ssl' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.verify_ssl',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.verify_ssl.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'additional_headers' => 
        array (
          'label' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.additional_headers',
          'description' => 'LLL:EXT:webhooks/Resources/Private/Language/locallang_db.xlf:sys_webhook.additional_headers.description',
          'config' => 
          array (
            'type' => 'json',
          ),
        ),
        'disabled' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => 1,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'number',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'number',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'documentation_link' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.documentation_link',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_welcome_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_welcome_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'remote' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.remote',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies, documentation_link, distribution_image, distribution_welcome_image',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'groupName' => 'content',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'searchFields' => 'subject,message',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '0',
                'icon' => 'sysnote-type-0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                'value' => '1',
                'icon' => 'sysnote-type-1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                'value' => '3',
                'icon' => 'sysnote-type-3',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                'value' => '4',
                'icon' => 'sysnote-type-4',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                'value' => '2',
                'icon' => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'position' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.top',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.bottom',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'cruser' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                category, subject,message,position,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                personal,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'tx_kesearch_filteroptions' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filteroptions',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ke_search/Resources/Public/Icons/table_icons/icon_tx_kesearch_filteroptions.gif',
        'searchFields' => 'title,tag,slug',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_kesearch_filteroptions',
            'foreign_table_where' => 'AND tx_kesearch_filteroptions.pid=###CURRENT_PID### AND tx_kesearch_filteroptions.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filteroptions.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'tag' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filteroptions.tag',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim,alphanum,Tpwd\\KeSearch\\UserFunction\\CustomFieldValidation\\FilterOptionTagValidator',
            'required' => true,
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filteroptions.slug',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => false,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'automated_tagging' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filteroptions.automated_tagging',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'automated_tagging_exclude' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filteroptions.automated_tagging_exclude',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, tag, slug, automated_tagging, automated_tagging_exclude',
        ),
      ),
    ),
    'tx_kesearch_filters' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'type' => 'rendertype',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ke_search/Resources/Public/Icons/table_icons/icon_tx_kesearch_filters.gif',
        'searchFields' => 'title',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_kesearch_filters',
            'foreign_table_where' => 'AND tx_kesearch_filters.pid=###CURRENT_PID### AND tx_kesearch_filters.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'rendertype' => 
        array (
          'exclude' => 0,
          'l10n_display' => 'defaultAsReadonly',
          'displayCond' => 'FIELD:l10n_parent:<:1',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.rendertype',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.rendertype.I.0',
                'value' => 'select',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.rendertype.I.1',
                'value' => 'list',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.rendertype.I.2',
                'value' => 'checkbox',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.rendertype.I.3',
                'value' => 'dateRange',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 'select',
          ),
        ),
        'markAllCheckboxes' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.markAllCheckboxes',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.options',
          'l10n_mode' => 'exclude',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_kesearch_filteroptions',
            'maxitems' => 500,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showAllSynchronizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => true,
                'dragdrop' => true,
                'sort' => true,
                'hide' => true,
                'delete' => true,
                'localize' => true,
              ),
            ),
          ),
        ),
        'target_pid' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.target_pid',
          'config' => 
          array (
            'default' => 0,
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'amount' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.amount',
          'config' => 
          array (
            'type' => 'number',
            'default' => '10',
            'size' => '30',
          ),
        ),
        'shownumberofresults' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.shownumberofresults',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'alphabeticalsorting' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_filters.alphabeticalsorting',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
      ),
      'types' => 
      array (
        'select' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, options, shownumberofresults, alphabeticalsorting',
        ),
        'list' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, options, shownumberofresults, alphabeticalsorting',
        ),
        'checkbox' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, markAllCheckboxes, options, shownumberofresults, alphabeticalsorting',
        ),
        'dateRange' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype',
        ),
      ),
    ),
    'tx_kesearch_index' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY crdate',
        'enablecolumns' => 
        array (
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:ke_search/Resources/Public/Icons/table_icons/icon_tx_kesearch_index.gif',
      ),
      'columns' => 
      array (
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'size' => '8',
            'default' => 0,
            'checkbox' => '0',
            'format' => 'date',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'size' => '8',
            'checkbox' => '0',
            'default' => 0,
            'format' => 'date',
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'size' => 6,
            'minitems' => 0,
            'maxitems' => 99999,
          ),
        ),
        'targetpid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.targetpid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'content' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.content',
          'config' => 
          array (
            'type' => 'text',
            'wrap' => 'OFF',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'hidden_content' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.hidden_content',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.hidden_content.description',
          'config' => 
          array (
            'type' => 'text',
            'wrap' => 'OFF',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'params' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.params',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.type',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'tags' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.tags',
          'config' => 
          array (
            'type' => 'text',
            'wrap' => 'OFF',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'abstract' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'language' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.language',
          'config' => 
          array (
            'default' => 0,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.uid',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'sortdate' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.sortdate',
          'config' => 
          array (
            'type' => 'datetime',
            'size' => '10',
            'checkbox' => '0',
            'default' => 0,
          ),
        ),
        'orig_uid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'orig_pid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'directory' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_index.directory',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'hash' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'starttime, endtime, fe_group, targetpid, content, hidden_content, params, type, tags, abstract, title, language',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_kesearch_indexerconfig' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ke_search/Resources/Public/Icons/table_icons/icon_tx_kesearch_indexerconfig.gif',
        'searchFields' => 'title',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type.I.0',
                'value' => 'page',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/types_backend/selicon_tx_kesearch_indexerconfig_type_0.gif',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type.I.12',
                'value' => 'news',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/types_backend/selicon_tx_kesearch_indexerconfig_type_12.gif',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type.I.5',
                'value' => 'tt_address',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/types_backend/selicon_tx_kesearch_indexerconfig_type_5.gif',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type.I.6',
                'value' => 'tt_content',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/types_backend/selicon_tx_kesearch_indexerconfig_type_6.gif',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type.I.7',
                'value' => 'file',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/types_backend/selicon_tx_kesearch_indexerconfig_type_7.gif',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.type.I.2',
                'value' => 'tt_news',
                'icon' => 'EXT:ke_search/Resources/Public/Icons/types_backend/selicon_tx_kesearch_indexerconfig_type_2.gif',
              ),
            ),
            'itemsProcFunc' => 'Tpwd\\KeSearch\\Lib\\Items->fillIndexerConfig',
            'size' => 1,
            'maxitems' => 1,
            'default' => 'page',
          ),
        ),
        'storagepid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.storagepid',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.storagepid.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'targetpid' => 
        array (
          'displayCond' => 'FIELD:type:!IN:page,tt_content,file,remote',
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.targetpid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'startingpoints_recursive' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.startingpoints_recursive',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.startingpoints_recursive.description',
          'displayCond' => 'FIELD:type:IN:page,tt_content,tt_address,news,tt_news',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'single_pages' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.single_pages',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.single_pages.description',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'sysfolder' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.sysfolder',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.sysfolder.description',
          'displayCond' => 'FIELD:type:IN:tt_address,news,tt_news',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'index_content_with_restrictions' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_content_with_restrictions',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_content_with_restrictions.description',
          'displayCond' => 'FIELD:type:=:page',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_content_with_restrictions.I.0',
                'value' => 'yes',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_content_with_restrictions.I.1',
                'value' => 'no',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 'no',
          ),
        ),
        'index_news_category_mode' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_category_mode',
          'displayCond' => 'FIELD:type:IN:news',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_category_mode.I.1',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_category_mode.I.2',
                'value' => '2',
              ),
            ),
            'default' => 1,
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'index_news_archived' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_archived',
          'displayCond' => 'FIELD:type:IN:news',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_archived.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_archived.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_archived.I.2',
                'value' => '2',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'index_extnews_category_selection' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_extnews_category_selection',
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:type:=:news',
              1 => 'FIELD:index_news_category_mode:=:2',
            ),
          ),
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'showHeader' => true,
                'expandAll' => true,
                'maxLevels' => 99,
              ),
            ),
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => 
            array (
              'fieldname' => 'categories',
              'tablenames' => 'tx_kesearch_indexerconfig',
            ),
            'MM_opposite_field' => 'items',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'index_use_page_tags' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_use_page_tags',
          'displayCond' => 'FIELD:type:IN:tt_address,news,tt_news',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'directories' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.directories',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.directories.description',
          'displayCond' => 'FIELD:type:IN:file',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'eval' => 'trim',
          ),
        ),
        'fileext' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.fileext',
          'displayCond' => 'FIELD:type:IN:file,page,tt_content,news,tt_news',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'default' => 'pdf,ppt,doc,xls,docx,xlsx,pptx',
          ),
        ),
        'file_reference_fields' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.file_reference_fields',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.file_reference_fields.description',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 4,
            'eval' => 'trim',
            'default' => 'media',
          ),
        ),
        'index_use_page_tags_for_files' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_use_page_tags_for_files',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'index_page_doctypes' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_page_doctypes',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_page_doctypes.description',
          'displayCond' => 'FIELD:type:=:page',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'default' => '1',
          ),
        ),
        'content_fields' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.content_fields',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.content_fields.description',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 4,
            'eval' => 'trim',
            'default' => 'bodytext',
          ),
        ),
        'filteroption' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.filteroption',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'itemsProcFunc' => 'Tpwd\\KeSearch\\Backend\\Filterlist->getListOfAvailableFiltersForTCA',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'fal_storage' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.fal_storage',
          'displayCond' => 'FIELD:type:=:file',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.fal_storage.dont_use_fal',
                'value' => 0,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => 1,
          ),
        ),
        'contenttypes' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.contenttypes',
          'description' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.contenttypes.description',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 4,
            'eval' => 'trim',
            'default' => 'text,textmedia,textpic,bullets,table,html,header,uploads,shortcut',
          ),
        ),
        'index_news_files_mode' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_files_mode',
          'displayCond' => 'FIELD:type:IN:news,tt_news',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_files_mode.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.index_news_files_mode.I.1',
                'value' => '1',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'hidden,title,type,storagepid,targetpid,
            startingpoints_recursive,single_pages,sysfolder,
                --div--;LLL:EXT:ke_search/Resources/Private/Language/locallang_db.xlf:tx_kesearch_indexerconfig.tabs.advanced,
            index_content_with_restrictions,
            index_news_archived,index_news_category_mode,index_extnews_category_selection,
            index_use_page_tags,fal_storage,directories,index_page_doctypes,contenttypes,content_fields,fileext,file_reference_fields,
            index_news_files_mode,
            filteroption,index_use_page_tags_for_files',
        ),
      ),
    ),
    'tx_news_domain_model_link' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'label_alt' => 'uri',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'ORDER BY sorting',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-link',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_table_where' => 'AND tx_news_domain_model_link.pid=###CURRENT_PID### AND tx_news_domain_model_link.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'uri' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri',
          'config' => 
          array (
            'type' => 'link',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri.placeholder',
            'required' => true,
            'softref' => 'typolink',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'eval' => '1',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'uri, --palette--;;paletteCore,title, --palette--;;paletteDescription',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,sys_language_uid,l10n_parent, l10n_diffsource,',
        ),
        'paletteDescription' => 
        array (
          'showitem' => 'description',
        ),
      ),
    ),
    'tx_news_domain_model_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'editlock' => 'editlock',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-type-default',
          1 => 'ext-news-type-internal',
          2 => 'ext-news-type-external',
        ),
        'useColumnsForDefaultValues' => 'type',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'default_sortby' => 'ORDER BY datetime DESC',
        'sortby' => '',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:news/Resources/Public/Icons/news_domain_model_news.svg',
        'searchFields' => 'uid,title',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'cruser_id' => 
        array (
          'label' => 'cruser_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'max' => 255,
            'eval' => '1',
            'required' => true,
          ),
        ),
        'alternative_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.alternative_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'teaser' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.teaser',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
            'enableRichtext' => false,
          ),
        ),
        'bodytext' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'datetime' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.datetime',
          'config' => 
          array (
            'type' => 'datetime',
            'required' => true,
          ),
        ),
        'archive' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'copy',
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'showHeader' => true,
                'expandAll' => true,
                'maxLevels' => 99,
              ),
            ),
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => 
            array (
              'fieldname' => 'categories',
              'tablenames' => 'tx_news_domain_model_news',
            ),
            'MM_opposite_field' => 'items',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tx_news_domain_model_news',
            'foreign_table' => 'tx_news_domain_model_news',
            'MM_opposite_field' => 'related_from',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'suggestOptions' => true,
                'addWhere' => ' AND tx_news_domain_model_news.uid != ###THIS_UID###',
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related_from' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_from',
          'config' => 
          array (
            'type' => 'group',
            'foreign_table' => 'tx_news_domain_model_news',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'readOnly' => 1,
          ),
        ),
        'related_links' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_links',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tx_news_domain_model_link',
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'type' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.0',
                'value' => 0,
                'icon' => 'ext-news-type-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
                'value' => 1,
                'icon' => 'ext-news-type-internal',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.2',
                'value' => 2,
                'icon' => 'ext-news-type-external',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.keywords.placeholder',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'internalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
          ),
        ),
        'externalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => '1',
            'softref' => 'typolink',
            'required' => true,
          ),
        ),
        'istopnews' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.istopnews',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_elements' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_news_related_news',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'MM' => 'tx_news_domain_model_news_tag_mm',
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => ' AND (tx_news_domain_model_tag.sys_language_uid IN (-1,0) OR tx_news_domain_model_tag.l10n_parent = 0) ORDER BY tx_news_domain_model_tag.title',
            'size' => 10,
            'maxitems' => 99,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'minimumCharacters' => 2,
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'path_segment' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.path_segment',
          'displayCond' => 'VERSION:IS:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'unique',
            'default' => '',
            'appearance' => 
            array (
              'prefix' => 'GeorgRinger\\News\\Backend\\FormEngine\\SlugPrefix->getPrefix',
            ),
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'fal_media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media.add',
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'fal_related_files' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files.add',
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'inline' => 
            array (
              'inlineOnlineMediaAddButtonStyle' => 'display:none',
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_related_files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.always',
                'value' => 'always',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.hourly',
                'value' => 'hourly',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.daily',
                'value' => 'daily',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.weekly',
                'value' => 'weekly',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.monthly',
                'value' => 'monthly',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.yearly',
                'value' => 'yearly',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.never',
                'value' => 'never',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq',
        ),
        'sitemap_priority' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => '0.0',
                'value' => '0.0',
              ),
              1 => 
              array (
                'label' => '0.1',
                'value' => '0.1',
              ),
              2 => 
              array (
                'label' => '0.2',
                'value' => '0.2',
              ),
              3 => 
              array (
                'label' => '0.3',
                'value' => '0.3',
              ),
              4 => 
              array (
                'label' => '0.4',
                'value' => '0.4',
              ),
              5 => 
              array (
                'label' => '0.5',
                'value' => '0.5',
              ),
              6 => 
              array (
                'label' => '0.6',
                'value' => '0.6',
              ),
              7 => 
              array (
                'label' => '0.7',
                'value' => '0.7',
              ),
              8 => 
              array (
                'label' => '0.8',
                'value' => '0.8',
              ),
              9 => 
              array (
                'label' => '0.9',
                'value' => '0.9',
              ),
              10 => 
              array (
                'label' => '1.0',
                'value' => '1.0',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
            'default' => '0.5',
          ),
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_priority',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,
                    --palette--;;paletteDate,
                    bodytext,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements,
                    content_elements,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    fal_media,fal_related_files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,
                    related,related_from,
                    related_links,tags,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
                    --palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles, --palette--;;sitemap,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        1 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,
                    internalurl,
                    --palette--;;paletteDate,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    fal_media,fal_related_files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,
                    related,related_from,
                    related_links,tags,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
                    --palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles, --palette--;;sitemap,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        2 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,
                    externalurl,
                    --palette--;;paletteDate,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    fal_media,fal_related_files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,
                    related,related_from,
                    related_links,tags,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
                    --palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles, --palette--;;sitemap,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
      ),
      'palettes' => 
      array (
        'paletteAuthor' => 
        array (
          'showitem' => 'author,author_email,',
        ),
        'paletteDate' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.dates',
          'showitem' => 'datetime,archive,',
        ),
        'paletteCore' => 
        array (
          'showitem' => 'type,istopnews,',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords,description,',
        ),
        'alternativeTitles' => 
        array (
          'showitem' => 'alternative_title',
        ),
        'paletteHidden' => 
        array (
          'showitem' => '
                hidden
            ',
        ),
        'paletteAccess' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'paletteLanguage' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ),
        'paletteSlug' => 
        array (
          'showitem' => '
                path_segment
            ',
        ),
        'sitemap' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.sitemap',
          'showitem' => 'sitemap_changefreq,sitemap_priority',
        ),
      ),
    ),
    'tx_news_domain_model_tag' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-tag',
        ),
        'searchFields' => 'uid,title',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => 'AND tx_news_domain_model_tag.pid=###CURRENT_PID### AND tx_news_domain_model_tag.sys_language_uid IN (-1,0)',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '1',
            'required' => true,
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'VERSION:IS:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'unique',
            'default' => '',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, slug, --palette--;;paletteCore,
            --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.tabs.seo, seo_title, seo_description, seo_headline, seo_text,
            --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
			--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;paletteLanguage,',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,',
        ),
        'paletteLanguage' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ),
      ),
    ),
    'tx_mask_accordionset' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_accordionset',
        'label' => 'tx_mask_panel',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_panel',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_accordionset',
            'foreign_table_where' => 'AND tx_mask_accordionset.pid=###CURRENT_PID### AND tx_mask_accordionset.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_panel' => 
        array (
          'config' => 
          array (
            'cols' => '20',
            'eval' => 'trim',
            'rows' => '3',
            'type' => 'text',
            'wrap' => 'virtual',
            'required' => true,
          ),
          'label' => 'Accordionheadline',
          'exclude' => 1,
        ),
        'tx_mask_content' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'top',
              'newRecordLinkTitle' => 'Inhalt anlegen',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'useSortable' => 1,
            ),
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tt_content',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'colPos' => 
                array (
                  'config' => 
                  array (
                    'default' => 999,
                  ),
                ),
                'CType' => 
                array (
                  'config' => 
                  array (
                    'default' => 'textmedia',
                  ),
                ),
              ),
            ),
            'type' => 'inline',
            'foreign_field' => 'tx_mask_content_parent',
          ),
          'label' => 'Inhaltsbereich',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_panel,tx_mask_content,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_cards' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_cards',
        'label' => 'tx_mask_cardtitel',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_cardtitel,tx_mask_cardtext,tx_mask_label',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
        'tx_mask_24fa76c334f9d' => 
        array (
          'label' => 'Link',
          'description' => '',
          'showitem' => 'tx_mask_is_linked,tx_mask_is_linked_all,--linebreak--,tx_mask_label,tx_mask_link_target',
        ),
        'tx_mask_6553c1fa21f96' => 
        array (
          'label' => 'Cardcontent',
          'description' => '',
          'showitem' => 'tx_mask_cardtitel,tx_mask_cardtext',
        ),
        'tx_mask_7674d55c74dda' => 
        array (
          'label' => 'Card Grafik',
          'description' => 'Entsprechend des Bildselectors zuschneiden.',
          'showitem' => 'tx_mask_card_has_image,tx_mask_cardimage',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_cards',
            'foreign_table_where' => 'AND tx_mask_cards.pid=###CURRENT_PID### AND tx_mask_cards.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_card_has_image' => 
        array (
          'config' => 
          array (
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => 1,
              ),
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Bildplatzierung',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => 'Bild oben',
                'value' => '1',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => 'Bild unten',
                'value' => '2',
                'icon' => '',
                'group' => '',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'description' => 'Es kann nur ein Bild pro Card verwendet werden. 
Entweder Ober- oder  Unterhalb des Contents',
          'label' => 'Bild in Cardelement verwenden',
          'exclude' => 1,
        ),
        'tx_mask_cardtitel' => 
        array (
          'config' => 
          array (
            'cols' => '40',
            'placeholder' => 'Cardheadline',
            'rows' => '2',
            'type' => 'text',
            'wrap' => 'virtual',
          ),
          'label' => 'Überschrift/Headline',
          'exclude' => 1,
        ),
        'tx_mask_is_linked' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Card verlinken',
              ),
            ),
            'renderType' => 'checkboxToggle',
            'type' => 'check',
          ),
          'description' => 'Verlinkung wird auf das Linklabel gelegt',
          'label' => 'Card verlinken',
          'exclude' => 1,
        ),
        'tx_mask_cardimage' => 
        array (
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'appearance' => 
            array (
              'elementBrowserEnabled' => 1,
              'enabledControls' => 
              array (
                'delete' => 1,
                'dragdrop' => 1,
                'hide' => 1,
                'info' => 1,
                'localize' => 1,
                'sort' => 0,
              ),
              'expandSingle' => 0,
              'fileUploadAllowed' => 1,
              'useSortable' => 1,
            ),
            'maxitems' => '1',
            'minitems' => '',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_mask_cardimage',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
          'label' => 'Bild',
          'exclude' => 1,
        ),
        'tx_mask_cardtext' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'cols' => '50',
            'placeholder' => 'Text - hier kann etwas mehr Text eingegeben werden.',
            'rows' => '4',
            'type' => 'text',
            'wrap' => 'virtual',
          ),
          'label' => 'Text',
          'exclude' => 1,
        ),
        'tx_mask_is_linked_all' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Ganzes Element verlinken',
              ),
            ),
            'renderType' => 'checkboxToggle',
            'type' => 'check',
          ),
          'description' => 'Verlinkung ist über dem ganzen Element aktiv',
          'label' => 'Ganzes Card verlinken',
          'exclude' => 1,
        ),
        'tx_mask_label' => 
        array (
          'config' => 
          array (
            'placeholder' => 'Text für den Link',
            'size' => '30',
            'type' => 'input',
          ),
          'label' => 'Linktext CTA',
          'exclude' => 1,
        ),
        'tx_mask_link_target' => 
        array (
          'config' => 
          array (
            'size' => '30',
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'email',
              4 => 'record',
            ),
          ),
          'label' => 'Linkziel CTA',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;;tx_mask_6553c1fa21f96,--palette--;;tx_mask_7674d55c74dda,--palette--;;tx_mask_24fa76c334f9d,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_teaseritems' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_teaseritems',
        'label' => 'tx_mask_iconteaserheadline',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_iconteaserheadline,tx_mask_svgidentifier,tx_mask_iconteasertext,tx_mask_iconteaserlinklabel',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_teaseritems',
            'foreign_table_where' => 'AND tx_mask_teaseritems.pid=###CURRENT_PID### AND tx_mask_teaseritems.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_iconteaserheadline' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'placeholder' => 'Headline anlegen',
            'size' => '48',
            'type' => 'input',
          ),
          'description' => 'Wird mit dem HTML Element H4 angezeigt',
          'label' => 'Kurze Headline des Teasers',
          'exclude' => 1,
        ),
        'tx_mask_svgidentifier' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'eval' => 'trim',
            'placeholder' => 'Beispiel plus-square-fill',
            'size' => '48',
            'type' => 'input',
          ),
          'description' => 'Der Identifier für den Icon kann von https://icons.getbootstrap.com/ kopiert werden.
Einfach den Text unterhalb des gewünschten Icons kopieren und in das Eingabefeld eintragen',
          'label' => 'Iconidentifier',
          'exclude' => 1,
        ),
        'tx_mask_iconteasertext' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'enableRichtext' => 1,
            'richtextConfiguration' => 'mask',
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
          ),
          'description' => 'Kurzer Beschreibungstext.',
          'label' => 'Teasertext',
          'exclude' => 1,
        ),
        'tx_mask_iconteaserlinklabel' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'size' => '48',
            'type' => 'input',
          ),
          'label' => 'Text für Linklabel',
          'exclude' => 1,
        ),
        'tx_mask_iconteaserlink' => 
        array (
          'config' => 
          array (
            'size' => '48',
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'record',
            ),
          ),
          'description' => 'Linkziel auswählen',
          'label' => 'Linkziel',
          'exclude' => 1,
        ),
        'tx_mask_iconteaserlinkall' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Ganzen Teaser verlinken',
              ),
            ),
            'renderType' => 'checkboxToggle',
            'type' => 'check',
          ),
          'label' => 'Ganzen Teaser verlinken',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_iconteaserheadline,tx_mask_svgidentifier,tx_mask_iconteasertext,tx_mask_iconteaserlinklabel,tx_mask_iconteaserlink,tx_mask_iconteaserlinkall,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_slideimages' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_slideimages',
        'label' => 'tx_mask_header',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_header,tx_mask_slogan_big,tx_mask_slogan_small',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
        'tx_mask_a30a82d02df19' => 
        array (
          'label' => 'Slogan zum Bild',
          'description' => 'Jede Zeile einzeln wird animiert eingeblendet.',
          'showitem' => 'tx_mask_slogan_big,tx_mask_slogan_small,--linebreak--,tx_mask_slogan_cta',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_slideimages',
            'foreign_table_where' => 'AND tx_mask_slideimages.pid=###CURRENT_PID### AND tx_mask_slideimages.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_header' => 
        array (
          'config' => 
          array (
            'size' => '45',
            'type' => 'input',
          ),
          'description' => 'Wird im TYPO3 Backend angezeigt.',
          'label' => 'Bildtitel im TYPO3 Backend',
          'exclude' => 1,
        ),
        'tx_mask_slogan_big' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'type' => 'text',
            'wrap' => 'virtual',
          ),
          'description' => 'Text groß - wird einzeln animiert',
          'label' => 'Slogantext groß',
          'exclude' => 1,
        ),
        'tx_mask_slideitem' => 
        array (
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'appearance' => 
            array (
              'expandSingle' => 1,
              'fileUploadAllowed' => 1,
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showSynchronizationLink' => 0,
              'useSortable' => 1,
            ),
            'maxitems' => '',
            'minitems' => '',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_mask_slideitem',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
          'label' => 'Bild',
          'exclude' => 1,
        ),
        'tx_mask_slogan_small' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'type' => 'text',
            'wrap' => 'virtual',
          ),
          'description' => 'Text klein - wird einzeln animiert',
          'label' => 'Slogantext klein',
          'exclude' => 1,
        ),
        'tx_mask_slogan_cta' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 0,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'top',
              'newRecordLinkTitle' => 'Datensatz anlegen',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showSynchronizationLink' => 1,
              'useSortable' => 1,
            ),
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_mask_slogan_cta',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '2',
            'type' => 'inline',
          ),
          'description' => 'Buttons mit Call to action link anlegen',
          'label' => 'CTA Button',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_header,tx_mask_slideitem,--palette--;;tx_mask_a30a82d02df19,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_slogan_cta' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_slogan_cta',
        'label' => 'tx_mask_cta_target',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_cta_label',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_slogan_cta',
            'foreign_table_where' => 'AND tx_mask_slogan_cta.pid=###CURRENT_PID### AND tx_mask_slogan_cta.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_slideimages',
            'foreign_table_where' => 'AND tx_mask_slideimages.pid=###CURRENT_PID### AND tx_mask_slideimages.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_cta_target' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'record',
            ),
          ),
          'description' => 'Linkziel auswählen',
          'label' => 'Linkziel',
          'exclude' => 1,
        ),
        'tx_mask_cta_label' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'size' => '50',
            'type' => 'input',
          ),
          'label' => 'Linklabel',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_cta_target,tx_mask_cta_label,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_tabs' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_tabs',
        'label' => 'tx_mask_tab',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_tab',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_tabs',
            'foreign_table_where' => 'AND tx_mask_tabs.pid=###CURRENT_PID### AND tx_mask_tabs.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_tab' => 
        array (
          'config' => 
          array (
            'size' => '45',
            'type' => 'input',
            'required' => true,
          ),
          'label' => 'Text im Reiter',
          'exclude' => 1,
        ),
        'tx_mask_tabcontent' => 
        array (
          'config' => 
          array (
            'appearance' => 
            array (
              'collapseAll' => 1,
              'enabledControls' => 
              array (
                'dragdrop' => 1,
              ),
              'expandSingle' => 1,
              'levelLinksPosition' => 'top',
              'newRecordLinkTitle' => 'Inhalt anlegen',
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'useSortable' => 1,
            ),
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tt_content',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'colPos' => 
                array (
                  'config' => 
                  array (
                    'default' => 999,
                  ),
                ),
                'CType' => 
                array (
                  'config' => 
                  array (
                    'default' => 'textmedia',
                  ),
                ),
              ),
            ),
            'type' => 'inline',
            'foreign_field' => 'tx_mask_tabcontent_parent',
          ),
          'label' => 'Tabinhalt',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_tab,tx_mask_tabcontent,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_flipcard' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_flipcard',
        'label' => 'tx_mask_flipcard_front_title',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_flipcard_back_description,tx_mask_flipcard_front_title,tx_mask_flipcard_back_link_label',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
        'tx_mask_8389b866fefb1' => 
        array (
          'label' => 'Flipcard Backend',
          'description' => 'Rückseite',
          'showitem' => 'tx_mask_flipcard_back_description,--linebreak--,tx_mask_flipcard_back_link_label,tx_mask_flipcard_back_link_target',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_flipcard',
            'foreign_table_where' => 'AND tx_mask_flipcard.pid=###CURRENT_PID### AND tx_mask_flipcard.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_flipcard_back_description' => 
        array (
          'config' => 
          array (
            'enableRichtext' => 1,
            'richtextConfiguration' => 'mask',
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
          ),
          'label' => 'Beschreibungstext',
          'exclude' => 1,
        ),
        'tx_mask_flipcard_front_title' => 
        array (
          'config' => 
          array (
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 1,
            ),
            'placeholder' => 'Title eingeben',
            'size' => '30',
            'type' => 'input',
          ),
          'label' => 'Cardtitle',
          'exclude' => 1,
        ),
        'tx_mask_flipcard_front_image' => 
        array (
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'appearance' => 
            array (
              'elementBrowserEnabled' => 1,
              'enabledControls' => 
              array (
                'delete' => 1,
                'dragdrop' => 1,
                'hide' => 1,
                'info' => 1,
                'localize' => 1,
                'sort' => 0,
              ),
              'fileUploadAllowed' => 1,
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 0,
              'showSynchronizationLink' => 0,
              'useSortable' => 1,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => 0,
            ),
            'maxitems' => '1',
            'minitems' => '',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_mask_flipcard_front_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
          'description' => 'Hintergrundbild der Vorderseite',
          'label' => 'Hintergrundbild',
          'exclude' => 1,
        ),
        'tx_mask_flipcard_back_link_label' => 
        array (
          'config' => 
          array (
            'placeholder' => 'Text für den Link eingeben',
            'size' => '30',
            'type' => 'input',
          ),
          'label' => 'Linklabel',
          'exclude' => 1,
        ),
        'tx_mask_flipcard_back_link_target' => 
        array (
          'config' => 
          array (
            'mode' => 0,
            'placeholder' => 'Linkziel wählen.',
            'size' => '50',
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'email',
              4 => 'record',
            ),
          ),
          'label' => 'Linkziel auswählen',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_flipcard_front_title,tx_mask_flipcard_front_image,--palette--;;tx_mask_8389b866fefb1,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
    'tx_mask_socialmedia' => 
    array (
      'ctrl' => 
      array (
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'title' => 'tx_mask_socialmedia',
        'label' => 'tx_mask_socialmediatitel',
        'iconfile' => 'EXT:mask/Resources/Public/Icons/Extension.svg',
        'searchFields' => 'tx_mask_socialmediatitel',
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ),
      ),
      'columns' => 
      array (
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tx_mask_socialmedia',
            'foreign_table_where' => 'AND tx_mask_socialmedia.pid=###CURRENT_PID### AND tx_mask_socialmedia.sys_language_uid IN (-1, 0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_mask_socialmediatitel' => 
        array (
          'config' => 
          array (
            'type' => 'input',
          ),
          'description' => 'Wird im Backend angezeigt.',
          'label' => 'Titel für Datensatz',
          'exclude' => 1,
        ),
        'tx_mask_socialmedialink' => 
        array (
          'config' => 
          array (
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'url',
              1 => 'record',
              2 => 'telephone',
            ),
          ),
          'label' => 'Link zum Socialmedium',
          'exclude' => 1,
        ),
        'tx_mask_selectsocialmedia' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Auswählen',
                'value' => '',
                'icon' => '',
                'group' => '',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => 'facebook',
                'icon' => '',
                'group' => '',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => 'twitter',
                'icon' => '',
                'group' => '',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => 'youtube',
                'icon' => '',
                'group' => '',
              ),
              4 => 
              array (
                'label' => '4',
                'value' => 'instagram',
                'icon' => '',
                'group' => '',
              ),
              5 => 
              array (
                'label' => '5',
                'value' => 'linkedin',
                'icon' => '',
                'group' => '',
              ),
              6 => 
              array (
                'label' => '6',
                'value' => 'whatsapp',
                'icon' => '',
                'group' => '',
              ),
            ),
            'maxitems' => '1',
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'description' => 'Pro Datensatz kann nur ein Medium ausgewählt werden.',
          'label' => 'Socialmedium für Bootstrap Icons auswählen',
          'exclude' => 1,
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_mask_socialmediatitel,tx_mask_socialmedialink,tx_mask_selectsocialmedia,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ),
      ),
    ),
  ),
);
#