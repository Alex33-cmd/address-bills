<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		// 'db'=>require(dirname(__FILE__).'/database.php'),
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;port=3308;dbname=adrbllDB',
			'emulatePrepare' => true,
			'username' => 'test',
			'password' => 'password',
			'charset' => 'utf8',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	),
);
