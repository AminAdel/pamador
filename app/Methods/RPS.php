<?php

namespace Methods;

class RPS
{
	public static function get_ip_info() {
		$ip = $GLOBALS['ip'];
		$date_y = intval(date("Y"));
		$date_m = intval(date("m"));
		$date_d = intval(date("d"));
		$date_hour = intval(date("H"));
		$date_minute = intval(date("i"));
		$date_second = intval(date("s"));
		$file_name = '../ip_stats/'.$date_y.'/'.$date_m.'/'.$date_d.'/'.$date_hour.'/'.$ip.'.json';
		if (!file_exists($file_name)) {
			$info = [
				'ip' => $ip,
				'last_request_time' => [
					'unix' => time(),
					'year' => $date_y,
					'month' => $date_m,
					'day' => $date_d,
					'hour' => $date_hour,
					'minute' => $date_minute,
					'second' => $date_second
				],
				'rpm' => 1,
				'rps' => 1,
				'warnings' => 0,
				'blocked' => 0
			];
			//==============================
			// creates directories :
			if (!is_dir("../ip_stats/$date_y/")) mkdir("../ip_stats/$date_y/");
			if (!is_dir("../ip_stats/$date_y/$date_m/")) mkdir("../ip_stats/$date_y/$date_m/");
			if (!is_dir("../ip_stats/$date_y/$date_m/$date_d/")) mkdir("../ip_stats/$date_y/$date_m/$date_d/");
			if (!is_dir("../ip_stats/$date_y/$date_m/$date_d/$date_hour/")) mkdir("../ip_stats/$date_y/$date_m/$date_d/$date_hour/");
			//==============================
			// $file = fopen("../ip_stats/$date_y/$date_m/$date_d/".$ip.'.json', 'w+'); print_r($file); exit;
			//==============================
			file_put_contents("../ip_stats/$date_y/$date_m/$date_d/$date_hour/".$ip.'.json', json_encode_utf8($info));
			return $info;
		}
		//==============================
		$info = file_get_contents("../ip_stats/$date_y/$date_m/$date_d/$date_hour/".$ip.'.json');
		$info = objectToArray($info);
		//==============================
		// rpm :
		if ($info['last_request_time']['minute'] === $date_minute) {
			$info['rpm']++;
		}
		else {
			$info['last_request_time']['minute'] = $date_minute;
			$info['rpm'] = 1;
		}
		//==============================
		// rps :
		if ($info['last_request_time']['second'] === $date_second) {
			$info['rps']++;
		}
		else {
			$info['last_request_time']['second'] = $date_second;
			$info['rps'] = 1;
		}
		//==============================
		// warnings :
		if ($info['rpm'] > $GLOBALS['configs']['security']['max_allowed_requests_per_minute']) {
			$info['warnings']++;
			$info['rpm'] = 0;
		}
		//==============================
		if ($info['rps'] > $GLOBALS['configs']['security']['max_allowed_requests_per_second']) {
			$info['warnings']++;
			$info['rps'] = 0;
		}
		//==============================
		// block :
		if ($info['warnings'] > $GLOBALS['configs']['security']['max_allowed_warnings']) {
			$info['blocked'] = 1;
			file_put_contents("../ip_blacklist/".$ip.'.json', json_encode_utf8($info));
		}
		//==============================
		file_put_contents("../ip_stats/$date_y/$date_m/$date_d/$date_hour/".$ip.'.json', json_encode_utf8($info));
		//==============================
		return $info;
	} // 1402.09.18
}