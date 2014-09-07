<?php include 'function.php' ?>
<!doctype html>
<html lang="ja-JP">
<head>
	<link rel="stylesheet" href="<?php echo $home_url; ?>css/common.css">
	<link rel="stylesheet" href="<?php echo $home_url; ?>css/megamenu.css">
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
						<ul class="nav-menu">
							<li class="nav-item">
								<a href="">地域</a>
								<div class="cities-menu sub-nav">
									<div class="cities-list sub-nav-group">
										<h3>北海道・東北</h3>
										<ul>
											<li><a href="">北海道</a></li>
											<li><a href="">青森</a></li>
											<li><a href="">秋田</a></li>
											<li><a href="">山形</a></li>
											<li><a href="">岩手</a></li>
											<li><a href="">宮城</a></li>
											<li><a href="">福島</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>関東</h3>
										<ul>
											<li><a href="">東京</a></li>
											<li><a href="">神奈川</a></li>
											<li><a href="">埼玉</a></li>
											<li><a href="">千葉</a></li>
											<li><a href="">栃木</a></li>
											<li><a href="">茨城</a></li>
											<li><a href="">群馬</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>中部</h3>
										<ul>
											<li><a href="">愛知</a></li>
											<li><a href="">岐阜</a></li>
											<li><a href="">静岡</a></li>
											<li><a href="">三重</a></li>
											<li><a href="">新潟</a></li>
											<li><a href="">山梨</a></li>
											<li><a href="">長野</a></li>
											<li><a href="">石川</a></li>
											<li><a href="">富山</a></li>
											<li><a href="">福井</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>関西</h3>
										<ul>
											<li><a href="">大阪</a></li>
											<li><a href="">兵庫</a></li>
											<li><a href="">京都</a></li>
											<li><a href="">滋賀</a></li>
											<li><a href="">奈良</a></li>
											<li><a href="">和歌山</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>中国・四国</h3>
										<ul>
											<li><a href="">岡山</a></li>
											<li><a href="">広島</a></li>
											<li><a href="">鳥取</a></li>
											<li><a href="">島根</a></li>
											<li><a href="">山口</a></li>
											<li><a href="">香川</a></li>
											<li><a href="">徳島</a></li>
											<li><a href="">愛媛</a></li>
											<li><a href="">高知</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>九州・沖縄</h3>
										<ul>
											<li><a href="">福岡</a></li>
											<li><a href="">佐賀</a></li>
											<li><a href="">長崎</a></li>
											<li><a href="">熊本</a></li>
											<li><a href="">大分</a></li>
											<li><a href="">宮崎</a></li>
											<li><a href="">鹿児島</a></li>
											<li><a href="">沖縄</a></li>
										</ul>	
									</div>
								</div>
							</li>
							<li class="nav-item"><a href="">検索</a></li>
							<li class="nav-item"><a href="<?php echo $home_url."/signup/index.php"; ?>">サインアップ</a></li>
							<li class="nav-item"><a href="">ログイン</a></li>
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