$(function(){ 

	var visual = $('#brandVisual > ul > li');
    var button = $('#buttonList > li');
	var current = 0;	 //현재 이미지의 index -> 초기값 0
	var setIntervalId;

	button.on({click:function(){
			var tg = $(this);
			var i = tg.index();	 //클릭한 버튼의 index : 0 ~ 2
            //alert(i);
            
            //버튼의 이미지 변경..
            button.removeClass('on');
            tg.addClass('on');
        
            //움직이도록 move 메서드 호출..  
			move(i);
		}
	});


	function move(i){
        //alert(i);
        
		if(current == i) return;

		var currentEl = visual.eq(current);  //현재 엘리먼트...(지금 보여지는 이미지..)
        var nextEl = visual.eq(i);  //다음 엘리먼트..(다음에 보여질 이미지...)

		currentEl.css({left:0}).stop().animate({left:'-100%'});
        nextEl.css({left:'100%'}).stop().animate({left:0});
		
		current = i;

		return;
	}

});