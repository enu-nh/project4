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
				<div class="formarea">
					<form action="complete.php">
						<ul>
							<li><p class="question">氏名</p><p class="answer">入力した内容</p></li>
							<li><p class="question">ニックネーム</p><p class="answer">入力した内容</p></li>
							<li><p class="question">E-mail</p><p class="answer">入力した内容</p></li>
							<li><p class="question">パスワード</p><p class="answer">入力した内容</p></li>
							<li><p class="question">パスワード（確認）</p><p class="answer">入力した内容</p></li>
							<li><p class="confirm">入力いただいた情報に問題がなければ登録を完了してください</p></li>
						</ul>
						
						<p class="fl"><a href="index.php" class="return">修正</a></p>
						<p class="fl"><input type="submit" value="完了"></p>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=212800035595968&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>