<?php

use Methods\Configs;
use Methods\MySQL;
use Methods\Request;

//==============================

include '../app/helpers.php';


$configs = Configs::get_configs();


$mysql = MySQL::connect($configs['mysql']);


$url = Request::get_url_info();


// security -> block attacks :
if ($configs['env'] == 'prod') {
	$security = new Methods\Security();
	$security->mysql_link = $mysql;
	$security->max_allowed_rps = $configs['max_allowed_requests_per_second'];
	$security->max_allowed_warnings = $configs['max_allowed_warnings'];
	$security->block_attacks();
}



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
