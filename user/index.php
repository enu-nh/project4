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
          <div class="user-info type-user">
            <div class="user-img"><img src="/images/user-icon-default.png" width="60" height="" alt=""></div>
            <div class="txt">
              <div class="user-name">Mori Akinobu<span>&nbsp;さんのページ</span></div>
              <div class="location">京都</div>
            </div>
          </div>
					<div class="tab-contents">
						<div class="title-tab">
							<ul>
								<li><a href="#tabs-1">アクティビティ</a></li>
								<li><a href="#tabs-2">フォロー</a></li>
								<li><a href="#tabs-3">フォロワー</a></li>
								<li><a href="#tabs-4">お気に入り</a></li>
								<li><a href="#tabs-5">アルバム</a></li>
							</ul>
						</div>
						<div id="tabs-1">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/user/user-activity.php'); ?>
						</div>
						<div id="tabs-2">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/user/user-follow.php'); ?>
						</div>
						<div id="tabs-3">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/user/user-follower.php'); ?>
						</div>
						<div id="tabs-4">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/user/user-favorite.php'); ?>
						</div>
						<div id="tabs-5">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/user/user-album.php'); ?>
						</div>
					</div>
				</div>
				<div id="sub">
					<div class="user-area">
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
									<a href="/mypage/follow/index.php?tab=1">
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