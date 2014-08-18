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
	<div id="contents">
			<div class="inner">
				<h2>新規会員登録</h2>
				<!--<div class="err">
					<h3>入力内容をご確認ください</h3>
					<p>氏名が入力されていません</p>
					<p>E-mailが入力されていません</p>
					<p>パスワードが入力されていません</p>
					<p>パスワードが一致しません</p>
					<p>生年月日が入力されていません</p>
					<p>性別が入力されていません</p>
				</div>-->
				<div class="formarea">
					<form action="./regist-by-email.php" method="post">
						<ul>
							<li><p class="question">姓</p><p class="answer"><input name="lastname" type="text"></p></li>
							<li><p class="question">名</p><p class="answer"><input name="firstname" type="text"></p></li>
							<li><p class="question">E-mail</p><p class="answer"><input name="email" type="text"></p></li>
							<li><p class="question">パスワード</p><p class="answer"><input name="password" type="password"></p></li>
							<!--<li><p class="question">パスワード（確認）</p><p class="answer"><input type="text"></p></li>-->
							<!--<li><p class="question">生年月日</p><p class="answer"><input type="text"></p></li>-->
							<!--<li><p class="question">性別</p><p class="answer"><input type="radio" name="sex" value="男性" id="signup_men"><label for="signup_men">男性</label><input type="radio" name="sex" value="女性" id="signup_women"><label for="signup_women">女性</label></p></li>-->
							<li><p class="kiyaku">※<a href="../privacy/">利用規約</a>に同意の上、会員登録をお願いします。</p></li>
						</ul>
						
						<input type="submit" name="s" value="登録する"><!--submitではなくbuttonにしてJSでsubmit-->
					</form>
				</div>
			</div>
	</div>
	<footer id="common-footer">
		<div class="inner">
			<div id="sitemap">
				<ul>
					<li><a href="">トップ</a></li>
					<li><a href="">カテゴリ</a></li>
					<li><a href="">検索</a></li>
					<li><a href="">プライバシーポリシー</a></li>
					<li><a href="">ヘルプ</a></li>
					<li><a href="">サインアップ</a></li>
					<li><a href="">ログイン</a></li>
					<li><a href="">Twitter</a></li>
					<li><a href="">Facebook</a></li>
				</ul>
			</div>
			<p id="copy">
				<small>&copy;Service inc.</small>
			</p>
		</div>
	</footer>
	<!-- /#common-footer -->
</body>
</html>