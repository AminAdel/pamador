<?php

namespace Methods;

class MySql
{
	public static function connect($configs) {
		// host, db, username, password
		//==============================
		$con = mysqli_connect($configs['host'], $configs['username'], $configs['password'], $configs['db']);
		// mysqli_query($con, "set names utf8");
		//==============================
		return $con;
	} // 1402.09.09
}