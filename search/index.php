<?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/function.php'); ?>
<!doctype html>
<html lang="ja-JP">

<head>
  <link rel="stylesheet" href="/css/megamenu.css">
  <link rel="stylesheet" href="/css/jquery-ui.min.css">
  <link rel="stylesheet" href="/css/exvalidation.css">
  <link rel="stylesheet" href="/css/common.css">
  <link rel="stylesheet" href="/css/layout.css">
  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />
  <meta name="description" content="">
  <title>test</title>
</head>

<body class="<?php echo($body_class); ?>">
  <div id="wrapper">
    <?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/header.php'); ?>
    <?php ////// 都道府県用配列 ////// 
$preflist=array( '0'=>'北海道', '1'=>'青森県', '2'=>'秋田県', '3'=>'山形県', '4'=>'岩手県','5'=>'宮城県', '6'=>'福島県', '7'=>'東京都', '8'=>'神奈川県', '9'=>'埼玉県','10'=>'千葉県', '11'=>'栃木県', '12'=>'茨城県', '13'=>'群馬県', '14'=>'愛知県','15'=>'岐阜県', '16'=>'静岡県', '17'=>'三重県', '18'=>'新潟県', '19'=>'山梨県','20'=>'長野県', '21'=>'石川県', '22'=>'富山県', '23'=>'福井県', '24'=>'大阪府','25'=>'兵庫県', '26'=>'京都府', '27'=>'滋賀県', '28'=>'奈良県', '29'=>'和歌山県','30'=>'岡山県', '31'=>'広島県', '32'=>'鳥取県', '33'=>'島根県', '34'=>'山口県','35'=>'香川県', '36'=>'徳島県', '37'=>'愛媛県', '38'=>'高知県', '39'=>'福岡県','40'=>'佐賀県', '41'=>'長崎県', '42'=>'熊本県', '43'=>'大分県', '43'=>'宮崎県','45'=>'鹿児島県', '46'=>'沖縄県' ); ?>
    <div id="contents">
      <div class="inner">
        <div id="main">
          <section class="section">
            <h1 class="h1-ttl01">コンテンツを探す</h1>
            <div class="search-form01">
              <form action="">
                <table class="table01">
                  <tbody>
                    <tr>
                      <th class="ttl">旅の目的</th>
                      <td class="input-area">
                        <div class="radiotype-01">
                          <input type="checkbox" name="tripType" value="家族旅行" id="tripType01">
                          <label for="tripType01">家族旅行</label>
                          <input type="checkbox" name="tripType" value="社員旅行" id="tripType02">
                          <label for="tripType02">社員旅行</label>
                          <input type="checkbox" name="tripType" value="卒業旅行" id="tripType03">
                          <label for="tripType03">卒業旅行</label>
                          <input type="checkbox" name="tripType" value="新婚旅行" id="tripType04">
                          <label for="tripType04">新婚旅行</label>
                          <input type="checkbox" name="tripType" value="女子旅" id="tripType05">
                          <label for="tripType05">女子旅</label>
                          <input type="checkbox" name="tripType" value="友人と" id="tripType06">
                          <label for="tripType06">友人と</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="ttl type1">地域を選択</th>
                      <td class="input-area">
                        <div class="checktype-01">
                          <?php //配列リストからoptionタグに展開。
$num=1 ; foreach($preflist as $key=>$value){ $num = $num+1; if($value == $_POST["pref_return"]){ echo "<label for='local".$num."'><input type='checkbox' name='local' id='local".$num."' value='$value'>".$value."</label>"; }else{ echo "<label for='local".$num."'><input type='checkbox' name='local' id='local".$num."' value='$value'>".$value."</label>"; } } ?>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="ttl">キーワード</th>
                      <td class="input-area">
                        <input type="text" class="input-type01">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
            <div class="post-num">36件の記事が見つかりました。</div>
            <div class="col3-type01">
              <ul>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
                <li>
                  <div class="thumb">
                    <a href="">
                      <img src="/images/img_posts_01.jpg" width="200" height="200" alt="">
                    </a>
                  </div>
                  <div class="ttl"><h3><a href="">タイトルタイトルタイトルタイトル</a></h3></div>
                  <div class="location"><a href="">京都</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="btngroup"><a href="#" class="btn07">もっと見る</a> 
            </div>
          </section>
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
          <section>
            <h2 class="h2-ttl03"><img src="/images/side_related_h001.gif" alt="関連するコンテンツ"></h2>
            <div class="related-box01">
              <div class="related-box01-item">
                <div class="img"><a href="#"><img src="/images/search_img01.gif" alt=""></a></div>
                <div class="txt">
                  <div class="ttl"><a href="#">2泊3日で京都旅行</a></div>
                  <div class="location"><a href="#">京都</a></div>
                </div>
              </div>
              <div class="related-box01-item">
                <div class="img"><a href="#"><img src="/images/search_img01.gif" alt=""></a></div>
                <div class="txt">
                  <div class="ttl"><a href="#">2泊3日で京都旅行</a></div>
                  <div class="location"><a href="#">京都</a></div>
                </div>
              </div>
              <div class="related-box01-item">
                <div class="img"><a href="#"><img src="/images/search_img01.gif" alt=""></a></div>
                <div class="txt">
                  <div class="ttl"><a href="#">2泊3日で京都旅行</a></div>
                  <div class="location"><a href="#">京都</a></div>
                </div>
              </div>
              <div class="related-box01-item">
                <div class="img"><a href="#"><img src="/images/search_img01.gif" alt=""></a></div>
                <div class="txt">
                  <div class="ttl"><a href="#">2泊3日で京都旅行</a></div>
                  <div class="location"><a href="#">京都</a></div>
                </div>
              </div>
              <div class="related-box01-item">
                <div class="img"><a href="#"><img src="/images/search_img01.gif" alt=""></a></div>
                <div class="txt">
                  <div class="ttl"><a href="#">2泊3日で京都旅行</a></div>
                  <div class="location"><a href="#">京都</a></div>
                </div>
              </div>
            </div>
          </section>
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