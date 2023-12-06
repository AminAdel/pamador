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
		http_response_code(404);
	} // 1402.09.14
	
	
	public static function send($content = '') : void {
		if (empty($content)) {
			self::set_content_type("application/json");
			$content = '{"statusCode": '.http_response_code().'}';
		}
		echo $content;
	}
}