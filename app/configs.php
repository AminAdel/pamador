<?php
return [
	
	'env' => 'prod',
	
	
	
	'directories' => [
	],
	
	
	
	'security' => [
		'max_allowed_requests_per_second' => 5,
		'max_allowed_warnings' => 3,
	],
	
	
	
	'mysql' => [
		'host' => 'localhost',
		'db' => 'pamador',
		'username' => 'root',
		'password' => ''
	],
	
	
	
	// each line is for a different domain :
	// domain => folder-name
	'apps' => [
		'default' => 'app',
		'google.com' => 'google.com'
	]
	
];
