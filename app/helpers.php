<?php

function dd($var) {
	print_r($var);
	exit;
}

function json_encode_utf8($array) {
	return json_encode($array, JSON_UNESCAPED_UNICODE);
}


function is_json($string) {
	// php 5.3 or newer needed;
	json_decode($string);
	return (json_last_error() == JSON_ERROR_NONE);
} // done


function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
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


