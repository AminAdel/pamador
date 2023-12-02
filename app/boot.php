<?php

use Methods\Configs;
use Methods\MySQL;
use Methods\Request;
use Methods\Security;

//==============================

include '../app/helpers.php';


$configs = Configs::get_configs();


$mysql_con = MySQL::connect($configs['mysql']);


$req_info = Request::get_req_info();


Security::init();

// if ($configs['env'] == 'prod') {
// 	$security = new Methods\Security();
// 	$security->mysql_link = $mysql_con;
// 	$security->max_allowed_rps = $configs['max_allowed_requests_per_second'];
// 	$security->max_allowed_warnings = $configs['max_allowed_warnings'];
// 	$security->block_attacks();
// }



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
mysqli_close($mysql_con);

/* END */
