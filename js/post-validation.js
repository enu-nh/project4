$(function(){
  //変数
  var click_id_num = 1;
  var click_day_num = 1;
  //関数
  function post_vallidation(){
      $("#post-add-form")
      .exValidation({
        customListener: "blur", // onBlur時のみにしてみる
        stepValidation: true,
        errTipCloseBtn: false,
        errTipPos: "left", // 吹き出しが表示される位置（左右）
        errHoverHide: true, // マウスオーバーで消える
        scrollToErr: true // 
      });
  }
  
  //初期実行
  post_vallidation();
  
  $("#addpost-support .add-tday").click(function(){
    click_id_num = click_id_num + 1;
		$.ajax({
      type: "POST",
      data: {"click_id_num":click_id_num},
		  url: "tday.php",
		}).done(function( html ) {
		  $(".posts #main-contents section").append(html);
    $(".formError").remove();
      post_vallidation();
      $(".time input").pickatime();
    });
    return false;
	});
	$("#addpost-support .add-nday").click(function(){
    click_day_num = click_day_num + 1;
    click_id_num = click_id_num + 1;
		$.ajax({
      type: "POST",
      data: {"click_id_num":click_id_num,"click_day_num":click_day_num},
		  url: "nday.php",
		}).done(function( html ) {
		  $(".posts #main-contents").append(html);
      $(".formError").remove();
      post_vallidation();
      $(".time input").pickatime();
		});
		return false;
	});
  $('#tripDeparture').pickadate();
  $(".time input").pickatime();
  
  //地図
  var initialLat;
  var initialLng;
  var latLngArray = [];
  $(document).on("click",".event-map input",function(){
      thisHtml = $(this);
      initialLat = thisHtml.attr("data-lat");
      initialLng = thisHtml.attr("data-lng");
    $("#map_canvas").remove();
    $(this).parent().append('<div id="map_canvas" style="width:500px; height:300px"></div>');
    var eventSpotArea = thisHtml;
    console.log(eventSpotArea);
  
    var geocoder = new google.maps.Geocoder();
    var map;
    var myLatlng = new google.maps.LatLng(initialLat,initialLng); // 座標の初期値
    var marker;

    var myOptions = {
        zoom: 8,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    // 地図を生成する
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    // マーカーを追加
    marker = new google.maps.Marker({
        position: myLatlng,
        map: map, 
        draggable: true // ドラッグ可能にする
    });

    // ドラッグが終了した時の処理
    google.maps.event.addListener(marker, "dragend", function() {
        setLatLng(marker);
        map.setCenter(marker.getPosition());
        thisHtml.attr("data-lat",plat);
        thisHtml.attr("data-lng",plng);
    });

    setLatLng(marker); // 座標書き出し
    
    // 住所から検索
    function codeAddress() {
        var address = document.getElementById("address").value;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                marker.setPosition(results[0].geometry.location);
                setLatLng(marker); // 座標書き出し
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
    
    // マーカーの位置をテキストフィールドに書きだす。
    function setLatLng(marker) {
        var p = marker.getPosition();
        gmap_init(p.lat(),p.lng());
        plat = p.lat();
        plng = p.lng();
    }
    
    
    function gmap_init(gpsLat,gpsLng) {
      geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(gpsLat,gpsLng);
     
      geocoder.geocode({'latLng':latlng},function(results,status){
        if (status == google.maps.GeocoderStatus.OK) {
          eventSpotArea.val(results[1].formatted_address);
        } else {
          console.log(status);
        }
      });
    }//gmap_init
  });
});
