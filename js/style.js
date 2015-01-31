$(function () {
  //トップのランキング画像アニメーション
  $(".rank-module01-item:not(:animated)").hover(function(){
    var target = $(this).find(".txt");
      target.animate({
        left: "0"
      },200);
  }, function() {
    $(this).find(".txt").animate({
      left: "-320px"
    },0);
  });
  //ログアウトを押したときにダイアログ表示
  $(document).on("click",".menu-out",function(){
    console.log("ok");
    if(window.confirm('ログアウトしますか？')){

      location.href = "/"; // example_confirm.html へジャンプ

    }
    return false;
  });
  
  
  //イベント内の画像のliにクラスを付加
  function addClassList(){
    img_length = $(".img-select li").length;
    for (i = 0; i < img_length; i++) {
      $(".img-select li").eq(i).removeClass().addClass('num' + i);
    }
  }
  
  //投稿画像、動画の選択動作
  $.fn.lightbox = function () {
    //「〜を掲載」がクリックされた際の処理
    $(document).on("click",this.selector,function (e) {
      addClassList();
    e.preventDefault();
      parent = "." + $(this).attr("class");
      console.log(parent);
      $("#whitelayer").addClass("show");
      $("#blacklayer").addClass("show")
    });
  }
  //黒エリアをクリック時は登録せず消す
  $("#blacklayer,#whitelayer .close").click(function () {
    $("#blacklayer").removeClass("show");
    $("#whitelayer").removeClass("show");
    return false;
  });
  //インスタグラム動画像クリック時の処理
  var j=0;
  $("#whitelayer img").click(function () {
    if($(parent).parent().attr("class") == "img-select ui-sortable"){
      //イベント内画像を6個まで登録させる処理
      if(j<=6) {
        j = j+1;
        selectImg = parent+">img";
        if ($(selectImg)[0]) {
        }else{
          $(parent).parent().append("<li><a href='#' class='null'><img src='/images/posts_add_bg02.gif' alt=''></a></li>");
        }
      }
      $(parent).html("<img src='" + $(this).attr("src") + "' /><div class='menuImgBg'></div><a href='#' class='menuImg change'><img src='/images/ico_change02.png' alt=''></a><a href='#' class='menuImg close'><img src='/images/ico_close02.png' alt=''></a>");
    }else{
      $(parent).html("<img src='" + $(this).attr("src") + "' /><div class='menuImgBg'></div><a href='#' class='menuImg change'><img src='/images/ico_change01.png' alt=''></a>");
    }
    addClassList();
    $("#blacklayer").removeClass("show");
    $("#whitelayer").removeClass("show");
  });
  //動画像のメニュー背景クリックは動作させない
  $(document).on({
    click: function(){
      return false;
    }
  },".menuImgBg");
  //動画像を削除する処理
  $(document).on({
    click: function(){
      $(this).parents("li").remove();
      addClassList();
      return false;
    }
  },".menuImg.close");
  //ドラッグで順番入れ替えの処理
  $(".img-select").sortable({
    cancel: ".null",
    update: function() {
      addClassList();
    }
  });

  //イベントを削除
  $(document).on({
    click: function(){
      if($(this).parents(".post-module02").children().length>3){
        $(this).parent().remove();
        addClassList();
      }
      return false;
    }
  },".r-event");
  //日を削除
  $(document).on({
    click: function(){
      console.log($('.post-module02').length);
      if(!$(this).parent().hasClass("day1")){
        $(this).parent().remove();
        dayNum = $('.post-module02').length;
        for(var i=0;i < dayNum;i++){
          console.log(i);
          $(".post-module02").eq(i).attr("class","post-module02 day"+(i+1));
          $(".post-module02").eq(i).children("h2").text((i+1)+"日目");
        }
        click_day_num = click_day_num - 1;
      }
      
      addClassList();
      return false;
    }
  },".r-day");
  
  
  
  
  //画像拡大
  $(".thumb-area").lightbox();
  $(".img-select li").lightbox();
  //メガメニュー		
  $("#gnav").accessibleMegaMenu();
  //tab化
  var pn = location.search.match(/(\?|&)tab=(\d+)(&|\b)/) ? RegExp.$2 : '0';

  $(".tab-contents").tabs().tabs("option", "active", parseInt(pn));

  $('.ui-tabs-nav a').focusin(function () {
    this.blur();
  });
});

timeSlider(1);
//時間スライダー
function timeSlider(id){
	if(id == 1){
		$('#slider'+id).slider({
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
		        $('#slider-time'+id).html(hours1 + ':' + minutes1);
		    }
		});
	}else if(id > 1){
		var min = $('#slider'+(id-1)).val();
		//alert(id);
		$('#slider'+id).slider({
		    min: min,
		    max: 1440,
		    step: 10,
		    values: [0],
		    slide: function (e, ui) {
		        var hours1 = Math.floor(ui.values[0] / 60);
		        var minutes1 = ui.values[0] - (hours1 * 60);
		        if (hours1.length == 1) hours1 = '0' + hours1;
		        if (minutes1.length == 1) minutes1 = '0' + minutes1;
		        if (minutes1 == 0) minutes1 = '00';
		        $('#slider-time'+id).html(hours1 + ':' + minutes1);
		    }
		});
	}
}