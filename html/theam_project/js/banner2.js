$(document).ready(function(){
    
    var banner2 = $(".noticeWrap > ul > li");
    var button2 = $(".noticebutton > li");
    var current2 = 0;
    var setIntervalId2;
    var time2 = 2500;
    
    button2.on({ click:function(){
            var bnclick = $(this); 
            var k = bnclick.index();
            
            //alert(k);
            
            button2.removeClass("on");
            bnclick.addClass("on");
            //버튼의 이미지 변경
        
            move2(k);
            //움직이도록 move 메서드 호출
        }

    });
    
    
    $(".ad").on({
        mouseover:function(){
            clearInterval(setIntervalId2);
        },
        mouseleave:function(){
            timer2();
        },
        
    });
    
    
     function timer2(){
        setIntervalId2 = setInterval(function(){
            var n2 =current2 + 1;
            
            if (n2 == banner2.size()) n2=0;
      
            button2.eq(n2).trigger('click');
        },time2);
        
    }
    
    function move2(k){         
        if(current2 == k) return false;
        
        var currentEl2 = banner2.eq(current2);
        var nextEl2 = banner2.eq(k);
        
        //alert(currentEl2.index());
        //alert(nextEl2.index());
        
        currentEl2.css({left:0}).stop().animate({left:'-100%'});
        nextEl2.css({left:'100%'}).stop().animate({left:0});
        
        current2 = k;
    
        return false;
        
        
    }
    
    timer2(); //자동으로 움직이는 함수 호출
    
    
 }); 
























