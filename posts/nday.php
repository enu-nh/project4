<?php 
$click_id_num = $_POST[click_id_num];
$click_day_num = $_POST[click_day_num];
?>
<section class="day<?php echo($click_day_num); ?> post-module02">
  <h2 class="bg01 h2-ttl02"><?php echo($click_day_num); ?>日目</h2>
  <div class="post-module02-event">
    <div class="post-module02-item">
      <div class="ttl">
        <h3 class="h3-ttl02">時間を入力<span class="req">※</span></h3>
      </div>
      <div class="input-area01">
        <div id="slider-time<?php echo($click_id_num); ?>" class="slider-time">0:00</div>
        <div id="slider<?php echo($click_id_num); ?>"></div>
      </div>
    </div>
    <div class="post-module02-item">
      <div class="ttl">
        <h3 class="h3-ttl02">タイトルを入力<span class="req">※</span></h3>
        <span class="attention">32文字以内で入力してください。</span>
      </div>
      <div class="input-area01">
        <input type="text" id="eventTitle<?php echo($click_id_num); ?>" class="chkmax32 chkrequired input-type01">
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
        <textarea name="eventCommnet<?php echo($click_id_num); ?>" id="eventComment<?php echo($click_id_num); ?>" class="chkmax150 input-type01" rows="5"></textarea>
      </div>
    </div>
    <div class="post-module02-item">
      <div class="ttl">
        <h3 class="h3-ttl02">スポット名を入力</h3>
      </div>
      <div class="input-area01 event-spot">
        <input type="text" name="eventSpot<?php echo($click_id_num); ?>" id="eventSpot<?php echo($click_id_num); ?>" class="input-type01">
      </div>
    </div>
    <div class="post-module02-item">
      <div class="ttl">
        <h3 class="h3-ttl02">場所を指定</h3>
      </div>
      <div class="input-area01 event-map">
        <input type="text" name="eventMap<?php echo($click_id_num); ?>" id="eventMap<?php echo($click_id_num); ?>" class="input-type01 chkmax150" rows="1" aria-haspopup="true" aria-expanded="false" readonly aria-readonly="false" data-lat="35.021004" data-lng="135.755608" />
      </div>
    </div>
    <div class="r-event"><span>このイベントを消す</span></div>
  </div>
  <div class="r-day"><span>この日のイベントをすべて消す</span></div>
</section>