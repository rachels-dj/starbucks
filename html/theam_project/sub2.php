<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> HTML에 대하여 </title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/sub.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    
    
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>    
	
</head>
<body>

    <? include_once("header.php"); ?>
    <div class="navi">
        <span><img src="images/home.png" alt="홈" /></span>
        <img src="images/nav_r.png" alt=""/>
        <span>CSS</span>
        <img src="images/nav_r.png" alt=""/>
        <span class="last_navi">CSS 소개</span> 
    </div>  
    <div class="sub1_box">
    <div class="section">

        <div class="text_header">
            <h2><a class="colorChange" name=css1>CSS 소개</a></h2>
            <p class="tit2">! > 본 정보는 2016년 8월 5일에 최신화 된 정보입니다.</p>          
        </div>
        
        <div class="box-cont">
            <div class="txt-info line-non">
                <h4 class="title-orange colorChange">“CSS는 쉽게 HTML문서를<br>꾸밀 수 있게 도와줍니다.”</h4>   
                <p>
                종속형 시트 또는 캐스케이딩 스타일 시트(Cascading Style Sheets, CSS)는 마크업 언어가 실제 표시되는 방법을 기술하는 언어로, <br>
                HTML과 XHTML에 주로 쓰이며, XML에서도 사용할 수 있다. W3C의 표준이며, 레이아웃과 스타일을 정의할 때의 자유도가 높다.<br><br>

                마크업 언어가 웹사이트의 몸체를 담당한다면 CSS는 옷과 액세서리 같은 꾸미는 역할을 담당한다고 할 수 있다. 즉, HTML 구조는 <br>
                그대로 두고 CSS 파일만 변경해도 전혀 다른 웹사이트처럼 꾸밀 수 있다. CSS Zen Garden은 하나의 HTML(필요에 따라 최소한의 수정이 있다.)을 <Br>
                CSS만으로 얼마나 다양하게 표현할 수 있는지 알 수 있는 웹사이트이다.<br><br>

                현재 개발 중인 CSS3의 경우 그림자 효과, 그라데이션, 변형 등 그래픽 편집 프로그램으로 제작한 이미지를 대체할 수 있는 기능이 추가되었다. <br>
                또한 다양한 애니메이션 기능이 추가되어 어도비 플래시를 어느 정도 대체하고 있다.

                </p>
 
            </div>
            
        </div>
        
        <div class="text_header">
            <h2><a class="colorChange" name=css2>CSS 역사</a></h2>
            <p class="tit2">! > 본 정보는 2016년 8월 5일에 최신화 된 정보입니다.</p>
    
        </div>  
        
        <div class="box-cont">
            <div class="txt-info">
                <h4 class="title-orange colorChange">“CSS는 1994년 10월 10일,<br>하콤 비움 리(Hakon Wium Lie)가 처음 제안하였다.” 
 </h4>
                <h4>버전의 변화</h4>
                <p>
                    CSS는 지속적으로 새로운 버전이 나오고 있다. 1996년에 도입된 CSS 1은 CSS의 바탕이 되었다. CSS의 표준으로는 CSS 2.1이 있으며<br> 
                    이전 버전에 비하여 새로운 기능과 도구가 추가되었다. 대다수의 웹 브라우저는 CSS 2.1를 잘 지원한다.(인터넷 익스플로러의 경우, 버전 7이 되면서 CSS2.1을 지원한다.) <br>
                    현재 W3C에서는 CSS3을 표준으로 만들고 있다.<br><br>

                    CSS는 여러 수준과 프로파일을 가지고 있다. 각 수준의 CSS는 일반적으로 새로운 기능을 담고 있으며 CSS1, CSS2, CSS3, CSS4로 나뉜다. <br>
                    프로파일들은 일반적으로 특정한 장치나 사용자 인터페이스를 위해 만들어진 하나 이상 수준의 CSS의 하부 집합이다. <br>
                    현재 휴대용 장치, 프린터, 텔레비전 수상기를 위한 프로파일들이 있다.
                </p>
            </div>
            <p><img src="images/css_img.png" alt="" /></p>

            <div class="txt-info">
                <h4>CSS1</h4>
                <p class="css_p">첫 CSS 규격은 공식 W3C 권고안이 되었으며 그 이름은 CSS1이다. 1996년 12월에 발표되었다.
                </p>     
            </div>
            
            <div class="txt-info">
                <h4>CSS2</h4>
                <p class="css_p">CSS2는 W3C가 개발하였으며 1998년 5월에 권고안으로 발표되었다.</p>     
            </div>            

            <div class="txt-info">
                <h4>CSS3</h4>
                <p class="css_p">CSS3는 2005년 12월 5일 이후 개발 중에 있다. W3C CSS3 로드맵은 요약과 도입부를 제공하고 있다. 전체가 모듈화되어 사용자 에이전트가 모듈에 대한<Br> 
                모든 모듈을 지원하지 않거나 자유롭게 선택할 수 있도록 하고 있으며, 다른 세로 글쓰기와 HTML 이외의 규격에까지 관여하는 내용으로 되어 있다. 
                현재 어떤 모듈도 권고안까지 이른 것은 없다.<br>
                </p>     
            </div>
            
            <div class="txt-info">
                <h4>현재 상황</h4>
                <p>
                CSS2와 CSS3의 가장 큰 차이점은 CSS3가 모듈 기반으로 개발되고 있다는 점이다. 이것은 각종 브라우저나 디바이스가 필요에 따라 원하는<br> 
                CSS 모듈만을 탑재하거나 또는 필요한 모듈만을 빠르게 자주 업데이트 하는 것을 돕는다. CSS3는 text, fonts, color, backgrounds & borders, transforms, transitions, animaitons와 <Br>
                같은 종류의 모듈들을 추가로 개발하고 있다. <br><br>

                CSS3는 기존의 CSS2가 갖지 못했던 화려하고 역동적인 면모를 추가하여 포토샵과 자바스크립트 및 서버측 기술에만 완전히 의존하던 영역들을 개척했다. <br>
                상자의 크기에 따른 말줄임 표시, 투명한 배경, 그림자 효과, 둥근 모서리, 그라디언트, 도형의 회전과 비틀기, 애니메이션 효과 등이 가능해진 것이다. <Br>
                특히 그래픽 디자인에만 의존하던 영역이 CSS3만으로도 상당부분 가능해지면서 웹 사이트의 성능 향상에 크게 기여할 수 있게 되었다. 
                </p>     
            </div>            

            <div class="txt-info line-non">
                <h4>비전</h4>
                <p>인터넷 서비스의 하나인 월드 와이드 웹을 통해 볼 수 있는 문서를 만들 때 사용하는 프로그래밍 언어의 한 종류이다.<br />
                    특히 하이퍼텍스트를 작성하기 위해 개발되었으며, 인터넷에서 웹을 통해 접근되는 대부분의 웹 페이지들은 HTML로 작성된다.<br /><br />
                    HTML은 문서의 글자크기, 글자색, 글자모양, 그래픽, 문서이동(하이퍼링크) 등을 정의하는 명령어로서 홈페이지를 작성하는 데 쓰인다. <br />
                    HTML에서 사용하는 명령어는 태그(tag)라고 하는데 꺽쇠괄호"<>"를 사용하여 나타낸다. <br /><br />
                    일반적으로 태그는 시작과 끝을 표시하는 2개의 쌍으로 이루어져 있으나 "img", "br"등의 태그와 같이 시작태그만으로<br />
                    그 영향을 나타내는 경우도 있으며, 종료 태그의 이름은 슬래시 문자[/]로 시작된다.<br /><br />
                    이와같이 HTML로 작성된 문서를 HTML문서라 하며 이 HTML로 작성된 문서를 웹 브라우저가 해석하여 이용자에게 보여주게 된다.<br />
                    HTML에서는 문서가 별도의 코드(code)를 인식하여 완벽한 하이퍼텍스트를 만들 뿐만 아니라 단어 또는 단문을 인터넷의 다른 장소나 파일로 연결시킬 수 있다.<br /><br />
                    HTML은 전자 문서의 서식을 정의하기 위해 만들어졌으며, 국제표준 SGML의 부분 집합으로 정의되었다. <br />
                    HTML은 SGML에서 특히 하이퍼텍스트를 강조하여 만들어진 언어이며, 아스키코드로 된 일반적인 텍스트로 구성되었다.<br /><br />
                    이 언어는 별도 컴파일러가 필요치 않으며, 웹 브라우저에서 해석이 가능한 사용하기 쉬운 언어로 각광을 받고 있다.
                </p>     
            </div>
                          
             
        </div>    
                         
        
        <div class="submit-btn">
            <span>앗! 제가 아는 내용과 달라요!</span>
            <a href="#"><img src="images/submit-btn.gif"></a>
        </div>

    </div>
    </div>
   
    
    <? include_once("footer.php"); ?>
</body>
</html>