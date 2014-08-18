<?php
session_start();
date_default_timezone_set('Asia/Tokyo');

define('SITE_URL', 'www.akinobu.sakura.ne.jp/0817/');

define('DB_HOST', 'mysql464.db.sakura.ne.jp');
define('DB_USER', 'akinobu');
define('DB_PASSWORD', 'passwd123');
define('DB_NAME', 'akinobu_instagram');

define('CLIENT_ID', '59c8fca46ae944718a924a792ec07027');
define('CLIENT_SECRET', '0afbfe8798ca4fe7a4de53a1e6f62448');

function h($str){ return htmlspecialchars($str); }

$url = SITE_URL;
$script_name = basename($_SERVER['SCRIPT_NAME']);
//"http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
	switch($script_name){
		case 'index.php':
			$body_class = 'home';
			break;
		case 'signup.php':
			$body_class = 'signup';
			break;
		case 'confirm.php':
			$body_class = 'signup';
			break;
		case 'complete.php':
			$body_class = 'signup';
			break;
	}
?>