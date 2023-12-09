<?php

namespace Methods;

class Configs
{
	public static function get_configs() : void {
		$configs_global = include '../app/configs_global.php';
		$configs_app = include '../app/apps/'.$GLOBALS['app'].'/configs.php';
		$configs = array_merge($configs_global, $configs_app);
		$GLOBALS['configs'] = $configs;
	} // 1402.09.11
	
	
	public static function set() {
		date_default_timezone_set($GLOBALS['configs']['time_zone']);
	}
}