<?php

defined('TYPO3') or die();

/**
 * Static TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'femanager',
    'Configuration/TypoScript/Main',
    'Main Settings'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'femanager',
    'Configuration/TypoScript/Layout',
    'Add Layout CSS'
);
