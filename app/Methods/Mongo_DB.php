<?php

namespace Methods;

class Mongo_DB
{
	public static function connect($configs) {
		// $client = new MongoDB\Client("mongodb://localhost:27017");
		
		return $client ?? false;
	}
	
	public static function disconnect($link = null) : void {
		$link = $link ?? $GLOBALS['mongodb_link'];
		$link->close();
	}
}