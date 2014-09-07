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
											<li><a href="/cities/index.php">北海道</a></li>
											<li><a href="/cities/index.php">青森</a></li>
											<li><a href="/cities/index.php">秋田</a></li>
											<li><a href="/cities/index.php">山形</a></li>
											<li><a href="/cities/index.php">岩手</a></li>
											<li><a href="/cities/index.php">宮城</a></li>
											<li><a href="/cities/index.php">福島</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>関東</h3>
										<ul>
											<li><a href="/cities/index.php">東京</a></li>
											<li><a href="/cities/index.php">神奈川</a></li>
											<li><a href="/cities/index.php">埼玉</a></li>
											<li><a href="/cities/index.php">千葉</a></li>
											<li><a href="/cities/index.php">栃木</a></li>
											<li><a href="/cities/index.php">茨城</a></li>
											<li><a href="/cities/index.php">群馬</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>中部</h3>
										<ul>
											<li><a href="/cities/index.php">愛知</a></li>
											<li><a href="/cities/index.php">岐阜</a></li>
											<li><a href="/cities/index.php">静岡</a></li>
											<li><a href="/cities/index.php">三重</a></li>
											<li><a href="/cities/index.php">新潟</a></li>
											<li><a href="/cities/index.php">山梨</a></li>
											<li><a href="/cities/index.php">長野</a></li>
											<li><a href="/cities/index.php">石川</a></li>
											<li><a href="/cities/index.php">富山</a></li>
											<li><a href="/cities/index.php">福井</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>関西</h3>
										<ul>
											<li><a href="/cities/index.php">大阪</a></li>
											<li><a href="/cities/index.php">兵庫</a></li>
											<li><a href="/cities/index.php">京都</a></li>
											<li><a href="/cities/index.php">滋賀</a></li>
											<li><a href="/cities/index.php">奈良</a></li>
											<li><a href="/cities/index.php">和歌山</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>中国・四国</h3>
										<ul>
											<li><a href="/cities/index.php">岡山</a></li>
											<li><a href="/cities/index.php">広島</a></li>
											<li><a href="/cities/index.php">鳥取</a></li>
											<li><a href="/cities/index.php">島根</a></li>
											<li><a href="/cities/index.php">山口</a></li>
											<li><a href="/cities/index.php">香川</a></li>
											<li><a href="/cities/index.php">徳島</a></li>
											<li><a href="/cities/index.php">愛媛</a></li>
											<li><a href="/cities/index.php">高知</a></li>
										</ul>	
									</div>
									<div class="cities-list sub-nav-group">
										<h3>九州・沖縄</h3>
										<ul>
											<li><a href="/cities/index.php">福岡</a></li>
											<li><a href="/cities/index.php">佐賀</a></li>
											<li><a href="/cities/index.php">長崎</a></li>
											<li><a href="/cities/index.php">熊本</a></li>
											<li><a href="/cities/index.php">大分</a></li>
											<li><a href="/cities/index.php">宮崎</a></li>
											<li><a href="/cities/index.php">鹿児島</a></li>
											<li><a href="/cities/index.php">沖縄</a></li>
										</ul>	
									</div>
								</div>
							</li>
							<li class="nav-item"><a href="/search/index.php">検索</a></li>
							<?php if($body_class == 'home'): ?>
							<li class="nav-item"><a href="<?php echo $home_url."/signup/index.php"; ?>">サインアップ</a></li>
							<?php endif; ?>
							<li class="nav-item">
								<a href="">ログイン</a>
								<div class="cities-menu sub-nav">
									<div class="cities-list sub-nav-group">
										<h3>メールアドレス</h3>
										<p><input type="text" value="" ></p>
										<h3>パスワード</h3>
										<p><input type="text" value="" ></p>
									</div>
									<div class="cities-list sub-nav-group">
										<p><input type="submit"></p>
									</div>
								</div>
							</li>
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