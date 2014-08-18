<?php
include('../include/config.php');
if(isset($_POST['s']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['lastname']) || empty($_POST['firstname'])){
	header("Location: /0817/");
	exit();
}else{
	try{
		$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
		$stmt = $dbh->prepare("insert into akinobu_instagram.user
					(email, password, lastname, firstname, created, modified)
					values(:email, :password, :lastname, :firstname, now(), now());");
		$params = array(
			":email"=>h($_POST['email']),
			":password"=>h($_POST['password']),
			":lastname"=>h($_POST['lastname']),
			":firstname"=>h($_POST['firstname'])
		);
		try{
			$stmt->execute($params);
			mb_language("Ja");
			mb_internal_encoding("UTF-8");
			$mailto = $_POST['email'];
			$subject = "project4";
			$content = "これはテストメールです。心当たりのない場合はお手数ですが削除してください。\nhttp://akinobu.sakura.ne.jp/project4/";
			$mailfrom = "From: mofupuni@fol.hi-ho.ne.jp";
			mb_send_mail($mailto, $subject, $content, $mailfrom);
			$stmt = $dbh->prepare("select id from user where id = :last_insert_id limit 1");
			$stmt->execute(array(":last_insert_id"=>$dbh->lastInsertId()));
			$user = $stmt->fetch();
			$_SESSION['user'] = $user;
		}catch(Exception $e){
			echo $e->getMessage();
			exit();
		}
	}catch(PDOException $e){
		echo 'エラー';
		echo $e->getMessage();
		exit();
	}
	header("Location: /0817/");
	exit();
}
?>
