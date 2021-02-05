<?php

use Methods\Configs;
$configs = Configs::get_configs();


use Methods\MySQL;
$mysql = MySQL::connect($configs['mysql']);


// security -> block attacks :
if ($configs['env'] == 'prod') {
	$security = new Methods\Security();
	$security->mysql_link = $mysql;
	$security->max_allowed_rps = $configs['max_allowed_requests_per_second'];
	$security->max_allowed_warnings = $configs['max_allowed_warnings'];
	$security->block_attacks();
}


use Methods\URI;
$url_params = URI::get_url_params();


// directories :
$dir_helper = '../app/helpers/';
$dir_sites = '../app/sites/';
$dir_methods = '../app/methods/';


// helper functions :
include_once $dir_helper . 'functions.php';


//==============================

// domains & sites : (we can do this with db too, but not for now ... maybe later)
$domain = strtolower($_SERVER['HTTP_HOST']);
$site = $configs['site'];
if (in_array($domain, [
	'sitename.xyz',
	'sitename2.xyz'
])) $site = 'sitename.xyz';

// site :
include_once $dir_sites . $site .'/'. $site . '.php';

//==============================

// close databases :
mysqli_close($mysql);

/* END */
