
        //    banner right
        $(function(){ 

            var visual = $('#brandVisual > ul > li');
            var button = $('#buttonList > li');
            var current = 0;	
            var setIntervalId;

            button.on({click:function(){
                    var tg = $(this);
                    var i = tg.index();	
                    button.removeClass('on');
                    tg.addClass('on');
                    console.log("button"+i+"\n");
                    move(i);
                }
            });

            $('#wrap').on({
                mouseover:function(){
                   clearInterval(setIntervalId);
                },
                mouseout:function(){
                    timer();
                }
            });

            timer(); 
            function timer(){
                 setIntervalId = setInterval(function(){ 
                    var n = current + 1;

                    if(n == visual.size())	n=0;

                    button.eq(n).trigger('click');
                 }, 2000);
            }

            function move(i){
               console.log(i+"\n");
                if(current == i) return;

                var currentEl = visual.eq(current); 
                var nextEl = visual.eq(i); 

                currentEl.css({left:0}).stop().animate({left:'-100%'});
                nextEl.css({left:'100%'}).stop().animate({left:0});

                current = i;

                return;
            }

            var showImg, nextImg;
            var timer1 = setInterval("fadeInOut()",3000);

            $("div.fadeShow").hover(
                function() {
                   clearInterval(timer1);
                }
                ,
                function(){
                   timer1 = setInterval("fadeInOut()",3000);
                }
            );


 

        });
        
        
        function fadeInOut(){


                showImg = $(".fadeShow img:eq(0)");
                nextImg = $(".fadeShow img:eq(1)");


                nextImg.addClass("active");
                nextImg.css("opacity","0").animate(
                    {opacity:1},1000, function() {
                        $(".fadeShow").append(showImg);
                        showImg.removeClass("active");
                });
           }
        
        
//        $(function(){ 
//
//            var visual = $('#slide_banner > ul > li');
//            var button = $('#buttonList > li');
//            var current = 0;	 //현재 이미지의 index -> 초기값 0
//            var setIntervalId;
//
//            button.on({click:function(){
//                    var tg = $(this);
//                    var i = tg.index();	 //클릭한 버튼의 index : 0 ~ 2
//                    //alert(i);
//
//                    //버튼의 이미지 변경..
//                    button.removeClass('on');
//                    tg.addClass('on');
//
//                    //움직이도록 move 메서드 호출..  
//                    move(i);
//                }
//            });
//            
//            $('#banner_wrap').on({
//                mouseover:function(){
//                   clearInterval(setIntervalId);
//                },
//                mouseout:function(){
//                    timer();
//                }
//            });
//
//
//            function timer(){
//                 setIntervalId = setInterval(function(){ 
//                    var n = current + 1;
//
//                    if(n == visual.size())	n=0;
//
//                    button.eq(n).trigger('click');
//                 }, 5000);
//            }
//
//            function move(i){
//                //alert(i);
//
//                if(current == i) return;
//
//                var currentEl = visual.eq(current);  //현재 엘리먼트...(지금 보여지는 이미지..)
//                var nextEl = visual.eq(i);  //다음 엘리먼트..(다음에 보여질 이미지...)
//
//                currentEl.css({left:0}).stop().animate({left:'-100%'});
//                nextEl.css({left:'100%'}).stop().animate({left:0});
//
//                current = i;
//
//                return;
//            }
//
//            timer(); 
//            }
//
//        });









////<![CDATA[
//	$(function(){
//
//		var mySlider=$("#slide_banner").bxSlider({
//			mode:"horizontal",   // 가로 수평으로 슬라이드 됩니다.
//			speed:100,           // 이동 속도를 설정합니다.
//			pager:false,         // 현재 위치 페이징 표시 여부 설정.
//			moveSlides:1,        // 슬라이드 이동시 갯수 설정.
//			slideWidth:586,       // 슬라이드 마다 너비 설정.
//			minSlides:2,         // 최소 노출 개수를 설정.
//			maxSlides:1,         // 최대 노출 개수를 설정.
//			slideMargin:0,      // 슬라이드간의 간격을 설정.
//			auto:true,	         // 자동으로 흐를지 설정합니다.
//			autoHover:true,      // 마우스 오버시 정지 시킬지 설정합니다.
//			controls:false,       // 이전 다음 버튼 노출 여부 설정합니다.
//		});
//
//		$("#prevBtn01").on("click",function(){	
//			mySlider.goToPrevSlide();  	
//			return false;
//		});
//
//		$("#nextBtn02").on("click",function(){	
//			mySlider.goToNextSlide();  
//			return false; //<a>에 링크를 차단합니다.
//		});
//        
//        $("#nextBtn03").on("click",function(){	
//			mySlider.goToNextSlide();  
//			return false; //<a>에 링크를 차단합니다.
//		});
//
//	});
//	//]]>