<?php

namespace Methods;

class Configs
{
	public static function get_configs() {
		$configs_global = include '../app/configs_global.php';
		$configs_app = include '../app/apps/'.$GLOBALS['app'].'/configs.php';
		$configs = array_merge($configs_global, $configs_app);
		return $configs;
	} // 1402.09.11
}