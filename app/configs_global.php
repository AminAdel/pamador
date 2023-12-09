<?php
return [
	
	'env' => 'prod',
	
	
	'time_zone' => 'Asia/Tehran',
	
	
	'response_default_contentType' => 'application/json',
	'response_default_code' => 200,
	
	
	'db_default' => 'mysql',
	
	
	'security' => [
		'max_allowed_requests_per_minute' => 60,
		'max_allowed_requests_per_second' => 10,
		'max_allowed_warnings' => 3,
	],
	
];
