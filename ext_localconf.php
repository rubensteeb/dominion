<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $_EXTKEY . '/Configuration/PageTS" extensions="ts">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
	$_EXTKEY,
	'setup',
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/setup.ts">'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'RubenSteeb.Dominion',
	'TestPlugin',
	[
		'Home' => 'index',
	],
	[
		'Home' => 'index',
	]
);