<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

call_user_func(function()
{
    ExtensionManagementUtility::registerPageTSConfigFile (
        'slub_digitalcollections',
        'Configuration/TsConfig/All.tsconfig',
        'SLUB Digital Collections: Page TS incl. Backend Layouts'
    );
});
