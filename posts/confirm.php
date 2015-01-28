<?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/function.php'); ?>
<!doctype html>
<html lang="ja-JP">

<head>
  <link rel="stylesheet" href="/css/megamenu.css">
  <link rel="stylesheet" href="/css/jquery-ui.min.css">
  <link rel="stylesheet" href="/css/exvalidation.css">
  <link rel="stylesheet" href="/css/common.css">
  <link rel="stylesheet" href="/css/layout.css">
  <link rel="stylesheet" href="/js/themes/default.css">
  <link rel="stylesheet" href="/js/themes/default.date.css">
  <link rel="stylesheet" href="/js/themes/default.time.css">
  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />
  <meta name="description" content="">
  <title>test</title>
</head>

<body class="<?php echo($body_class); ?>">
  <div id="wrapper">
    <?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/header.php'); ?>
    <?php 
////// 都道府県用配列 ////// 
$preflist=array( '0'=>'北海道', '1'=>'青森県', '2'=>'秋田県', '3'=>'山形県', '4'=>'岩手県','5'=>'宮城県', '6'=>'福島県', '7'=>'東京都', '8'=>'神奈川県', '9'=>'埼玉県','10'=>'千葉県', '11'=>'栃木県', '12'=>'茨城県', '13'=>'群馬県', '14'=>'愛知県','15'=>'岐阜県', '16'=>'静岡県', '17'=>'三重県', '18'=>'新潟県', '19'=>'山梨県','20'=>'長野県', '21'=>'石川県', '22'=>'富山県', '23'=>'福井県', '24'=>'大阪府','25'=>'兵庫県', '26'=>'京都府', '27'=>'滋賀県', '28'=>'奈良県', '29'=>'和歌山県','30'=>'岡山県', '31'=>'広島県', '32'=>'鳥取県', '33'=>'島根県', '34'=>'山口県','35'=>'香川県', '36'=>'徳島県', '37'=>'愛媛県', '38'=>'高知県', '39'=>'福岡県','40'=>'佐賀県', '41'=>'長崎県', '42'=>'熊本県', '43'=>'大分県', '43'=>'宮崎県','45'=>'鹿児島県', '46'=>'沖縄県' );
?>
    <div id="contents">
      <div class="inner">
        <div id="main">
          <form id="post-add-form" action="confirm.php">
            <section class="section">
              <h1 class="h1-ttl01">コンテンツを確認する</h1>
              <p class="txt-set03">コンテンツは下記のレイアウトで表示されます。<br>
                問題が無ければ、記事の最後にある「完了」ボタンから投稿を完了してください。</p>
              <h2 class="h1-ttl01">1泊2日で関西旅行</h2>
              <div class="post-module03">
                <div class="img"><img src="/images/post_view_img01.jpg" alt=""></div>
                <div class="txt">
                  <div class="post-module03-item">
                    <div class="ttl">出発日</div>
                    <div class="detail">2014年12月2日</div>
                  </div>
                  <div class="post-module03-item">
                    <div class="ttl">旅の目的</div>
                    <div class="detail">家族旅行</div>
                  </div>
                  <div class="post-module03-item">
                    <div class="ttl">立ち寄った都道府県</div>
                    <div class="detail">京都府,滋賀県,奈良県,大阪府,兵庫県</div>
                  </div>
                </div>
              </div>
            </section>
            <div class="section event-area">
              <div class="post-module04">
                <section class="day1 post-module04-item">
                  <h2 class="bg01 h2-ttl02">１日目</h2>
                  <div class="post-module04-event">
                    <div class="time">8時30分</div>
                    <div class="post-module04-eventitem">
                      <h3 class="h3-ttl01">京都駅に到着</h3>
                      <ul class="img-list">
                        <li><a href="#" class="null"><img src="/images/post_view_img01.jpg" width="300" height="300" alt=""></a></li>
                        <li><a href="#" class="null"><img src="/images/post_view_img01.jpg" width="300" height="300" alt=""></a></li>
                      </ul>
                      <div class="comment txt-set01">京都駅に到着。この日は快晴。駅を抜けるとすぐ目の前に京都タワー！<br>
                        京都にきたって実感しますね。<br>
                        水族館へ向かうバスが出ていますが、すごい行列。たいした距離でもないので徒歩で向かいます。</div>
                      <div class="spot">
                        <div class="btn-map"><img src="/images/btn_map_open.gif" alt="地図で見る"></div>
                        <div class="spot-name">ここにスポット名を出力</div>
                        <div class="maparea">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.849192846663!2d135.758466!3d34.985442000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108ae918b02ef%3A0xb61a446e74a21c08!2z5Lqs6YO96aeF!5e0!3m2!1sja!2sjp!4v1422413059740" width="618" height="618" frameborder="0" style="border:0"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="post-module04-event">
                    <div class="time">8時30分</div>
                    <div class="post-module04-eventitem">
                      <h3 class="h3-ttl01">京都駅に到着</h3>
                      <ul class="img-list">
                        <li><a href="#" class="null"><img src="/images/post_view_img01.jpg" width="300" height="300" alt=""></a></li>
                        <li class="txt-set01">京都駅に到着。この日は快晴。駅を抜けるとすぐ目の前に京都タワー！<br>
                          京都にきたって実感しますね。<br>
                          水族館へ向かうバスが出ていますが、すごい行列。たいした距離でもないので徒歩で向かいます。</li>
                      </ul>
                      <div class="spot">
                        <div class="btn-map"><img src="/images/btn_map_open.gif" alt="地図で見る"></div>
                        <div class="spot-name">ここにスポット名を出力</div>
                        <div class="maparea">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.849192846663!2d135.758466!3d34.985442000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108ae918b02ef%3A0xb61a446e74a21c08!2z5Lqs6YO96aeF!5e0!3m2!1sja!2sjp!4v1422413059740" width="618" height="618" frameborder="0" style="border:0"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="btngroup">
                    <a href="#" class="btn07">内容修正</a>
                    <input class="btn07" type="submit" value="登録完了">
                  </div>
                </section>
              </div>
            </div>
          </form>
        </div>
        <div id="sub">
          <div class="user-area">
            <div class="user-info">
              <div class="user-img">
                <img src="/images/user-icon-default.png" width="36" height="" alt="">
              </div>
              <div class="txt">
                <div class="user-name">Nagata Hiroaki</div>
                <div class="location"><a href="#">京都</a>
                </div>
              </div>
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
        </div>
      </div>
    </div>
    <!-- /#contents -->
    <?php include '../footer.php'; ?>
    <div id="blacklayer"></div>
    <div id="whitelayer">
      <ul>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
        <li>
          <img src="/images/img_posts_01.jpg" width="160" height="160" alt="">
        </li>
      </ul>
      <div class="close"><a href="#">閉じる</a></div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/jquery-accessibleMegaMenu.js"></script>
    <script src="/js/picker.js"></script>
    <script src="/js/picker.date.js"></script>
    <script src="/js/picker.time.js"></script>
    <script src="/js/lang-ja.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/exvalidation.js"></script>
    <script src="/js/post-validation.js"></script>
    <script src="/js/exchecker-ja.js"></script>
    <script src="/js/validation.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
    <script src="/js/style.js"></script>
    <div id="fb-root"></div>
    <script>
      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=212800035595968&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>