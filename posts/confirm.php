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
        <form action="">
          <div class="txt-area">
            <h1>投稿内容を確認</h1>
            <h2>タイトル</h2>
            <p class="post-title">二泊三日で京都観光</p>
            <h2>地域を選択</h2>
            <div class="local-area"> 京都府 </div>
          </div>
          <h2>旅の動画</h2>
          <div class="thumb-area"> 選択した動画をここに表示 </div>
              <div id="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d834187.9442673218!2d135.45388895000002!3d35.24265369999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5fff7420f91f1b61%3A0x590a7bc238b19538!2z5Lqs6YO95bqc!5e0!3m2!1sja!2sjp!4v1407832057924" width="300" height="300" frameborder="0" style="border:0"></iframe>
              </div>
          <article id="main-contents">
            <section class="day1">
              <h1>１日目</h1>
              <div class="time">
                <p>8<span>時</span>30<span>分</span></p>
              </div>
              <p class="event-title">京都駅に到着</p>
              <ul class="img-select">
                <li>選択した動画像</li>
                <li>選択した動画像</li>
              </ul>
              <div class="comments">京都駅に到着。この日は快晴。駅を抜けるとすぐ目の前に京都タワー！<br>
                京都にきたって実感しますね。<br>
                水族館へ向かうバスが出ていますが、すごい行列。たいした距離でもないので徒歩で向かいます。</div>
              <div class="area-info">京都府京都市下京区</div>
            </section>
          </article>
          <nav id="addpost-support"> <a class="post-amend" href="add.php">修正する</a> <a class="post-complete" href="view.php">完了する</a> </nav>
        </form>
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
              <li> <a href="/mypage/follow/index.php">
                <p class="txt">フォロー</p>
                <p class="num">100</p>
                </a> </li>
              <li> <a href="/mypage/follow/index.php?tab=1">
                <p class="txt">フォロワー</p>
                <p class="num">80</p>
                </a> </li>
              <li> <a href="/mypage/favorite/index.php">
                <p class="txt">お気に入り</p>
                <p class="num">6</p>
                </a> </li>
              <li> <a href="/mypage/album/index.php">
                <p class="txt">アルバム</p>
                <p class="num">8</p>
                </a> </li>
            </ul>
          </div>
        </div>
        <div class="sub-button"> <a href="">新規投稿</a> </div>
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
          <div class="more"> <a href="/mypage/comments/">もっと見る</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#contents -->
  <div id="whitelayer">
    <ul>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
      <li><img src="http://lorempixel.com/160/160" alt=""></li>
    </ul>
  </div>
  <div id="blacklayer"></div>
  <?php include '../footer.php'; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="/js/jquery-accessibleMegaMenu.js"></script> 
<script src="/js/jquery-ui.min.js"></script> 
<script src="/js/style.js"></script>
</body>
</html>