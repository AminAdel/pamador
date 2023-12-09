<?php

function dd($var) {
	print_r($var);
	exit;
}

function json_encode_utf8($array) {
	return json_encode($array, JSON_UNESCAPED_UNICODE);
}


function objectToArray($objectOrArray) {
	/*
	 * version 3.0.0
	****************/
	
	// if is_json -> decode :
	// if (is_string($objectOrArray) && is_json($objectOrArray)) $objectOrArray = json_decode($objectOrArray, 'JSON_BIGINT_AS_STRING');
	if (is_string($objectOrArray) && is_json($objectOrArray)) $objectOrArray = json_decode($objectOrArray, true, 512, JSON_BIGINT_AS_STRING);
	
	// if object -> convert to array :
	if (is_object($objectOrArray)) $objectOrArray = (array) $objectOrArray;
	
	// if not array -> just return it (probably string or number) :
	if (!is_array($objectOrArray)) return $objectOrArray;
	
	// if empty array -> return [] :
	if (count($objectOrArray) == 0) return [];
	
	// repeat tasks for each item :
	$output = [];
	foreach ($objectOrArray as $key => $o_a) {
		$output[$key] = objectToArray($o_a);
	}
	return $output;
}


function is_json($string) {
	// php 5.3 or newer needed;
	json_decode($string);
	return (json_last_error() == JSON_ERROR_NONE);
} // done


function generateRandomString($length = 10, $numbers = true, $lowercase = true, $uppercase = true, $special = true) {
	$characters = '';
	if ($numbers) $characters .= '01234567890123456789'; // weight = 2
	if ($lowercase) $characters .= 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz'; // weight = 2
	if ($uppercase) $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ'; // weight = 2
	if ($special) $characters .= '~!@#$%^&*()-_=+[]{}|<>?/.,'; // weight = 1
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}


function persian_numbers($string) {
	$numbers_fa = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
	$numbers_en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	$string = str_replace($numbers_en, $numbers_fa, $string);
	return $string;
}


function number_format2($number, $decimalPlaces = 2) {
	$formattedNumber = number_format($number, $decimalPlaces);
	if ($decimalPlaces > 0) {
		return rtrim(rtrim($formattedNumber, '0'), '.');
	}
	return $formattedNumber;
}


