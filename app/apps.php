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
// if set -> use array_shift to remove first parameter;
switch ($GLOBALS['req_info']['params'][0] ?? '') {
	// case 'aprofile_website':
	// 	$GLOBALS['app'] = 'aprofile_website';
	// 	array_shift($GLOBALS['req_info']['params']);
	// 	break;
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
