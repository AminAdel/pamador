<?php

namespace Apps\aprofile_website\Controllers;

use Methods\Response;

class StaticPagesController
{
	
	public static function home() {
		$data = [
			'message' => 'this is home page'
		];
		//==============================
		// Response::set_content_type('application/json');
		// Response::set_http_code(200);
		// Response::send(json_encode_utf8($data));
		//==============================
		// or :
		// Response::send(json_encode_utf8($data), 'application/json', 200);
		//==============================
		// or :
		Response::send(json_encode_utf8($data)); // if is equal to configs `response_default_contentType` and `response_default_code`
	}
	
	public static function about() {
		$data = [
			'message' => 'this is about page'
		];
		Response::send(json_encode_utf8($data));
	}
	
	public static function contact() {
		$data = [
			'message' => 'this is contact page'
		];
		Response::send(json_encode_utf8($data));
	}
}