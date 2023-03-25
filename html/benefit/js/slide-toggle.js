//<![CDATA[
	$(function(){
        
        $("dd").hide();
        $("dt").click(function(){
            $(this).next().slideToggle(300);
            var idx = $(this).parent().attr("class");
            console.log(idx);
            
            if(idx=="ac-cont on"){
                
                $(this).parent().attr({"class":"ac-cont"});
            }else{
                $(this).parent().attr({"class":"ac-cont on"});
            }
                          
        });
	});
//]]>