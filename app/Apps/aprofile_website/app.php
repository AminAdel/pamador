<?php

use Methods\Configs;
use Methods\Mongo_DB;
use Methods\MySql;


$GLOBALS['configs'] = Configs::get_configs();


$GLOBALS['mysql_link'] = MySQL::connect($GLOBALS['configs']['mysql']);
// $GLOBALS['mongodb_link'] = Mongo_DB::connect($GLOBALS['configs']['mongodb']);


require __DIR__.'/routes.php';


MySQL::disconnect();
// Mongo_DB::disconnect();