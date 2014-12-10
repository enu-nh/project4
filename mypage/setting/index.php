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
				<div id="main">
					<h1>会員情報の変更</h1>
					<section>
						<div class="thumb-area">
						</div>
						<form>
							<input type="file" name="ファイル呼び出し" size="30">
						</form>
						<div class="mysetting">
							<table>
								<tr>
									<th>名前</th>
									<td><input type="text"></td>	
								</tr>
								<tr>
									<th>生年月日</th>
									<td><input type="text"></td>
								</tr>
								<tr>
									<th>所在地</th>
									<td><input type="text"></td>
								</tr>
								<tr>
									<th>コメント</th>
									<td><textarea name="" id="" cols="30" rows="10"></textarea></td>
								</tr>
								<tr>
									<th>メールアドレス</th>
									<td>
										<input type="text">
										<p class="attention">現在のメールアドレス：<span>test@test.jp</span></p>
									</td>
								</tr>
								<tr>
									<th>パスワード</th>
									<td>
										<p class="ttl">現在のパスワード</p>
										<input type="text">
										<p class="ttl">新しいパスワード</p>
										<input type="text">
										<p class="attention">パスワードは英数字6文字以上にしてください</p>
										<p class="ttl">再度入力（確認）</p>
										<input type="text">
									</td>
								</tr>
							</table>
							<div class="confirm-btn">
								<a href="">更新</a>
							</div>
						</div>
					</section>
					<section>
						<h2>Instagramと連携</h2>
						<p>投稿するにはInstagramとの連携が必須になります。</p>
						<a href=""><img src="/images/btn-instagram.gif" width="208" height="60" alt="Instagramと連携"></a>			
					</section>
				</div>
				<div id="sub">
					<div class="user-area">
						<div class="user-head">
							<div class="txt">プロフィール</div>
							<div class="user-edit"><a href="/mypage/setting/index.php">編集</a></div>
						</div>
						<div class="user-info">
							<div class="user-img"><img src="/images/user-icon-default.png" width="60" height="" alt=""></div>
							<div class="user-name">Nagata Hiroaki</div>
							<div class="location">京都</div>
						</div>
						<div class="user-meta">
							<ul>
								<li>
									<a href="/mypage/follow/index.php">
										<p class="txt">フォロー</p>
										<p class="num">100</p>
									</a>
								</li>
								<li>
									<a href="/mypage/follow/index.php">
										<p class="txt">フォロワー</p>
										<p class="num">80</p>
									</a>
								</li>
								<li>
									<a href="/mypage/favorite/index.php">
										<p class="txt">お気に入り</p>
										<p class="num">6</p>
									</a>
								</li>
								<li>
									<a href="/mypage/album/index.php">
										<p class="txt">アルバム</p>
										<p class="num">8</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="sub-button">
						<a href="">新規投稿</a>
					</div>
					<div class="comment-history">
						<div class="ttl">あなたのコメント履歴</div>
						<ul>
							<li>
								<div class="txt"><a href="">私もそこに行ってみたいです。</a><span class="time">（9月14日）</span></div>
							</li>
							<li>
								<div class="txt"><a href="">そのお店は定休日はございますか。</a><span class="time">（9月14日）</span></div>
							</li>
							<li>
								<div class="txt"><a href="">近辺に住んでいる私の友人に聞いたところ、観光客は少なく穴場スポットであるようです。</a><span class="time">（9月14日）</span></div>
							</li>
						</ul>
						<div class="more">
							<a href="/mypage/comments/">もっと見る</a>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- /#contents -->
	<?php include '../../footer.php'; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/jquery-accessibleMegaMenu.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/style.js"></script>
</body>
</html>