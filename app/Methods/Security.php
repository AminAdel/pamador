<?php

namespace Methods;

class Security
{
	
	// if ($configs['env'] == 'prod') {
	// 	$security = new Methods\Security();
	// 	$security->mysql_link = $mysql_con;
	// 	$security->max_allowed_rps = $configs['max_allowed_requests_per_second'];
	// 	$security->max_allowed_warnings = $configs['max_allowed_warnings'];
	// 	$security->block_attacks();
	// }
	
	//==============================
	
	public static function init() {
		// todo;
	}
	
	private static function prevent_sql_injection() {
	
	}
	
	private static function control_rps() {
	
	}
	
	//==============================
	
	private function prevent_xss() {
		// this is for web
	}
	
	private function prevent_csrf() {
		// this is for web
	}
	
}