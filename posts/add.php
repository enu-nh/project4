<?php include($_SERVER['DOCUMENT_ROOT'] . '/function.php'); ?>
<!doctype html>
<html lang="ja-JP">
<head>
<link rel="stylesheet" href="/css/megamenu.css">
<link rel="stylesheet" href="/css/jquery-ui.min.css">
<link rel="stylesheet" href="/css/exvalidation.css">
<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="/css/common.css">
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
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>
  <?php
	////// 都道府県用配列 //////
	$preflist = array(
		'0'=>'北海道', '1'=>'青森県', '2'=>'秋田県', 
		'3'=>'山形県', '4'=>'岩手県','5'=>'宮城県', '6'=>'福島県', '7'=>'東京都', 
		'8'=>'神奈川県', '9'=>'埼玉県','10'=>'千葉県', '11'=>'栃木県', '12'=>'茨城県', 
		'13'=>'群馬県', '14'=>'愛知県','15'=>'岐阜県', '16'=>'静岡県', '17'=>'三重県', 
		'18'=>'新潟県', '19'=>'山梨県','20'=>'長野県', '21'=>'石川県', '22'=>'富山県', 
		'23'=>'福井県', '24'=>'大阪府','25'=>'兵庫県', '26'=>'京都府', '27'=>'滋賀県', 
		'28'=>'奈良県', '29'=>'和歌山県','30'=>'岡山県', '31'=>'広島県', '32'=>'鳥取県', 
		'33'=>'島根県', '34'=>'山口県','35'=>'香川県', '36'=>'徳島県', '37'=>'愛媛県', 
		'38'=>'高知県', '39'=>'福岡県','40'=>'佐賀県', '41'=>'長崎県', '42'=>'熊本県', 
		'43'=>'大分県', '43'=>'宮崎県','45'=>'鹿児島県', '46'=>'沖縄県'
	);
?>
  <div id="contents">
    <div class="inner">
      <div id="main">
        <form id="post-add-form" action="confirm.php">
          <h1>新規投稿</h1>
          <h2>タイトル<span class="req">*</span><span class="attention">32文字以内で入力してください</span></h2>
          <p>
            <input type="text" id="tripTitle" class="chkrequired chkmin8 chkmax32 input-type01">
          </p>
          <h2>出発日<span class="req">*</span></h2>
          <p>
            <input type="text" id="tripDeparture" class="chkrequired chkmin8 chkmax32 input-type01">
          </p>
          <h2>旅の目的<span class="req">*</span><span class="attention">複数選択可。訪問した地域を選択してください.</span></h2>
          <div id="tripType">
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
          <h2>地域<span class="req">*</span><span class="attention">複数選択可。訪問した地域を選択してください.</span></h2>
          <div id="localArea" class="chkcheckbox">
            <?php
							//配列リストからoptionタグに展開。
							$num = 1;
							foreach($preflist as $key => $value){
                              $num = $num+1;
							 if($value == $_POST["pref_return"]){
							 	
							        echo "<p><label for='local".$num."'><input type='checkbox' name='local' id='local".$num."' value='$value'>".$value."</label></p>";
							    }else{
							        echo "<p><label for='local".$num."'><input type='checkbox' name='local' id='local".$num."' value='$value'>".$value."</label></p>";
							    }
							}
							?>
          </div>
          <h2>旅の動画を追加<span class="req">*</span><span class="attention">この動画が一覧トップに表示されます</span></h2>
          <div class="thumb-area"> 動画を掲載する </div>
          <article id="main-contents">
            <section class="day1">
              <h1>１日目</h1>
              <div class="time">
                <h2>時間を入力<span class="req">*</span></h2>
                <p>
                  <input type="number" max="24" class="input-type03">
                </p>
              </div>
              <h2>タイトルを入力<span class="req">*</span><span class="attention">32文字以内で入力してください。</span></h2>
              <p>
                <input type="text" id="eventTitle1" class="chkmax32 chkrequired input-type01">
              </p>
              <ul class="img-select">
                <li>動画・画像を掲載する</li>
                <li>動画・画像を掲載する</li>
              </ul>
              <h2>コメントを入力<span class="attention">150文字以内で入力してください 。</span></h2>
              <div class="mb30">
                <textarea name="eventCommnet1" id="eventComment1" class="chkmax150 chkrequired input-type02" rows="5"></textarea>
              </div>
              <h2>スポット名を入力</h2>
              <div class="mb30 event-spot">
                <textarea name="eventSpot1"  id="eventSpot1" class="chkmax150 chkrequired input-type02" rows="1"></textarea>
              </div>
              <h2>場所を指定</h2>
              <div class="mb30 event-map">
                <input type="text" name="eventMap1"  id="eventMap1" class="chkmax150 chkrequired input-type02 chkrequired" rows="1" aria-haspopup="true" aria-expanded="false" readonly aria-readonly="false"/>
              </div>
            </section>
          </article>
          <nav id="addpost-support"> <a class="add-tday" href="">同じ日に追加</a> <a class="add-nday" href="">次の日に追加</a>
            <input type="submit" class="end-trip" value="旅を終える">
          </nav>
        </form>
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
          <div class="more"> <a href="">もっと見る</a> </div>
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
<script src="/js/picker.js"></script> 
<script src="/js/picker.date.js"></script> 
<script src="/js/picker.time.js"></script> 
<script src="/js/jquery-ui.min.js"></script> 
<script src="/js/exvalidation.js"></script> 
<script src="/js/post-validation.js"></script> 
<script src="/js/exchecker-ja.js"></script> 
<script src="/js/validation.js"></script> 
<script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script> 
<script src="/js/style.js"></script>
</body>
</html>