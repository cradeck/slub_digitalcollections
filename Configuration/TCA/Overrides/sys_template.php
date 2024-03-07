<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Add default Typoscript
ExtensionManagementUtility::addStaticFile(
    'slub_digitalcollections',
    'Configuration/TypoScript',
    'SLUB Digital Collections'
);

// Add optional SitePackage Typoscript
ExtensionManagementUtility::addStaticFile(
    'slub_digitalcollections',
    'Configuration/TypoScript/SitePackage',
    'Optional Sitepackage for pure usage of SLUB Digital Collections.'
);
