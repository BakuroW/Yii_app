<?php

// This is the database connection configuration.
return array(
	/*'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',*/
	// uncomment the following lines to use a MySQL database

/*	'connectionString' => 'mysql:host=localhost;dbname=one',
    'host' => 'localhost',
    'port' => '3306',
	'emulatePrepare' => true,
	'username' => 'mysql',
	'password' => 'mysql',
	'charset' => 'utf8',
    'tablePrefix'=>'o_',*/

        'connectionString' => 'mysql:host=localhost;dbname=one',
/*        'port'             => '3306',*/
        'username'         => 'root',
        'password'         => 'root',
        'emulatePrepare'   => true,
        'charset'          => 'utf8',
        'tablePrefix'      => 'o_',
        'class'            => 'CDbConnection',          // DO NOT FORGET THIS!

);
