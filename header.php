<?php include 'function.php' ?>
<!doctype html>
<html lang="ja-JP">
<head>
	<link rel="stylesheet" href="<?php echo $home_url; ?>css/common.css">
	<meta charset="UTF-8">
	<meta name="description" content="">
	<title>test</title>
</head>
<body class="<?php echo($body_class); ?>">
	<div id="wrapper">
		<header id="common-header" class="cf">
			<div class="inner">
				<div id="logo">
					<a href="<?php echo $home_url; ?>">タイトル</a>
				</div>
				<div id="nav">
					<div id="gnav">
						<ul>
							<li><a href="">カテゴリ</a></li>
							<li><a href="">検索</a></li>
							<li><a href="<?php echo $home_url."/signup/index.php"; ?>">サインアップ</a></li>
							<li><a href="">ログイン</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php if($body_class == 'home'): ?>
			<div id="mainVisual">
				<div class="inner">
					<div class="fl">
						<h2>キャッチコピーエリア</h2>
						<p>○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。</p>
					</div>
					<div class="fr">
						<h2>新規ユーザ登録</h2>
						<a href="/signup/index.php">メールで登録</a>
						<a href="/signup/index.php">Instagramで登録</a>
					</div>
				</div>
			</div>
			<!-- #mainVisual -->
		<?php endif; ?>
		</header>