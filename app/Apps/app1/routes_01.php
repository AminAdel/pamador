<?php


use Apps\app1\Controllers\StaticPagesController;

//==============================

$method = $GLOBALS['req_info']['method'];
$params = $GLOBALS['req_info']['params'];

//==============================

ob_start(function($buffer) {
	echo 'this is output';
	print_r($buffer);
});

// ~/
if (empty($params)) {
	
	// [get] :
	if ($method === 'get') StaticPagesController::home();
}

//==============================

// ~/about
else {
	if ($params[0] === 'about') {
		
		// [get] :
		if ($method === 'get') StaticPagesController::about();
	}
	
	//==============================
	
	// ~/api
	elseif ($params[0] === 'api') {
		
		// [get] :
		if ($method === 'get') StaticPagesController::about();
	}
}

ob_end_flush();
