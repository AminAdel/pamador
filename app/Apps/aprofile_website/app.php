<?php

use Methods\Response;
use Methods\MySql;
use Methods\Mongo_DB;


$GLOBALS['mysql_link'] = MySQL::connect($GLOBALS['configs']['mysql']);
// $GLOBALS['mongodb_link'] = Mongo_DB::connect($GLOBALS['configs']['mongodb']);


Response::set_content_type($GLOBALS['configs']['response_default_contentType']);
Response::set_http_code($GLOBALS['configs']['response_default_code']);


require __DIR__.'/routes.php';


MySQL::disconnect($GLOBALS['mysql_link']);
// Mongo_DB::disconnect(['mongodb_link']);