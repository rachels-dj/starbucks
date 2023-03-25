$(document).ready(function(){

//메인 슬라이드 배너 시작

$(function(){			
	var eleWidth = $(".vis_frame ul li ").innerWidth();
	var state = false;			
	var playOn = false;			
	var direction = "left";	
	var time = 5000;
	var bannerAuto;				
	
	function play(){
		if(!playOn){
			playOn = true;
			bannerAuto = setInterval(function(){					
				if(direction == "left"){
					$(".left").click();
				}else{
					$(".right").click();
				}					
			},time);					
		}
	}		
	
	function stop(){
		if(playOn){
			playOn = false;
			clearInterval(bannerAuto);			
		}
	}	

	function left(){		
		stop();
		direction = "left";					
		$(".vis_frame > ul").animate({left:'-1920px'},1000,"swing",function(){				
			$(this).children("li:first").insertAfter($(this).children("li:last"));
			$(this).css({left:0});
			state = false;
			play();				
		});			
	}			
	function right(){		
		stop();
		direction = "right";										
		$(".vis_frame > ul > li:last").insertBefore($(".vis_frame > ul > li:first"));
		$(".vis_frame > ul").css({left:eleWidth*-1});
		$(".vis_frame > ul").animate({left:0},1000,"swing",function(){				
			state = false;
			play();				
		});					
	}			
	$(".left").click(function(){
		if(!state){					
			state = true;
			left();
		}			
	});			
	$(".right").click(function(){
		if(!state){					
			state = true;
			right();
		}				
	});			
	$(".stop").click(function(){		
		stop();				
	});			
	$(".play").click(function(){
		play();				
	});			
	$(".play").click();
	
	$(".youtube").click(function(){
		$("#movieClip").fadeIn();
		stop();
	});

	$(".close").click(function(){
		$("#movieClip").fadeOut();
		play();
	});
	
	
});

 // 2016-09-27 이요한 검색창 배너 슬라이드 추가//

	setInterval(function(){
		showImg = $(".search_banner img:eq(0)");
		nextImg = $(".search_banner img:eq(1)");

		nextImg.addClass("active");
		nextImg.css("opacity","0").animate(
		{opacity:1},3000,function(){
		$('.search_banner').append(showImg);
		showImg.removeClass('active');
		});
	},6000);

 // 2016-09-27 이요한 검색창 배너 슬라이드 종료//
		

	



    $('.menu').click(function(){
        $('.m_slide_menu').css('display','block');
    });
    $('#m_close').click(function(){
        $('.m_slide_menu').css('display','none');
    });
        
    
    $('.m_slide_menu_inner > ul > li').click(function(){
       $(this).children('ul').slideToggle(); 
    });
    

    $('.menu01').mouseover(function(){
        $('.toggle_menu').slideDown();
        $('.menu01_over').css('display' , 'block');        
        $('.menu01_over').siblings('div').css('display' , 'none');
        $('.ad_box').css('display' , 'block');
        
    });
    $('.menu02').mouseover(function(){
        $('.toggle_menu').slideDown();
        $('.menu02_over').css('display' , 'block');        
        $('.menu02_over').siblings('div').css('display' , 'none');
        $('.ad_box').css('display' , 'block');
    });
    $('.menu03').mouseover(function(){
        $('.toggle_menu').slideDown();
        $('.menu03_over').css('display' , 'block');        
        $('.menu03_over').siblings('div').css('display' , 'none');
        $('.ad_box').css('display' , 'block');        
    });
    $('.menu04').mouseover(function(){
        $('.toggle_menu').slideDown();
        $('.menu04_over').css('display' , 'block');        
        $('.menu04_over').siblings('div').css('display' , 'none');
        $('.ad_box').css('display' , 'block');        
    });   
    
    
    $('.menu05').mouseover(function(){
        $('.toggle_menu').slideDown();
        $('.menu05_over').css('display' , 'block');        
        $('.menu05_over').siblings('div').css('display' , 'none');
        $('.ad_box').css('display' , 'block');    
    });  
    $('.menu06').mouseover(function(){
        $('.toggle_menu').slideDown();
        $('.menu06_over').css('display' , 'block');        
        $('.menu06_over').siblings('div').css('display' , 'none');
        $('.ad_box').css('display' , 'block');     
    });      
    
    

    $('.toggle_menu').mouseleave(function(){
        $('.toggle_menu').slideUp();       
    });
  

//2016-09-20 컬러변경메뉴 열기 추가
	
	var active = true;

	$('.color_ChangeBtn').click(function(){
		
	if(active){
		 $('.header_color').slideUp();
		 $('.color_ChangeBtn img').attr('src','images/color_btn.png');
		 $('#b_control').stop().animate({'top':'790px'},1000);
		 active = false;
	 }else{ 
		$('.header_color').slideDown();
		$('.color_ChangeBtn img').attr('src','images/color_btn_close.png');
		$('#b_control').stop().animate({'top':'880px'},1000);
		active = true; 

	 }
	

	});
	

//- 컬러변경 메뉴 끝-//

/* conmunnity 토글  */
    $('.company1 > p').click(function(){
        $(this).next().slideToggle(); 
    });
/* conmunnity 토글 끝 */    
    
    
    
    $('.notice').click(function(){
        $('.notice').css({
            zIndex : "99",
            background : "#f4f4f4",
        });
        
        $('.qna').css({
            zIndex : "0",
            background : "#eeeeee"
        });
        
        $('.notice_board').css('display','block');
        $('.qna_board').css('display','none');
    });
    
    $('.qna').click(function(){
        $('.qna').css({
            zIndex : "99",
            background : "#f4f4f4",
        });
        
        $('.notice').css({
            zIndex : "0",
            background : "#eeeeee"
        });
        
        $('.qna_board').css('display','block');
        $('.notice_board').css('display','none');
    });    
    

    // 컬러체인지 
    
    $('div.colorList > ul > li').click(function(){
       var color = $(this).text();
        $('.colorChange').css({ color : color }).removeClass('skyblue');
    });    
    
    
    // -회원가입 페이지 패스워드 확인- //    


    $(this).focusout(function(){
        var p = $('.pw').val();    
        console.log(p);

        var cpw = $('.checkpw').val();    
        console.log(cpw);

        if(p != cpw){
            $(".pwInfo").css({opacity:1});
            return
        }else {
            $(".pwInfo").css({opacity:0});
        }

    });    



});


