<?php

// for each domain you can specify different app;
switch ($GLOBALS['req_info']['server_name']) {
	case 'example.com' :
		$GLOBALS['app'] = 'example_com';
		break;
	default :
		$GLOBALS['app'] = 'aprofile_website';
}

//==============================

// for each url parameter you can specify different app;
switch ($GLOBALS['req_info']['params'][0] ?? '') {
	default :
		$GLOBALS['app'] = 'aprofile_website';
}

//==============================

// you can write your logic to switch between apps :
// if ($condition) {
// 	$app = 'app';
// }

//==============================

// for each app you must create a folder with app name;
require '../app/apps/'.$GLOBALS['app'].'/app.php';