<?php

namespace Methods;

class Configs
{
	public static function get_configs($index = null) {
		$configs = include '../app/configs.php';
		if (!empty($index)) return ($configs[$index] ?? null);
		return $configs;
	} // 1402.09.09
}