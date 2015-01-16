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
				<p style="text-align: center;">*は入力必須です</p>
				<div class="formarea">
					<form id="signup-form" action="confirm.php">
						<ul class="signup-form-box">
							<li><p class="question">氏名<span class="req">*</span></p><p class="answer"><span class="half first"><span class="txt">性</span><input type="text" id="last_name" name="last_name"></span><span class="half"><span class="txt">名</span><input type="text" id="first_name" name="first_name"></span><span class="attention">半角英数字のみ使用出来ます</span></p></li>
							<li><p class="question">ニックネーム</p><ul class="answer"><li><input type="text" id="nickname" name="nickname"></li><li class="attention">半角英数字のみ使用出来ます</li><li class="attention">ニックネームを入力しない場合、画面には氏名が表示されます</li></ul></li>
							<li><p class="question">E-mail<span class="req">*</span></p><p class="answer"><input type="text" id="email" name="email"></p></li>
							<li><p class="question">パスワード<span class="req">*</span></p><p class="answer"><input type="password" id="password" name="password"><span class="attention">半角英数字8〜16文字で入力してください</span></p></li>
							<li><p class="question">パスワード再入力<span class="req">*</span></p><p class="answer"><input type="password" id="repass" name="repass"></p></li>
							<li><p class="kiyaku">※<a href="">利用規約</a>に同意の上、会員登録をお願いします。</p></li>
						</ul>
						<input type="submit" value="登録する">
					</form>
				</div>
			</div>
	</div>
	<!-- /#contents -->
	<?php include '../footer.php'; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/jquery-accessibleMegaMenu.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/exvalidation.js"></script>
	<script src="/js/exchecker-ja.js"></script>
	<script src="/js/validation.js"></script>
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