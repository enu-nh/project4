$(function () { 
	$.fn.lightbox = function(){
	    this.click(function(){
	    	$("#whitelayer").addClass("show");
	    	$("#blacklayer").addClass("show").click(function(){
	    		$(this).removeClass("show");
	    		$("#whitelayer").removeClass("show");
	    	});
	    });
	}

	$("#thumb-area").lightbox();
	$(".img-select").lightbox();

});