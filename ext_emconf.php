<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Dominion',
	'desciption' => 'Dominion Extension to shuffle',
	'category' => 'plugin',
	'author' => 'Ruben Steeb',
	'author_company' => 'Private',
	'author_email' => 'ruben.steeb@gmail.com',
	'state' => 'alpha',
	'clearCacheOnLoad' => true,
	'version' => '0.0.0',
	'constrains' => [
		'depends' => [
			'typo3' => '8.7.0-8.9.99',
		]
	],
	'autoload' => [
		'psr-4' => [
			'RubenSteeb\\Dominion\\' => 'Classes',
		]
	]	
];