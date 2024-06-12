<?php
return [
	
	'env' => 'prod',
	
	
	'response_default_contentType' => 'application/json',
	'response_default_code' => 200,
	
	
	'db_default' => 'mysql',
	
	
	'mysql' => [
		'driver' => 'mysql',
		'host' => 'localhost',
		'db' => 'pamador',
		'username' => 'root',
		'password' => ''
	],
	
	
	'mongodb' => [
		'driver' => 'mongodb',
		'host' => 'localhost',
		'db' => 'pamador',
		'username' => 'root',
		'password' => ''
	],
	
	
	'secret_phrase' => 'N^&qCH[rcC/q/hH$AR{b', // after set, do not change. if you change -> old hashes and tokens will not work;
];
