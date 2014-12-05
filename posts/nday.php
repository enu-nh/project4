<?php 
$click_id_num = $_POST[click_id_num];
$click_day_num = $_POST[click_day_num];
?>
<section class="day<?php echo($click_day_num); ?>">
	<h1><?php echo($click_day_num); ?>日目</h1>
	<div class="time">
  <h2>時間を入力<span class="req">*</span></h2>
  <p>
    <input type="number" max="24" class="input-type03"></p>
</div>
	<h2>タイトルを入力<span class="req">*</span><span class="attention">32文字以内で入力してください。</span></h2>
	<p><input type="text" id="eventTitle<?php echo($click_id_num); ?>" class="chkmax32 chkrequired input-type01"></p>
	<ul class="img-select">
		<li>動画を掲載する</li>
		<li>動画を掲載する</li>
	</ul>
	<h2>コメントを入力<span class="attention">150文字以内で入力してください 。</span></h2>	
	<div class="mb30"><textarea name="eventComment<?php echo($click_id_num); ?>" id="eventComment<?php echo($click_id_num); ?>" class="chkmax150 chkrequired input-type02" rows="5"></textarea></div>
	<h2>スポット名を入力</h2>
	<div class="mb30"><textarea name="eventSpot<?php echo($click_id_num); ?>" id="eventSpot<?php echo($click_id_num); ?>" class="chkmax150 chkrequired input-type02" rows="1"></textarea></div>
</section>