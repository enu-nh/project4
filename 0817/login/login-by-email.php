<?php
include_once("../include/config.php");
if(isset($_POST['email-login'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		header("Location: ".$_SERVER['HTTP_REFERER']);
		exit();
	}else{
		try{
			$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
			$stmt = $dbh->prepare("select * from user where email = :email and password = :password;");
			$params = array(
				":email"=>h($_POST['email']),
				":password"=>h($_POST['password'])
			);
			try{
				$stmt->execute($params);
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
}else{
	header("Location: /0817/");
	exit();
}
?>