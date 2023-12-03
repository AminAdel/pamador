<?php

namespace App\Methods;

class Request
{
	public static function get_req_info() {
		$output = [];
		$output['scheme'] = $_SERVER['REQUEST_SCHEME'];
		$output['method'] = strtolower($_SERVER['REQUEST_METHOD']);
		$output['server_name'] = $_SERVER['SERVER_NAME'];
		$output['uri'] = $_SERVER['REQUEST_URI'];
		$output['url'] = $output['scheme'].'://'.$output['server_name'].$_SERVER['REQUEST_URI'];
		$output['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		//==============================
		$output['cookies'] = self::get_cookies();
		//==============================
		$output['app_root'] = self::get_app_root();
		$output['params'] = self::get_params();
		$output['queries'] = $_GET;
		if ($output['method'] != 'get') $output['inputs'] = $_POST;
		//==============================
		return $output;
	}
	
	public static function get_params() {
		$uri_no_query = explode('?', $_SERVER['REQUEST_URI'])[0] ?? $_SERVER['REQUEST_URI'];
		$params = str_ireplace(self::get_app_root(), '', $uri_no_query);
		$params = trim($params, '/');
		if (empty($params)) return [];
		$params = explode('/', $params);
		foreach ($params as $index => $param) {
			if (empty($param)) unset($params[$index]);
		}
		$params = array_values($params);
		return $params;
	}
	
	public static function get_cookies() {
		$cookies = explode('; ', ($_SERVER['HTTP_COOKIE'] ?? ''));
		$output = [];
		foreach ($cookies as $index => $cookie) {
			$temp = explode('=', $cookie);
			if (empty($temp[0])) continue;
			$output[$temp[0]] = $temp[1] ?? '';
		}
		return $output;
	}
	
	public static function get_app_root() {
		return str_ireplace('index.php', '', $_SERVER['SCRIPT_NAME']);
	}
}