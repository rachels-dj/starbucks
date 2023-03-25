$(document).ready(function(){
   $('.menu').click(function(){
      $('.menu_slide').css('display', 'block') ;
   }); 
    
    $('.close').click(function(){
       $('.menu_slide').css('display', 'none') ; 
    });
    
    
    
    $('.menu_slide > ul > li').click(function(){
        $(this).children().slideToggle();
    });
});