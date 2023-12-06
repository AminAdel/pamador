<?php

namespace Apps\aprofile_website\Controllers;

use Methods\Response;

class StaticPagesController
{
	public static function home() {
		$data = [
			'message' => 'this is home page'
		];
		Response::set_content_type('application/json');
		Response::set_http_code(200);
		Response::send(json_encode_utf8($data));
	}
	
	public static function about() {
		echo 'this is about page';
	}
}