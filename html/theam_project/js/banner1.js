$(document).ready(function(){
    
    var banner = $(".bannerWrap > ul > li");
    var button = $(".button > li");
    var current = 0;
    var setIntervalId;
    var time = 3000;
    
    button.on({ click:function(){
            var tg = $(this); 
            var i = tg.index();
            
            
            button.css("background-image","url(images/baner_off.png)");
            tg.css("background-image","url(images/baner_on.png)");
            //버튼의 이미지 변경
        
            move(i);
            //움직이도록 move 메서드 호출
        }

    });
    
    
    $(".bannerWrap").on({
        mouseover:function(){
            clearInterval(setIntervalId);
        },
        mouseleave:function(){
            timer();
        },
        
    });
    
    
     function timer(){
        setIntervalId = setInterval(function(){
            var n =current + 1;
            
            if (n == banner.size()) n=0;
                        
            button.eq(n).trigger('click');
        },time);
         
    }
    
    function move(i){         
        if(current == i) return;
        
        var currentEl = banner.eq(current);
        var nextEl = banner.eq(i);
                    
        currentEl.css({left:0}).stop().animate({left:'-100%'});
        nextEl.css({left:'100%'}).stop().animate({left:0});
        
        current = i;
    
        return;
        
    }
    
    timer(); //자동으로 움직이는 함수 호출    
    
    
 }); 
























