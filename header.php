<!doctype html>
<html lang="ja-JP">
<head>
	<link rel="stylesheet" href="http://localhost/project4/css/common.css">
	<meta charset="UTF-8">
	<meta name="description" content="">
	<title>test</title>
</head>
<?php include 'function.php' ?>
<body class="<?php print_r($body_class); ?>">
	<div id="wrapper">
		<header id="common-header" class="cf">
			<div class="inner">
				<div id="logo">
					<a href="">タイトル</a>
				</div>
				<div id="nav">
					<div id="gnav">
						<ul>
							<li><a href="">カテゴリ</a></li>
							<li><a href="">検索</a></li>
							<li><a href="">サインアップ</a></li>
							<li><a href="">ログイン</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php if($url == 'http://localhost/project4/index.php'): ?>
			<div id="mainVisual">
				<div class="inner">
					<div class="fl">
						<h2>キャッチコピーエリア</h2>
						<p>○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。</p>
					</div>
					<div class="fr">
						<h2>新規ユーザ登録</h2>
						<a href="">メールで登録</a>
						<a href="">Instagramで登録</a>
					</div>
				</div>
			</div>
			<!-- #mainVisual -->
		<?php endif; ?>
		</header>