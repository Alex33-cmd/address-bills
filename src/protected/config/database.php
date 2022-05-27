<?php

// This is the database connection configuration.
return array(
	/*
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	*/
	// uncomment the following lines to use a MySQL database

	/**
	 * for php
	 */
	'connectionString' => 'mysql:host=db;dbname=adrbllDB',
	
	/**
	 * for external access (migration)
	 */
	// 'connectionString' => 'mysql:host=127.0.0.1;port=3308;dbname=adrbllDB',

	'emulatePrepare' => true,
	'username' => 'test',
	'password' => 'password',
	'charset' => 'utf8',
);