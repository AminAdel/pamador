<?php

// $time_start = microtime(true);

use App\Methods\Configs;
use App\Methods\MySQL;
use App\Methods\Request;
use App\Methods\Security;

//==============================


include '../app/helpers.php';


$GLOBALS['req_info'] = Request::get_req_info();


include '../app/apps.php';


$GLOBALS['configs'] = Configs::get_configs();


$GLOBALS['mysql_con'] = MySQL::connect($GLOBALS['configs']['mysql']);


Security::init();


include_once '../app/apps/'.$GLOBALS['app'].'/app.php';


MySQL::disconnect();

// dd(microtime(true) - $time_start);
/* END */
