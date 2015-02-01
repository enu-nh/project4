$(function(){
  //変数
  click_id_num = 1;
  click_day_num = 1;
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
      url: "/posts/tday.php",
    }).done(function( html ) {
      $(".event-area #addpost-support").prev().append(html);
      //時間スライダーを追加
      $(".slider-time").next().slider({
        min: 0,
        max: 1440,
        step: 10,
        values: [0],
        slide: function (e, ui) {
          var hours1 = Math.floor(ui.values[0] / 60);
          var minutes1 = ui.values[0] - (hours1 * 60);
          if (hours1.length == 1) hours1 = '0' + hours1;
          if (minutes1.length == 1) minutes1 = '0' + minutes1;
          if (minutes1 == 0) minutes1 = '00';
          $(this).prev().html(hours1 + ':' + minutes1);
        }
      });
      $(".formError").remove();
      post_vallidation();
      $(".time input").pickatime();
      $(".img-select").sortable({
        cancel: ".null",
        update: function() {
          addClassList();
        }
      });
    });
    return false;
  });
  $("#addpost-support .add-nday").click(function(){
    click_day_num = click_day_num + 1;
    click_id_num = click_id_num + 1;
    console.log(click_day_num );
    $.ajax({
      type: "POST",
      data: {"click_id_num":click_id_num,"click_day_num":click_day_num},
      url: "/posts/nday.php",
    }).done(function( html ) {
      $(".event-area #addpost-support").before(html);
      //時間スライダーを追加
      $(".slider-time").next().slider({
        min: 0,
        max: 1440,
        step: 10,
        values: [0],
        slide: function (e, ui) {
          var hours1 = Math.floor(ui.values[0] / 60);
          var minutes1 = ui.values[0] - (hours1 * 60);
          if (hours1.length == 1) hours1 = '0' + hours1;
          if (minutes1.length == 1) minutes1 = '0' + minutes1;
          if (minutes1 == 0) minutes1 = '00';
          $(this).prev().html(hours1 + ':' + minutes1);
        }
      });
      $(".formError").remove();
      post_vallidation();
      $(".time input").pickatime();
      $(".img-select").sortable({
        cancel: ".null",
        update: function() {
          addClassList();
        }
      });
    });
    return false;
  });
  
  $('#tripDeparture').pickadate();
  
  
  //地図
  var initialLat;
  var initialLng;
  var latLngArray = [];
  $(document).on("click",".event-map input",function(){
      thisHtml = $(this);
      initialLat = thisHtml.attr("data-lat");
      initialLng = thisHtml.attr("data-lng");
    $("#map_canvas").remove();
    $(this).parent().append('<div id="map_canvas" style="width:620px; height:300px"></div>');
    var eventSpotArea = thisHtml;
  
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
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                marker.setPosition(results[0].geometry.location);
                setLatLng(marker); // 座標書き出し
              thisHtml.attr("data-lat",plat);
              thisHtml.attr("data-lng",plng);
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
    //更新クリック時にマーカー位置修正
    $(document).on({
      click: function(){
        address = $(this).next().val();
        eventSpotArea = $(this).next();
        codeAddress();
        return false;
      }
    },".btn-ref");
    
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
