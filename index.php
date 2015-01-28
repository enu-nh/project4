<?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/function.php'); ?>
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
    <div id="main-visual">
      <section class="inner">
        <h1 class="logo"><img src="/images/txt_logo.png" alt="Trippost"></h1>
        <h2><img src="/images/txt_index_01.png" alt="旅の思い出共有サービス"></h2>
        <p class="txt-set01">TRIPPOSTは旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。TRIPPOST旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。TRIPPOSTは旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。</p>
    <div class="box-entry01">
      <a href="/signup/index.php" class="btn01">メールで登録</a>
      <a href="http://trip-post.com/" class="btn01">Instagramで登録／ログイン</a>
    </div>
    <p><a href="/login/" class="link-set01">既に登録されている方はこちら</a></p>
    </section>
  </div>
  <!-- #mainVisual -->
  <div id="contents">
    <div class="top-module01">
      <section class="inner">
        <h2 class="h2-ttl01"><img src="/images/h_h2ttl_01.gif" alt="記事を探す"></h2>
        <div class="search-module01">
          <section class="search-module01-target">
            <h3 class="h3-ttl01">旅の目的から探す</h3>
            <div class="box-inputarea01">
              <input type="checkbox" value="家族旅行" name="******1" id="a******1"><label for="a******1">家族旅行</label><br>
              <input type="checkbox" value="社員旅行" name="******1" id="a******2"><label for="a******2">社員旅行</label><br>
              <input type="checkbox" value="卒業旅行" name="******1" id="a******3"><label for="a******3">卒業旅行</label><br>
              <input type="checkbox" value="新婚旅行" name="******1" id="a******4"><label for="a******4">新婚旅行</label><br>
              <input type="checkbox" value="女子旅" name="******1" id="a******5"><label for="a******5">女子旅</label><br>
              <input type="checkbox" value="友人と" name="******1" id="a******6"><label for="a******6">友人と</label><br>
              <input type="checkbox" value="一人旅" name="******1" id="a******7"><label for="a******7">一人旅</label>
            </div>
          </section>
          <section class="search-module01-local">
            <h3 class="h3-ttl01">地域から探す</h3>
            <div class="box-inputarea01">
              <input type="checkbox" value="1" name="******2" id="b******1"><label for="b******1">北海道</label>
              <input type="checkbox" value="2" name="******2" id="b******2"><label for="b******2">青森県</label>
              <input type="checkbox" value="3" name="******2" id="b******3"><label for="b******3">秋田県</label>
              <input type="checkbox" value="4" name="******2" id="b******4"><label for="b******4">山形県</label>
              <input type="checkbox" value="5" name="******2" id="b******5"><label for="b******5">岩手県</label>
              <input type="checkbox" value="6" name="******2" id="b******6"><label for="b******6">宮城県</label>
              <input type="checkbox" value="7" name="******2" id="b******7"><label for="b******7">福島県</label>
              <input type="checkbox" value="8" name="******2" id="b******8"><label for="b******8">東京都</label>
              <input type="checkbox" value="9" name="******2" id="b******9"><label for="b******9">神奈川県</label>
              <input type="checkbox" value="10" name="******2" id="b*****10"><label for="b*****10">埼玉県</label>
              <input type="checkbox" value="11" name="******2" id="b*****11"><label for="b*****11">千葉県</label>
              <input type="checkbox" value="12" name="******2" id="b*****12"><label for="b*****12">栃木県</label>
              <input type="checkbox" value="13" name="******2" id="b*****13"><label for="b*****13">茨城県</label>
              <input type="checkbox" value="14" name="******2" id="b*****14"><label for="b*****14">群馬県</label>
              <input type="checkbox" value="15" name="******2" id="b*****15"><label for="b*****15">愛知県</label>
              <input type="checkbox" value="16" name="******2" id="b*****16"><label for="b*****16">岐阜県</label>
              <input type="checkbox" value="17" name="******2" id="b*****17"><label for="b*****17">静岡県</label>
              <input type="checkbox" value="18" name="******2" id="b*****18"><label for="b*****18">三重県</label>
              <input type="checkbox" value="19" name="******2" id="b*****19"><label for="b*****19">新潟県</label>
              <input type="checkbox" value="20" name="******2" id="b*****20"><label for="b*****20">山梨県</label>
              <input type="checkbox" value="21" name="******2" id="b*****21"><label for="b*****21">長野県</label>
              <input type="checkbox" value="22" name="******2" id="b*****22"><label for="b*****22">石川県</label>
              <input type="checkbox" value="23" name="******2" id="b*****23"><label for="b*****23">福井県</label>
              <input type="checkbox" value="24" name="******2" id="b*****24"><label for="b*****24">大阪府</label>
              <input type="checkbox" value="25" name="******2" id="b*****25"><label for="b*****25">兵庫県</label>
              <input type="checkbox" value="26" name="******2" id="b*****26"><label for="b*****26">京都府</label>
              <input type="checkbox" value="27" name="******2" id="b*****27"><label for="b*****27">滋賀県</label>
              <input type="checkbox" value="28" name="******2" id="b*****28"><label for="b*****28">奈良県</label>
              <input type="checkbox" value="29" name="******2" id="b*****29"><label for="b*****29">和歌山県</label>
              <input type="checkbox" value="30" name="******2" id="b*****30"><label for="b*****30">岡山県</label>
              <input type="checkbox" value="31" name="******2" id="b*****31"><label for="b*****31">広島県</label>
              <input type="checkbox" value="32" name="******2" id="b*****32"><label for="b*****32">鳥取県</label>
              <input type="checkbox" value="33" name="******2" id="b*****33"><label for="b*****33">島根県</label>
              <input type="checkbox" value="34" name="******2" id="b*****34"><label for="b*****34">山口県</label>
              <input type="checkbox" value="35" name="******2" id="b*****35"><label for="b*****35">香川県</label>
              <input type="checkbox" value="36" name="******2" id="b*****36"><label for="b*****36">徳島県</label>
              <input type="checkbox" value="37" name="******2" id="b*****37"><label for="b*****37">愛媛県</label>
              <input type="checkbox" value="38" name="******2" id="b*****38"><label for="b*****38">高知県</label>
              <input type="checkbox" value="39" name="******2" id="b*****39"><label for="b*****39">福岡県</label>
              <input type="checkbox" value="40" name="******2" id="b*****40"><label for="b*****40">佐賀県</label>
              <input type="checkbox" value="41" name="******2" id="b*****41"><label for="b*****41">長崎県</label>
              <input type="checkbox" value="42" name="******2" id="b*****42"><label for="b*****42">熊本県</label>
              <input type="checkbox" value="43" name="******2" id="b*****43"><label for="b*****43">宮崎県</label>
              <input type="checkbox" value="44" name="******2" id="b*****44"><label for="b*****44">鹿児島県</label>
              <input type="checkbox" value="45" name="******2" id="b*****45"><label for="b*****45">沖縄県</label>
            </div>
          </section>
          <section class="search-module01-key">
              <h3 class="h3-ttl01">キーワードから探す</h3>
              <input type="text">
          </section>
          <div class="search-module01-start">
            <p><span>88</span>件のコンテンツがヒットしました</p>
            <div class="btn02"><a href="/search/">検索結果を表示</a></div>
          </div>
        </div>
      </section>
    </div>
    <!--top-module01 end-->
    <div class="top-module02">
      <section class="inner">
        <h2 class="h2-ttl01"><img src="/images/h_h2ttl_02.gif" alt="人気の記事"></h2>
        <div class="rank-module01">
          <div class="rank-module01-item">
            <a href="#" class="link-box">
              <div class="img"><img src="/images/img_posts_01.jpg" alt=""></div>
              <div class="txt">
                <h3 class="ttl">ダミーテキストダミーテキストダミー…</h3>
                <p class="local">京都</p>
              </div>
              <div class="overlay rank1"><img src="/images/bg_rank1.png" alt=""></div>
            </a>
          </div>
          <div class="rank-module01-item">
            <a href="#" class="link-box">
              <div class="img"><img src="/images/img_posts_01.jpg" alt=""></div>
              <div class="txt">
                <h3 class="ttl">ダミーテキストダミーテキストダミー…</h3>
                <p class="local">京都</p>
              </div>
              <div class="overlay rank2"><img src="/images/bg_rank2.png" alt=""></div>
            </a>
          </div>
          <div class="rank-module01-item">
            <a href="#" class="link-box">
              <div class="img"><img src="/images/img_posts_01.jpg" alt=""></div>
              <div class="txt">
                <h3 class="ttl">ダミーテキストダミーテキストダミー…</h3>
                <p class="local">京都</p>
              </div>
              <div class="overlay rank3"><img src="/images/bg_rank3.png" alt=""></div>
            </a>
          </div>
        </div>
      </section>
    </div>
    <section class="postModule01 typeTop">
      <div class="inner">
        <h2 class="h2-ttl01"><img src="/images/h_h2ttl_03.gif" alt="新着記事一覧"></h2>
        <ul class="col4-type01 cf">
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテ</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
          <li>
            <div class="thumb">
              <a href="#">
                <img src="/images/img_posts_02.jpg" alt="">
              </a>
            </div>
            <div class="ttl"><h3><a href="#">タイトルタイトルタイトルタイトル</a></h3></div>
            <div class="location"><a href="">京都</a></div>
          </li>
        </ul>
        <div class="btn03">
          <a href="#">もっと見る</a>
        </div>
      </div>
    </section>
    <!--postModule01 end-->
  </div>
  <!-- /#contents -->
  <?php include 'footer.php'; ?>
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