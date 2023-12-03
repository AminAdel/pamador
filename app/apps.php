<?php

// for each domain you can specify different app;
switch ($GLOBALS['req_info']['server_name']) {
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