var map;
var marker = null;
var geocoder = new google.maps.Geocoder();
//マップ初期化
var mapOptions = {
	center: new google.maps.LatLng(35.681382, 139.766084),
	zoom: 4,
	mapTypeId: google.maps.MapTypeId.RADMAP	
};
$(function($){
	map = new google.maps.Map($("#map").get(0), mapOptions);
	//マップクリック時
	google.maps.event.addListener(map, 'click', function(e){
		if(marker == null){
			//マーカー生成
			marker = new google.maps.Marker(
				{position: e.latLng, map: map, animation: google.maps.Animation.DROP}
			);
			//住所取得
			geocoder.geocode({"latLng": e.latLng}, function(res, sta){
				if(sta == google.maps.GeocoderStatus.OK && res[0].geometry){
					address = res[0].formatted_address;
					$("#marker_address").append(e.latLng.k+':'+e.latLng.B+'<br>'+address+'<br><br>');
					$("input[name=post_geo]").val(e.latLng.B+' '+e.latLng.k);
					//$("#marker_address").append('<a href="javascript: delete();">削除</a>');
				}else{
					alert('住所の取得に失敗しました');
				}
			});
			//マーカークリック時
			google.maps.event.addListener(marker, 'click', function(e){
				//ズーム変更
				if(map.getZoom() <= 2){
					map.setZoom(9);
				}else{
					map.setZoom(2);
				}
				map.setCenter(e.latLng);
			});
		}else{
			alert("マーカーは一つまでです");
		}
	});
});

