<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/*
 * TEMPLATE-TS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TRB Basics');


/*
 * PAGE-TS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:'.$_EXTKEY.'/Configuration/Page/">');

