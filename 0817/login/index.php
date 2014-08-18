<?php include(dirname(__FILE__)."/../include/config.php"); ?>
<!doctype html>
<html lang="ja-JP">
<head>
	<link rel="stylesheet" href="../css/common.css">
	<meta charset="UTF-8">
	<meta name="description" content="">
	<title>test</title>
</head>
<body class="<?php echo $body_class; ?>">
	<?php include('../include/header.php'); ?>
	<div>
		<form action="login-by-email.php" method="post">
			E-mail<input type="text" name="email">
			パスワード<input type="password" name="password">
			<input type="submit" name="email-login" value="ログイン">
		</form>
	</div>
	<?php include('../include/footer.php'); ?>
</body>
</html>