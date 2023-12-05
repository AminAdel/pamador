<?php

use Apps\aprofile_website\Controllers\StaticPagesController;

//==============================

$method = $GLOBALS['req_info']['method'];
$params = $GLOBALS['req_info']['params'];

//==============================

if (empty($params)) {
	
	// [get] :
	if ($method === 'get') StaticPagesController::home();
}

//==============================

else {
	
	// ~/about
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
