<?php
return [
	
	'env' => 'prod',
	
	'max_allowed_requests_per_second' => 5,
	'max_allowed_warnings' => 3,
	
	"mysql" => [
		"host" => 'your-db-host',
		"db_name" => 'your-db-name',
		"username" => 'your-username',
		"password" => 'your-password'
	],
	
	'path_public' => '/'
];
