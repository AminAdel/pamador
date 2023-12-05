<?php

namespace Methods;

class Route
{
	public static function get($address, $controllerClass, $function) {
		$controllerClass::$function();
	}
	
	public static function post() {
	
	}
	
	public static function group() {
	
	}
	
	public function prefix() {
	
	}
}