<?php

use Methods\Request;
use Methods\Security;

//==============================


require '../app/helpers.php';


$GLOBALS['req_info'] = Request::get_req_info();


Security::init();


require '../app/apps.php';