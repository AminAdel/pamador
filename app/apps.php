<?php

// for each domain you can specify different app;
switch ($GLOBALS['req_info']['server_name']) {
	case 'example.com' :
		$GLOBALS['app'] = 'example_com';
		break;
	default :
		$GLOBALS['app'] = 'app1';
}

//==============================

// for each url parameter you can specify different app;
// if set -> use array_shift to remove first parameter;
// todo: there is some bug reported here related to params[0], find and fix it.
switch ($GLOBALS['req_info']['params'][0] ?? '') {
	// case 'app1':
	// 	$GLOBALS['app'] = 'app1';
	// 	array_shift($GLOBALS['req_info']['params']);
	// 	break;
	default :
		$GLOBALS['app'] = 'app1';
}
//==============================

// you can write your logic to switch between apps :
// if ($condition) {
// 	$GLOBALS['app'] = 'app1';
// }

//==============================

// for each app you must create a folder with app name;
