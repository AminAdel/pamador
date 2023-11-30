<?php
return [
	
	'env' => 'prod',
	
	
	
	'directories' => [
		'public' => '/',
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
	
];
