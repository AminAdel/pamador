<?php

namespace Methods;

class Response
{
	public static function set_header($name, $value = null) : void {
		if (empty($value)) {
			header($name);
		}
		else {
			header("$name: $value");
		}
	} // 1402.09.14
	
	
	public static function get_headers_list() : array {
		$temp = headers_list();
		$list = [];
		foreach ($temp as $index => $item) {
			$temp2 = explode(':', $item);
			$list[$temp2[0]] = $temp2[1];
		}
		return $list;
	} // 1402.09.14
	
	
	public static function set_content_type($content_type) : void {
		header("Content-type: $content_type");
	} // 1402.09.14
	
	
	public static function set_http_code($code_number) : void {
		http_response_code($code_number);
	} // 1402.09.14
	
	
	public static function send($content = '', $content_type = null, $http_code = null) : void {
		if (empty($content)) {
			self::set_content_type("application/json");
			$content = '{"statusCode": '.http_response_code().'}';
		}
		if (!empty($content_type)) {
			self::set_content_type($content_type);
		}
		if (!empty($http_code)) {
			self::set_http_code($http_code);
		}
		echo $content;
	} // 1402.09.15
}