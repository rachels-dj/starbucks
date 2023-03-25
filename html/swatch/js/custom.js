$(document).ready(function(){
    
    //변수 ht에 브라우저의 높이값을 저장
    var ht = $(window).height();
    
    //브라우저의 높이값을 section의 높이값으로 지정
    $("section").height(ht);
    
    //브라우저가 리사이즈 될 때마다 브라우저와 section의 높이값을 갱신
    $(window).on("resize",function(){
        ht = $(window).height();
        //var 대신 사용( 지역변수 선언시 안에서만 작동 ) 지역변수가 전역변수보다 우선쉰위가 높다 
        $("section").height(ht);        
    });
    
    //메뉴 버튼 클릭시
    $("#menu li").on("click", function(){

        //변수 ht에 브라우저의 높이값 저장
        var ht = $(window).height();
        
        //변수 i에 현재 클릭한 li의 순서값을 저장
        var i = $(this).index();
        
        //브라우저의 높이값*박스의 순서값은 현재 박스의 스크롤 위치값과 동일
        var nowTop = i*ht;
        
        //해당 스크롤 위치값으로 문서를 이동;
        $("html,body").stop().animate({"scrollTop":nowTop},1400);
        
        
    });
    
    $(window).on("scroll",function(){
        
        //변수 ht에 현재 브라우저의 높이값 저장
        var ht = $(window).height();
        
        //변수 scroll에 현재 문서가 스크롤된 거리 저장
        var scroll = $(window).scrollTop();
  /*          
        if(scroll>=ht*0 && scroll<ht*1){
            $("#menu li").removeClass();
            $("#menu li").eq(0).addClass("on");
        }else if(scroll>=ht*1 && scroll<ht*2){
            $("#menu li").removeClass();
            $("#menu li").eq(1).addClass("on");
        }if(scroll>=ht*2 && scroll<ht*3){
            $("#menu li").removeClass();
            $("#menu li").eq(2).addClass("on");
        }if(scroll>=ht*3 && scroll<ht*4){
            $("#menu li").removeClass();
            $("#menu li").eq(3).addClass("on");
        }
*/    
        for(var i=0; i<4; i++){
            if(scroll>=ht*i && scroll<ht*(i+1)){
                $("#menu li").removeClass();
                $("#menu li").eq(i).addClass("on");
            };
        }
        
    });
    
    
    //section위에서 마우스 휠을 움직이면
    $("section").on("mousewheel", function(event,delta){
        
        //마우스 휠을 올렸을때
        if (delta > 0) {
            var prev = $(this).prev().offset().top;
            $("html,body").stop().animate({"scrollTop":prev},1400,"easeOutBounce");
        
        //마우스 휠을 내렸을때
        }else if (delta < 0) {
            var next = $(this).next().offset().top;
            $("html,body").stop().animate({"scrollTop":next},1400,"easeOutBounce");
        }
        
    });
    
    
    //각각의 section에서 마우스를 움직이면
    $("section").on("mousemove",function(e){
        
        //변수 posX에 마우스 커서의 x축 위치 저장
        var posX = e.pageX;
        
        //변수 posY에 마우스 커서의 y축 위치 저장
        var posY = e.pageY;
        
        
        //첫 번째 박스의 이미지 위치값을 마우스 커서의 위치값과 연동
        $(".p11").css({"right":20-(posX/30), "bottom":20-(posY/30)});
        $(".p12").css({"right":130+(posX/30), "bottom":-40+(posY/30)});
        $(".p13").css({"right":60+(posX/30), "top":180+(posY/30)});
        
        //두 번째 박스의 이미지 위치값을 마우스 커서의 위치값과 연동
        $(".p21").css({"right":-180-(posX/30), "bottom":-480-(posY/30)});
        $(".p22").css({"right":130+(posX/30), "bottom":-40+(posY/30)});
        
        //세 번째 박스의 이미지 위치값을 마우스 커서의 위치값과 연동
        $(".p31").css({"right":280-(posX/30), "bottom":30-(posY/30)});
        $(".p32").css({"right":110+(posX/30), "bottom":-270+(posY/30)});
        $(".p33").css({"right":-70+(posX/30), "top":-130+(posY/30)});
        
        //네 번째 박스의 이미지 위치값을 마우스 커서의 위치값과 연동
        $(".p41").css({"right":20-(posX/30), "bottom":-120-(posY/30)});
        $(".p42").css({"right":0+(posX/30), "bottom":-180+(posY/30)});
        
        
    });
    
    
});    
    /* 스크롤 */
/*
    var w = $(window).width();
    var h = $(window).height();
    var scrollSpeed = 1000;
    
    $("#wrap section").css({'height': h ,'width': w});
    
    $("#menu li").click(function(){
    
        var ind = $(this).index();
        var h = $(window).height();
        var scrollSpeed = 300;
        var target = $(this).attr("href");
        var section = $("#"+target).offset().top;
        
        console.log(target);
        console.log(section);
        
        
        window.scrollTo({top:section,left:0}, scrollSpeed, 'easeOutBounce');
        
        //window.scrollTo({top:section, left:0}, 1000 ,{easing:'easeOutBounce'});
        
        
        /*
        if(ind == 0){
            $("html,body").animate({scorllTop:sec1},500, 'easeOutBounce');
        }else if(ind == 1){
            $("html,body").animate({scorllTop:sec2},500, 'easeOutBounce');
        }else if(ind == 2){
            $("html,body").animate({scorllTop:sec3},500, 'easeOutBounce');
        }else if(ind == 3){
            $("html,body").animate({scorllTop:sec4},500, 'easeOutBounce');
        }
    
        /*
        if(goPage == 0){
            window.animate({ top: sec1 }, scrollSpeed, 'easeOutBounce');
        }else if(goPage == 1){
            window.animate({ top: sec2 }, scrollSpeed, 'easeOutBounce');
        }else if(goPage == 2){
            window.animate({ top: sec3 }, scrollSpeed, 'easeOutBounce');
        }else if(goPage == 3){
            window.animate({ top: sec4 }, scrollSpeed, 'easeOutBounce');
        }
        
        return false;
    });
*/    
  
    /* 메뉴 클릭 
    $("#menu li").click( function() {
    
        var goPage = $(this).index();
        
        $("#menu li").removeClass("on");
        $(this).addClass("on", function(){
            
            $("#menu li a").css({color:'#555'});
        
            if(goPage == 0){
                
                $("li.on a").css({color:'crimson'});
            }else if(goPage == 1){
                
                $("li.on a").css({color:'#fff'});
            }else if(goPage == 2){
                
                $("li.on a").css({color:'yellow'});
            }else if(goPage == 3){
                
                $("li.on a").css({color:'#fff'});
            }
        });
        
        return;
    

    }); 
    */
    /*mousewheel*/
    /*
    $(function(){
        $("html, body").on('mousewheel DOMMouseScroll', function(e) {
            var E = e.originalEvent;
            delta = 0;
            console.log(E);
            if (E.detail) {
                delta = E.detail * -40;
                $('body').text(delta);
            }else{
                delta = E.wheelDelta;
                $('body').text(delta);
            };
        });
    });
    */
    




