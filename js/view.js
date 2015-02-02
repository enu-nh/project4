$(function(){
  $(".menu-fixed").append("<nav class='menu-view'><ul></ul></nav>");
  for(i=0;i<$(".post-module04-event").length;i++){
    $(".post-module04-event").eq(i).attr("id","event"+(i+1));
  }
  for(i=0;i<$(".post-module04-item").length;i++){
    $(".post-module04-item").eq(i).attr("id","day"+(i+1));
    $(".menu-view>ul").append("<li><a href='#"+ $(".post-module04-item").eq(i).attr("id") +"'>"+ $(".post-module04-item").eq(i).find("h2").text() +"</a></li>");
    $(".menu-view>ul>li").eq(i).append("<ul class='child'></ul>");
    for(j=0;j<$(".post-module04-item").eq(i).children(".post-module04-event").length;j++){
      $(".menu-view>ul>li").eq(i).find("ul").append("<li><a href='#"+ $(".post-module04-item").eq(i).children(".post-module04-event").eq(j).attr("id") +"'>"+ $(".post-module04-item").eq(i).children(".post-module04-event").eq(j).find("h3").text() +"</a></li>");
    }
  }
});