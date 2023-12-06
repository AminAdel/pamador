<?php

namespace Methods;

class MySql
{
	public static function connect($configs) {
		// host, db, username, password
		//==============================
		$con = mysqli_connect($configs['host'], $configs['username'], $configs['password'], $configs['db']);
		mysqli_set_charset($con,"utf8");
		//==============================
		return $con;
	} // 1402.09.09
	
	public static function disconnect($link = null) : void {
		mysqli_close($link ?? $GLOBALS['mysql_link']);
	}
}