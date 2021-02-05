
// security -> check ip black-list :
$ip = $_SERVER['REMOTE_ADDR'];
if ($_SERVER['HTTP_HOST'] == 'localhost') { $ip = '127.0.0.1'; }
$ip = preg_replace("/[^0-9.]/", "", $ip);
if(strlen($ip) < 5) exit('ip is not valid');
if (file_exists('../ip_blacklist/' . $ip . '.txt')) {
	exit('your ip has been blocked for unusual activity');
}

//==============================

// write your redirects here :

//==============================

require '../app/vendor/autoload.php';
include '../app/boot.php';
