$(document).ready(function(){

	$(".thumbs a").click(function(){
		var path = $(this).attr("href");
		$("#largeImg > img").attr({"src": path}); 
		return false;
	});

});

