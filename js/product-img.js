    $(document).ready(function(){

      //click() 
      $(".l-yourPick-img ul li a").click(function(){
        $(".l-yourPick-img img").attr("src",$(this).attr("href"));
        return false;  //<a>태그에 링크 기능을 차단시킴(자바스크립트가 실행되기전에 a링크가 먼저 실행됨)
      });

    });