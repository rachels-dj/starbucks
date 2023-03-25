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
	<script type="text/javascript" src="js/banner1.js"></script>
	<script type="text/javascript" src="js/banner2.js"></script>	
	
</head>
<body>

    <? include_once("header.php"); ?>
    <div class="navi">
        <span><img src="images/home.png" alt="홈" /></span>
        <img src="images/nav_r.png" alt=""/>
        <span>웹접근성</span>
        <img src="images/nav_r.png" alt=""/>
        <span class="last_navi">웹접근성 소개</span> 
    </div>   
    <div class="sub1_box">
    <div class="section">

        <div class="text_header">
            <h2 class="skyblue"><a class="colorChange" name=web1>웹접근성 소개</a></h2>
            <p class="tit2">! > 본 정보는 2016년 8월 5일에 최신화 된 정보입니다.</p>          
        </div>
        
        <div class="box-cont">
            <div class="txt-info line-non">
                <h4 class="title-orange skyblue colorChange">“웹 접근성이란<br>모두에게 기회를 주는 것 ”</h4>
                <p>
                비장애인은 PC든 스마트폰이든 전혀 불편함 없이 활용한다. 눈으로 보고, 귀로 듣고, 키보드나 마우스를 활용해 기기를 제어한다.<Br> 
                하지만 접근성에 제한을 느끼는 장애인은 이 당연한 행동을 하기 위해서 많은 문턱을 넘어야 한다. <br><br>

                시각장애인은 음성만 듣고 서비스를 이용해야 한다. 높은 해상도를 바탕으로 한없이 작아지는 버튼과 링크는 누군가에게는 클릭이 갈수록 어려워짐을 의미한다. <br>
                없으면 불편함을 느낄 만큼 필수 액세서리인 마우스나 트랙패드는 운동 장애를 가진 사람에게는 아무런 쓸모가 없는 입력 기기다.<br><br>
                <br>
                <span><img src="images/web_img01.png" alt=""/></span>
                <Br><Br><br>

                장애나 나이와 관계없이 누구나 어떤 서비스를 활용할 수 있어야 한다는 개념을 ‘접근성’이라고 한다. ‘배리어 프리(barrier free)’ 혹은 ‘보편적 설계’라고 표현하기도 한다. <br>
                일상에서도 접근성을 높이기 위한 사소한 장치들을 만나볼 수 있다. 건물 턱 없애기, 저상버스 확충하기, <br>
                휠체어가 올라갈 수 있는 경사 만들기, 저시력자를 위한 확대경 구비 등이 해당한다.<br><br>

                모바일이나 웹서비스도 마찬가지다. 정보통신 서비스 제공자는 장애인의 접근성 차별 금지와 의사소통의 편의 제공을 위해 표준 텍스트 파일, 동영상 자막 등 <br>
                편의 제공 기술 방안을 마련해서 서비스를 제공해야 한다. 장애인과 비장애인이 동등하게 서비스에 접근할 수 있게 만들어줘야 한다. <br>
                이런 맥락에서 제시되는 개념이 ‘웹 접근성’(Web Accessibility)이다.
                </p>     
            </div>
            
        </div>
        
        <div class="text_header">
            <h2 class="skyblue "><a class="colorChange" name=web2>웹접근성과 법률</a></h2>
            <p class="tit2">! > 본 정보는 2016년 8월 5일에 최신화 된 정보입니다.</p>
    
        </div>  
        
        <div class="box-cont">
            <div class="txt-info">
                <h4 class="title-orange skyblue colorChange">“웹의 힘은 보편성에 있으며, 장애에 구애 없이<br>누구나 손쉽게 접근할 수 있는 공간”</h4>
                <p>
                웹 접근성은 장애인이나 고령자는 물론 어떤 사용자들도 웹사이트에서 제공하는 정보를 비장애인과 동등하게 접근하고 활용할 수 있도록 하자는 개념이다.<br> 
                월드 와이드 웹을 창시한 팀 버너스 리는 웹을 “웹의 힘은 보편성에 있으며, 장애에 구애 없이 누구나 손쉽게 접근할 수 있는 공간”으로 정의했다. <br><br>

                또한, W3C에서 만든 웹 접근성 이니셔티브(WAI : Web Accessibility Initiative)에 따르면 웹 접근성은 ‘장애를 가진 사람들도 웹을 이용할 수 있도록 보장하는 것으로, <Br>
                장애를 가진 사람들이 웹 콘텐츠를 인지하고(Perceivable), 운영하고(Operable), 이해하고(Understandable), 기술에 상관없이 이용할 수 있도록 <br>
                견고하게(Robust) 웹 콘텐츠를 만드는 것’으로 정의된다. 국내에도 웹 접근성과 관련된 법 조항이 있다.        <br>         
                </p>     
            </div>


            <div class="txt-info">
                <h4>장애인 복지법 제 22조(정보에의 접근)</h4>
                <p class="web_p">① 국가와 지방자치단체는 장애인이 정보에 원활하게 접근하고 자신의 의사를 표시할 수 있도록 전기통신, 방송시설 등을 개선하기 위하려 노력하여야 한다.</p> 
                <h4>장애인차별금지 및 권리구제등에 관한 법률 제20조(정보접근에서의 차별금지)</h4>
                <p class="web_p">① 개인·법인·공공기관(이하 이 조에서 "개인 등"이라 한다)은 장애인이 전자정보와 비전자정보를 이용하고 그에 접근함에 있어서 장애를 
                이유로 제4조 제1항 제1호 및 제2호에서 금지한 차별행위를 하여서는 아니 된다..</p> 
                <h4>국가정보화 기본법</h4>
                <p class="web_p_last">제32조(장애인ㆍ고령자 등의 정보 접근 및 이용 보장)
                ① 국가기관등은 인터넷을 통하여 정보나 서비스를 제공할 때 장애인·고령자 등이 쉽게 웹사이트를 이용할 수 있도록 접근성을 보장하여야 한다.</p>                                     
            </div>

            <div class="txt-info line-non">
               <Br><br>
                <p>국내에서도 장애인차별금지법을 단계적으로 적용하면서 2013년 4월11일 이후 모든 공공기관과 법인의 웹사이트에서 웹 접근성 준수가 의무화됐다.<br> 
                장애인이 차별을 받았거나 의무 이행이 되지 않으면 장애인차별금지법에 따라 권리구제를 신청할 수 있다.<br><br>

                대부분의 웹 접근성 관련 논의는 장애인에게 초점이 맞춰져 있다. 그러나 웹 접근성은 비단 장애인만을 위한 개념이 아니다. 보다 많은 사람이 <br>
                손쉽게 웹을 활용할 수 있게 구현하자는 생각이 바탕에 깔렸다.

                </p> 
            </div>
                                
             
        </div>  
                       
        <div class="text_header">
            <h2 class="skyblue"><a class="colorChange" name=web3>웹 접근성 준수시 고려 사항</a></h2>
            <p class="tit2">! > 본 정보는 2016년 8월 5일에 최신화 된 정보입니다.</p>
    
        </div>  
        
        <div class="box-cont">
            <div class="txt-info">
                <h4 class="title-orange skyblue colorChange">“어떻게 제작해야 웹 접근성에 준수하여<br> 웹페이지를 제작할 수 있을까?”</h4>
                <p><img src="images/web_img02.png" alt=""/></p>     
            </div>


            <div class="txt-info">
                <h4>만약 저시력자가 웹을 이용한다면?</h4>
                <p class="web_p">저시력자인 A는 스마트폰을 눈에 거의 붙이듯이 봐야만 볼 수 있다. 그러나 흰 바탕에 검은 글씨로 된 화면을 오래 보면 눈이 너무 아프다.마치 형광등을 계속 쳐다보고 있는 느낌이다.</p> 
                <h4>시각장애인이 웹을 이용한다면?</h4>
                <p class="web_p">눈이 보이지 않는 B는 화면을 읽어주는 서비스를 통해서만 스마트폰을 활용할 수 있다.<Br> 
                귀로 안내를 듣고 있는데 갑자기 배경음이 나오거나 광고음악이 흘러나오면 가이드 음성을 들을 수 없다.</p> 
                <h4>신체가 불편한 지체장애인이 웹을 이용한다면?</h4>
                <p class="web_p_last">지체장애를 가지고 있는 D는 탭이 아닌 확대, 축소 등의 제스처를 사용하기 불편하다.<br> 
                서비스 활용을 위해 인증번호를 요청했는데, 응답시간이 30초라 입력하기에 너무 짧다.
                </p>                                     
            </div>

            <div class="txt-info line-non">
               <Br><br>
                <p>
                    위 사례는 웹 접근성이 미비한 사이트에서 실제로 사용자가 겪을 수 있는 불편함이다. 웹 접근성의 구체적인 항목은 다음과 같다.<br> 
                    우선, 저시력 시각장애인이 콘텐츠를 잘 볼 수 있도록 명도 대비를 높이는 ‘고대비’가 있다. 전맹 시각장애인을 위한 대체 텍스트 및 초점 이동을 지원하는 것도 중요한 항목이다.<br><br>

                    대체텍스트란 이미지를 설명하는 텍스트를 말한다. 일반 사진은 물론, 글자가 포함된 이미지라고 하더라도 결국 이미지이기 때문에 텍스트가 없으면 기기나 <br>
                    서비스가 제공하는 기능으로 사진을 읽을 수 없다. 이를 막기 위해 해당 이미지가 어떤 내용을 가졌는지 설명하는 게 대체 텍스트다.<br><br>

                    초점 이동은 서비스 활용에 도움이 되는 순서대로 초점이 옮겨가는 것을 말한다. 예컨대 웹사이트 첫 화면에서 탭 키를 누르면 아이디 입력창으로 이동한다.<br>
                    그다음 탭을 누르면 비밀번호로 이동한다. 그다음이 로그인, 로그인 유지 등의 순서다. 이렇게 초점이 차례로 이동해야 시각장애가 있는 사람들도 로그인하고 <br>
                    서비스를 활용할 수 있다. 예컨대 아이디 입력 후 초점이 로그인 탭으로 간다면 로그인을 할 수 없다. 이렇게 활용이 가능한 순서로 구현하는 게 초점 이동이다. <br>
                    메뉴 탭도 차례로 이동한다. 화면을 보지 않더라도 순서만으로 활용할 수 있다. PC는 키보드, 모바일은 터치 등의 입력 방법에 맞춰서 재현 방법이 달라진다.<br><br><br>


                    확대 축소 버튼을 한 번 터치 함으로써 복잡한 동작 기반 기능이 단순한 누르기 동작으로 대체 영상이나 음성 콘텐츠에 자막이나 수화 등 대체 수단을 넣는 것도 <Br>
                    청각장애인을 위해 필요하다. 운동 장애로 입력 기기 활용에 어려움을 겪는 사용자를 위한 방안도 있다. <Br><br>

                    파킨슨병, 근육병, 뇌성마비, 뇌졸중과 같은 조건으로 인한 근육 속도 저하, 근육 제어 손실로 말미암아 손을 쓰기 어렵거나 쓸 수 없는 상황을 고려한다.<br>
                    이 외에도 웹 접근성에는 다양한 항목이 있다. 예를 들면 이런 것들이다. 광과민성 환자가 발작을 유발하지 않도록 콘텐츠를 1초에 3회 이상 깜빡이지 않게 만든다. <br><Br>

                    깜빡거리는 콘텐츠는 비장애인에게도 가독성에 불편함을 준다. 배경음(BGM)을 금지하기도 한다. 음성 가이드로 웹을 이용하는 사람들에게 BGM은 <Br>
                    오히려 콘텐츠 소비를 방해하는 소음이다. 키보드만으로도 사용할 수 있게 만드는 것 역시 중요하다. <br><br>

                    눈으로 볼 수 있는 화면을 상정하고 사용하는 마우스가 아니라 확실한 키가 존재하는 키보드를 가지고도 서비스를 활용할 수 있게 만든다는 의미다. <Br>
                    모바일에서는 대부분 비슷하지만, 사용 경험을 고려해 터치 동작을 지원하는 것도 웹 접근성 항목에 포함돼 있다.<br><br>                
                </p>
                
                <h4 class="title-orange skyblue colorChange">“어떻게 제작해야 웹 접근성에 준수하여<br> 웹페이지를 제작할 수 있을까?”</h4>
                <div class="txt-info line-non">
                    많은 웹사이트는 웹 접근성의 측면에서 봤을 때 여전히 상당히 미비하다. 소수를 대상으로 하는 서비스는 돈이 안 되기 때문에 우선순위에서 밀리기 쉽다.<br> 
                    어느 정도 안정화된 서비스가 아니라면, 웹 접근성은 서비스 운영자에겐 추가적인 부담으로 여겨지기 십상이다. 이런 이유로 웹 접근성은 여전히 장애인을 위한 ‘배려’로 여겨진다.<Br><br>

                    그러나 웹 접근성을 준수하는 웹사이트는 비단 장애인뿐 아니라 누구나 편리하게 사용할 수 있다는 웹사이트라는 점을 생각해야 한다. 누구나 웹 앞에서 장애인이 될 수 있다. <br>
                    웹 접근성은 ‘배려’보다는 사용자에게 좀 더 편리한 서비스를 제공한다는 차원에서 접근해야 한다.                                   
                </div>                 
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