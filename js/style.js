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
  //画像の数
  img_length = $(".img-select li").length;
  for (i = 0; i < img_length; i++) {
    $(".img-select li").eq(i).addClass('num' + i);
  }
  $.fn.lightbox = function () {
    this.click(function () {
      parent = "." + $(this).attr("class");
      $("#whitelayer").addClass("show");
      $("#blacklayer").addClass("show").click(function () {
        $(this).removeClass("show");
        $("#whitelayer").removeClass("show");
      });
      $("img").click(function () {
        $(parent).html("<img src='" + $(this).attr("src") + "' />");
        $("#blacklayer").removeClass("show");
        $("#whitelayer").removeClass("show");
      });
    });
  }


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