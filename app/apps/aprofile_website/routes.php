<?php


use App\apps\aprofile_website\Controllers\StaticPagesController;

//==============================

$method = $GLOBALS['req_info']['method'];
$params = $GLOBALS['req_info']['params'];

//==============================

// ~/
if (empty($params)) {
	
	// [get] :
	if ($method === 'get') StaticPagesController::home();
}

//==============================

else {

}