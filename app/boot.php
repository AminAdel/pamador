<?php

use Methods\Configs;
use Methods\MySQL;
use Methods\Request;
use Methods\Response;
use Methods\Security;

//==============================


include '../app/helpers.php';


$GLOBALS['req_info'] = Request::get_req_info();


include '../app/apps.php';


$GLOBALS['configs'] = Configs::get_configs();


$GLOBALS['mysql_con'] = MySQL::connect($GLOBALS['configs']['mysql']);


Security::init();


include_once '../app/apps/'.$GLOBALS['app'].'/app.php';


MySQL::disconnect();


Response::send();


/* END */
