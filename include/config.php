<?php
//localhostとサーバの切り替えはデータベース設定を上下で切り替える
session_start(); //セッションスタート（ここでまとめてしまっていいのか？）
date_default_timezone_set('Asia/Tokyo'); //タイムゾーンを設定

define('SITE_URL', $_SERVER['DOCUMENT_ROOT'].'/0817'); //サイトURL

/************************データベース設定************************/
//define('DB_HOST', 'mysql464.db.sakura.ne.jp');
//define('DB_USER', 'akinobu');
//define('DB_PASSWORD', 'passwd123');
//define('DB_NAME', 'akinobu_instagram');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '02101221');
define('DB_NAME', 'instagram_test');
/******************************************************************/

/************************Instagram設定*****************************/
define('CLIENT_ID', '59c8fca46ae944718a924a792ec07027');
define('CLIENT_SECRET', '0afbfe8798ca4fe7a4de53a1e6f62448');
/*******************************************************************/

function h($str){ return htmlspecialchars($str); } //HTMLに出力するときにエスケープする関数

/************************bodyのclass振り分け処理***********************/
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
/*************************************************************************/
/********************************SQL文************************************
create database instagram_test;

create table user(
	id int not null auto_increment primary key,
	insta_id int(255),
	email varchar(255),
	password varchar(255),
	lastname varchar(255),
	firstname varchar(255),
	sex int(1),
	birthday date,
	insta_access_token varchar(255),
	created datetime,
	modified datetime
);

*************************************************************************/
?>