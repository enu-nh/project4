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
              <h1 class="h1-ttl01">コンテンツを投稿</h1>
              <p class="txt-set02"><span class="req">※</span>印は入力必須項目になります。</p>
              <table class="table01">
                <tbody>
                  <tr>
                    <th>タイトル<span class="req">※</span>
                    </th>
                    <td>
                      <input type="text" id="tripTitle" class="chkrequired chkmin8 chkmax32 input-type01">
                    </td>
                  </tr>
                  <tr>
                    <th>出発日<span class="req">※</span>
                    </th>
                    <td>
                      <input type="text" id="tripDeparture" class="chkrequired chkmin8 chkmax32 input-type01">
                    </td>
                  </tr>
                  <tr class="type01">
                    <th>旅の目的<span class="req">※</span>
                    </th>
                    <td>
                      <div class="radiotype-01">
                        <input type="radio" name="tripType" value="家族旅行" id="tripType01">
                        <label for="tripType01">家族旅行</label>
                        <input type="radio" name="tripType" value="社員旅行" id="tripType02">
                        <label for="tripType02">社員旅行</label>
                        <input type="radio" name="tripType" value="卒業旅行" id="tripType03">
                        <label for="tripType03">卒業旅行</label>
                        <input type="radio" name="tripType" value="新婚旅行" id="tripType04">
                        <label for="tripType04">新婚旅行</label>
                        <input type="radio" name="tripType" value="女子旅" id="tripType05">
                        <label for="tripType05">女子旅</label>
                        <input type="radio" name="tripType" value="友人と" id="tripType06">
                        <label for="tripType06">友人と</label>
                      </div>
                    </td>
                  </tr>
                  <tr class="type01">
                    <th>地域<span class="req">※</span>
                    </th>
                    <td>
                      <div class="checktype-01">
                        <?php //配列リストからoptionタグに展開。
$num=1 ;
foreach($preflist as $key=>$value){
  $num = $num+1; if($value == $_POST["pref_return"]){
    echo "<label for='local".$num."'><input type='checkbox' name='local' id='local".$num."' value='$value'>".$value."</label>"; 
  }else{
    echo "<label for='local".$num."'><input type='checkbox' name='local' id='local".$num."' value='$value'>".$value."</label>"; 
  } 
} 
                        ?>
                      </div>
                    </td>
                  </tr>
                  <tr class="type02">
                    <th>メイン動画<span class="req">※</span>
                    </th>
                    <td>
                      <div class="thumb-area"><a href="#" class="null"><img src="/images/posts_add_bg01.gif" alt=""></a></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
            <div class="section event-area">
              <section class="day1 post-module02">
                <h2 class="bg01 h2-ttl02">１日目</h2>
                <div class="post-module02-event">
                  <div class="post-module02-item">
                    <div class="ttl">
                      <h3 class="h3-ttl02">時間を入力<span class="req">※</span></h3>
                    </div>
                    <div class="input-area01">
                      <div id="slider-time1" class="slider-time">0:00</div>
                      <div id="slider1"></div>
                    </div>
                  </div>
                  <div class="post-module02-item">
                    <div class="ttl">
                      <h3 class="h3-ttl02">タイトルを入力<span class="req">※</span></h3>
                      <span class="attention">32文字以内で入力してください。</span>
                    </div>
                    <div class="input-area01">
                      <input type="text" id="eventTitle1" class="chkmax32 chkrequired input-type01">
                    </div>
                  </div>
                  <div class="post-module02-item">
                    <div class="ttl"><h3 class="h3-ttl02">動画か画像を掲載<span class="req">※</span></h3></div>
                    <div class="input-area01">
                      <ul class="img-select">
                        <li><a href="#" class="null"><img src="/images/posts_add_bg02.gif" alt=""></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="post-module02-item">
                    <div class="ttl">
                      <h3 class="h3-ttl02">コメントを入力</h3>
                      <span class="attention">150文字以内で入力してください 。</span>
                    </div>
                    <div class="input-area01">
                      <textarea name="eventCommnet1" id="eventComment1" class="chkmax150 input-type01" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="post-module02-item">
                    <div class="ttl">
                      <h3 class="h3-ttl02">スポット名を入力</h3>
                    </div>
                    <div class="input-area01 event-spot">
                      <input type="text" name="eventSpot1" id="eventSpot1" class="input-type01">
                    </div>
                  </div>
                  <div class="post-module02-item">
                    <div class="ttl">
                      <h3 class="h3-ttl02">場所を指定</h3>
                    </div>
                    <div class="input-area01 event-map">
                      <input type="text" name="eventMap1" id="eventMap1" class="input-type01 chkmax150" rows="1" aria-haspopup="true" aria-expanded="false" readonly aria-readonly="false" data-lat="35.021004" data-lng="135.755608" />
                    </div>
                  </div>
                 <div class="r-event"><span>このイベントを消す</span></div>
                </div>
                <div class="r-day"><span>この日のイベントをすべて消す</span></div>
              </section>
              <nav id="addpost-support"> <a class="add-tday btn04" href="">同じ日に追加</a>  <a class="add-nday btn05" href="">次の日に追加</a>
                <input type="submit" class="end-trip btn06" value="旅を終える">
              </nav>
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