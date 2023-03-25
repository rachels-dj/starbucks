$(document).ready(function(){

	$(".thumbs em").hide(); 

	$(".thumbs a").click(function(){

		$("#caption").remove(); 

		var path = $(this).attr("href");
		$("#largeImg > img").attr({"src": path});

		var msg = $(this).next("em").text();

		$("#largeImg").append("<div id ='caption'></div>");
		$("#largeImg #caption").text(msg);

		var posy = $("#largeImg #caption").height()+25; 
		$("#largeImg #caption").animate({"top":"-"+posy+"px"},300);

		return false;
	});

});