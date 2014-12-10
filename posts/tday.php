<?php $click_id_num = $_POST[click_id_num];  ?>
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
<div class="mb30"><textarea name="eventSpot<?php echo($click_id_num); ?>" id="eventSpot<?php echo($click_id_num); ?>" class="input-type02" rows="1"></textarea></div>
<h2>場所を指定</h2>
<div class="mb30 event-map">
    <input type="text" name="<?php echo($click_id_num); ?>"  id="<?php echo($click_id_num); ?>" class="chkmax150 chkrequired input-type02 chkrequired" rows="1" aria-haspopup="true" aria-expanded="false" readonly aria-readonly="false" data-lat="35.021004" data-lng="135.755608"/></div>