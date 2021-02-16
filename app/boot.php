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
$dir_helpers = '../php/helpers/';
$dir_apps = '../php/apps/';
$dir_methods = '../php/methods/';
$dir_shared = '../php/shared/';
$dir_shared_views = '../php/shared/views/';


// helper functions :
include_once $dir_helpers . 'functions.php';


//==============================

// domains & apps :
$domain = strtolower($_SERVER['HTTP_HOST']);
$app = '';
switch ($domain) {
	case 'localhost':
	case '127.0.0.1':
		$app = $configs['app'];
		break;
	case 'develo.ir':
		$app = 'develo.ir';
		break;
	default :
		$app = 'boomi.biz';
}
include_once $dir_apps. $app . '/' . $app . '.php';

//==============================

// close databases :
mysqli_close($mysql);

/* END */
