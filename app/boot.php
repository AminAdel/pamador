<?php

use Methods\Configs;
use Methods\Request;
use Methods\Security;

//==============================


require '../app/helpers.php';


$GLOBALS['req_info'] = Request::get_req_info();


require '../app/apps.php';


Configs::get_configs();
Configs::set();


Security::init();


require '../app/apps/'.$GLOBALS['app'].'/app.php';