<?php include($_SERVER['DOCUMENT_ROOT'] . '/function.php'); ?>
<!doctype html>
<html lang="ja-JP">
<head>
	<link rel="stylesheet" href="/css/megamenu.css">
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
	<link rel="stylesheet" href="/css/exvalidation.css">
	<link rel="stylesheet" href="/css/common.css">
	<meta charset="UTF-8">
    <meta name="robots" content="noindex" />
	<meta name="description" content="">
	<title>test</title>
</head>
<body class="<?php echo($body_class); ?>">
	<div id="wrapper">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>
	<div id="contents">
			<div class="inner">
				<h2>新規会員登録</h2>
				<div class="err">
					<h3>入力内容をご確認ください</h3>
					<p>氏名が入力されていません</p>
					<p>E-mailが入力されていません</p>
					<p>パスワードが入力されていません</p>
					<p>パスワードが一致しません</p>
					<p>生年月日が入力されていません</p>
					<p>性別が入力されていません</p>
				</div>
				<div class="formarea">
					<form action="confirm.php">
						<ul>
							<li><p class="question">氏名</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">E-mail</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">パスワード</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">パスワード（確認）</p><p class="answer"><input type="text"></p></li>
							<li><p class="kiyaku">※<a href="">利用規約</a>に同意の上、会員登録をお願いします。</p></li>
						</ul>
						
						<input type="button" value="登録する">
					</form>
				</div>
			</div>
	</div>
	<!-- /#contents -->
	<?php include '../footer.php'; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/jquery-accessibleMegaMenu.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/style.js"></script>
</body>
</html>