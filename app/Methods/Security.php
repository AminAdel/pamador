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
		self::control_rps();
	}
	
	private static function prevent_sql_injection() {
	
	}
	
	private static function control_rps() {
		$ip_info = RPS::get_ip_info();
		if ($ip_info['blocked']) {
			Response::send(json_encode_utf8(['message' => 'your IP has been blocked for unusual activity']));
			exit();
		}
	}
	
	//==============================
	
	private function prevent_xss() {
		// this is for web
	}
	
	private function prevent_csrf() {
		// this is for web
	}
	
}