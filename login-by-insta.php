<?php
include_once("./include/config.php");

if(empty($_GET['code'])){
	//認証前の準備
	$params = array(
			'client_id' => CLIENT_ID,
			'redirect_uri' => 'http://akinobu.sakura.ne.jp/0817/login-by-insta.php',
			'scope' => 'basic',//扱う情報の種類（基本的な）
			'response_type' => 'code'
	);
	$url = 'https://api.instagram.com/oauth/authorize/?'.http_build_query($params);
	//instagramへ飛ばす
	header('Location: '.$url);
	exit();
	//getされリダイレクトされる
}else{
	session_regenerate_id(true);
	//認証後の処理
	//user情報の取得
	$params = array(
		'client_id' => CLIENT_ID,
		'client_secret' => CLIENT_SECRET,
		'code' => $_GET['code'],
		'redirect_uri' => 'http://akinobu.sakura.ne.jp/0817/login-by-insta.php',
		'grant_type' => 'authorization_code'
	);
	$url = 'https://api.instagram.com/oauth/access_token';

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$res = curl_exec($curl);
	curl_close($curl);
	$json = json_decode($res);

	try{
		$dbh = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME,DB_USER,DB_PASSWORD);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
	$stmt = $dbh->prepare("select * from user where insta_id=:user_id limit 1");
	$stmt->execute(array(":user_id"=>$json->user->id));
	$user = $stmt->fetch();
	//もし新規ユーザなら格納
	if(empty($user)){
		$stmt = $dbh->prepare("insert into user(insta_id, insta_access_token, created, modified) values
		(:user_id, :access_token, now(), now());");
		$params = array(
			":user_id"=>$json->user->id,
			":access_token"=>$json->access_token
		);
		$stmt->execute($params);
		//挿入したデータを引っ張ってくる
		$stmt = $dbh->prepare("select * from users where id=:last_insert_id limit 1");
		$stmt->execute(array(":last_insert_id"=>$dbh->lastInsertId()));
		$user = $stmt->fetch();
	}
	//ログイン処理
	$_SESSION['user'] = $user;
	
	//indexに飛ばす
	header('Location: /0817/');
	exit();

}

?>