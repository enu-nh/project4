$(function () { 
	//画像の数
	img_length = $(".img-select li").length;
	for(i=0; i<img_length; i++){
		$(".img-select li").eq(i).addClass('num'+i);
	}
	$.fn.lightbox = function(){
	    this.click(function(){
	    	parent = "." + $(this).attr("class");
	    	$("#whitelayer").addClass("show");
	    	$("#blacklayer").addClass("show").click(function(){
	    		$(this).removeClass("show");
	    		$("#whitelayer").removeClass("show");
	    	});
	    	$("img").click(function(){
	    		$(parent).html("<img src='"+ $(this).attr("src") +"' />");
	    		$("#blacklayer").removeClass("show");
	    		$("#whitelayer").removeClass("show");
	    	});
	    });
	}

	$("#addpost-support .add-tday").click(function(){
		$.ajax({
		  url: "tday.php",
		}).done(function( html ) {
		  $(".posts #main-contents section").append(html);
		});
		return false;
	});
	$("#addpost-support .add-nday").click(function(){
		$.ajax({
		  url: "nday.php",
		}).done(function( html ) {
		  $(".posts #main-contents").append(html);
		});
		return false;
	});

	$(".thumb-area").lightbox();
	$(".img-select li").lightbox();
	
	$("#gnav").accessibleMegaMenu();

	$( ".tab-contents" ).tabs();

	$('.ui-tabs-nav a').focusin(function(){
    this.blur();
});
});