$(document).ready(function(){

	var showImg, nextImg;
	var timer = setInterval("fadeInOut()",3000);

	$("div.fadeShow").hover(
		function() {
		   clearInterval(timer);
		}
		,
		function(){
		   timer = setInterval("fadeInOut()",3000);
		}
	);


});

function fadeInOut(){
   
	//console.log('fadeInOut()');


	showImg = $(".fadeShow img:eq(0)");
	nextImg = $(".fadeShow img:eq(1)");


	nextImg.addClass("active");
	nextImg.css("opacity","0").animate(
		{opacity:1},1000, function() {
			$(".fadeShow").append(showImg);
	  		showImg.removeClass("active");
	});

}