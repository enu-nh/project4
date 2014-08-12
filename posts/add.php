<?php include '../header.php'; ?>
<?php
	////// 都道府県用配列 //////
	$preflist = array(
		'0'=>'北海道', '1'=>'青森県', '2'=>'岩手県', 
		'3'=>'宮城県', '4'=>'秋田県','5'=>'山形県', '6'=>'福島県', '7'=>'茨城県', 
		'8'=>'栃木県', '9'=>'群馬県','10'=>'埼玉県', '11'=>'千葉県', '12'=>'東京都', 
		'13'=>'神奈川県', '14'=>'新潟県','15'=>'富山県', '16'=>'石川県', '17'=>'福井県', 
		'18'=>'山梨県', '19'=>'長野県','20'=>'岐阜県', '21'=>'静岡県', '22'=>'愛知県', 
		'23'=>'三重県', '24'=>'滋賀県','25'=>'京都府', '26'=>'大阪府', '27'=>'兵庫県', 
		'28'=>'奈良県', '29'=>'和歌山県','30'=>'鳥取県', '31'=>'島根県', '32'=>'岡山県', 
		'33'=>'広島県', '34'=>'山口県','35'=>'徳島県', '36'=>'香川県', '37'=>'愛媛県', 
		'38'=>'高知県', '39'=>'福岡県','40'=>'佐賀県', '41'=>'長崎県', '42'=>'熊本県', 
		'43'=>'大分県', '43'=>'宮崎県','45'=>'鹿児島県', '46'=>'沖縄県'
	);
?>
	<div id="contents">
			<div class="inner">
				<form action="">
					<h1>新規投稿</h1>
					<h2>タイトル</h2>
					<p><input type="text"></p>
					<h2>地域を選択</h2>
					<div class="local-area">
							<?php
							//配列リストからoptionタグに展開。
							foreach($preflist as $key => $value){
							 if($value == $_POST["pref_return"]){
							        echo "<p><input type='checkbox' name='prefecture' value='$value'>".$value."</p>";
							    }else{
							        echo "<p><input type='checkbox' name='prefecture' value='$value'>".$value."</p>";
							    }
							}
							?>
					</div>
					<h2>旅の動画を追加（この動画が一覧トップに表示されます）</h2>
					<div id="thumb-area">
						動画を掲載する
					</div>
					<article id="main-contnets">
						<div id="map">
							<div id="map-area">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d834187.9442673218!2d135.45388895000002!3d35.24265369999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5fff7420f91f1b61%3A0x590a7bc238b19538!2z5Lqs6YO95bqc!5e0!3m2!1sja!2sjp!4v1407832057924" width="300" height="300" frameborder="0" style="border:0"></iframe>
							</div>
						</div>
						<section class="day1">
							<h1>１日目</h1>
							<div class="time">
								<p><input type="number" max="24"><span>時</span><input type="number" max="60"><span>分</span></p>
							</div>
							<p class="title"><input type="text" value="タイトルを入力してください"></p>
							<div class="img-select">
								<p>動画を掲載する</p>
							</div>
							<div class="img-select">
								<p>動画を掲載する</p>
							</div>
							<div class="comments" contenteditable="true"><p>コメントを入力</p></div>
							<div class="area-info" contenteditable="true"><p>地名を入力</p></div>
						</section>
					</article>
					<nav id="addpost-support">
						<a href="">同じ日に追加</a>
						<a href="">次の日に追加</a>
						<a href="">旅を終える</a>
					</nav>	
				</form>
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