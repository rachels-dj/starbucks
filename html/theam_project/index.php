<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <title>Web cafe</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bxslider.css" />


    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/banner1.js"></script>
	<script type="text/javascript" src="js/banner2.js"></script>
	
    
        
</head>
<body>
    <!-- 헤더영역-->
    <? include_once("header.php"); ?>
    <!-- 헤더영역 끝-->

   <div class="section">
		<div id="banner">
			<div class="vis_frame">
				<ul>
					<li><a href="#"><img src="images/banner1.jpg" alt="배너1" /></a>
					<div class="youtube"></div>
					</li>
					<li><a href="#"><img src="images/banner2.jpg" alt="배너2" /></a></li>
					<li><a href="#"><img src="images/banner3.jpg" alt="배너3" /></a></li>
					<li><a href="#"><img src="images/banner4.jpg" alt="배너4" /></a></li>
				</ul>
			</div>
		</div>
		<div id="b_control">
			<a href="#play" class="play"><img src="images/play_btn.png" alt="재생" /></a>
			<a href="#stop" class="stop"><img src="images/stop_btn.png"  alt="멈춤" /></a>
		</div>
		<div id="b_bt">
			<a href="#left" class="left"><img src="images/left_btn.png" alt="이전 배너이미지" /></a>
			<a href="#right" class="right"><img src="images/right_btn.png" alt="다음 배너이미지" /></a>
		</div>
		
   </div>

   <div id = "movieClip">
	<iframe width="1200" height="800" src="https://www.youtube.com/embed/TU2jX1cyUXk" frameborder="0" allowfullscreen></iframe>
	<img class="close" src="images/close.png" alt="닫기" />
   </div>
   
   <div class="search">
		<div class="search_banner">
			<img src="images/gongyou.jpg" alt="웹캠페인1" class="active" />
			<img src="images/suji.jpg" alt="웹캠페인2" />
		</div>
       <div class="search_inner clearfix">
            <div>
                <p>
                <input type="text" placeholder="검색어를 입력해주세요.">
                </p>
                <a href="#"><img src="images/search.png" alt="검색" /></a>
            </div>
            <div class="search_loginbox">
                <ul class="clearfix">
                    <li><a href="login.php">로그인</a></li>
                    <li><a href="join.php">회원가입</a></li>
                </ul>
                <p class="login_text">회원가입으로 더 많은 정보를 얻으세요!</p>
            </div>
       </div>
   </div>

   
<!--      컨텐츠 시작-->
         
            
               
                     
   <div class="maincontent clearfix">
       <div class="mc_box box1">
           <div class="notice">
               <h3>
                   <img src="images/notice.png" alt="공지사항"/> NOTICE
                   <a class="more" href="#"><img src="images/more.png" alt="더보기"/ ></a>
               </h3>
               <img class="effect" src="images/img.png" alt=""/>
               <ul>
                   <li class="notice_header">2016 웹 컨퍼런스가 삼성동 서울 코엑스 7월 21일에 개최됩니다.</li>
                   <li class="notice_text">디자인 및 다양한 view환경을 고려하여 구성되어있으며, 기존보다 최신 정보 및 개발자를 위한 기술가이드도 찾기 쉽게 제작되는 내용에 의거하여 첨단 IT기술이 적용되는 컨퍼..</li>
                   <li class="notice_day">관리자 | <span>2016년 7월 12일</span></li>
                   
                   <li class="notice_header">새로운 웹 표준 모델을 제시하기위해 연구하고 노력하는 Start Up기업들</li>
                   <li class="notice_text">디자인 및 다양한 view환경을 고려하여 구성되어있으며, 기존보다 최신 정보 및 개발자를 위한 기술가이드도 찾기 쉽게 제작되는 내용에 의거하여 첨단 IT기술이 적용되는 컨퍼..</li>
                   <li class="notice_day">관리자 | <span>2016년 7월 10일</span></li>
                   
                   <li class="notice_header">카카오, 네이버, 다음이 새롭게 만드는 웹 세상을 경험하세요.</li>
                   <li class="notice_text">디자인 및 다양한 view환경을 고려하여 구성되어있으며, 기존보다 최신 정보 및 개발자를 위한 기술가이드도 찾기 쉽게 제작되는 내용에 의거하여 첨단 IT기술이 적용되는 컨퍼..</li>
                   <li class="notice_day">관리자 | <span>2016년 6월 17일</span></li>                 
               </ul>
           </div>
           <div class="link">
               <p class="nuli"><a href="#"><img src="images/nuli.png" alt="널리바로가기"/ ></a></p>
               <p class="darum"><a href="#"><img src="images/darum.png" alt="다룸바로가기"/ ></a></p>
               <p class="w3c"><a href="#"><img src="images/wc.png" alt="w3c바로가기"/ ></a></p>
               
           </div>
       </div>
       <div class="mc_box box2">
          <a class="more" href="#"><img src="images/more.png" alt="더보기"/ ></a>         
           <div class="box2_inner clearfix">
               <div class="photo"><a href="#"><img src="images/photo.png" alt="우수업체사진"/ ></a></div>
               <div class="photoText">
                   <h3><img src="images/connect.png" alt="" /> Connect</h3>
                   <img class="gimg" src="images/g_img.png" alt=""/ >
                   <ul>
                       <li class="nice_header"><a href="#">“6월 웹접근성 우수업체<br/>Crazy Developers”</a></li>
                       <li class="nice_text1"><a href="#">“웹 접근성과 웹표준, 요즘엔 필수로 지켜하는 사항들 아닌가요?”</a></li>
                       <li class="nice_text2"><a href="#">디자인 및 다양한 view환경을 고려하여 구성되어있으며, 기존보다 최신 정보 및 개발자를 위한 기술 가이드도 찾기 쉽게 제작되는 내용에 의거하여 첨단 IT기술이 적용되는 컨퍼..</a></li>
                       <li class="nice_day">커넥터지기 | <span>2016년 7월 12일</span></li>
                   </ul>
               </div>
           </div>
       </div>
       <div class="mc_box box3 clearfix">
           <div class="box3_inner">
                <a class="more" href="#"><img src="images/more.png" alt="더보기"/ ></a>              
               <div class="mobile">
                   <span><img src="images/mobile.png" alt="모바일"></span>
                   <h3>웹접근성<br>모바일가이드</h3>
                   <p><img class="gimg" src="images/g_img.png" alt=""/ ></p>    
                   <ul>
                       <li><a href="#"><img src="images/mobilephoto.png" alt=""/></a></li>
                       <li class="mobile_header"><a href="#">웹 접근성 모바일 가이드로<br>더욱 더 쾌적한 모바일웹 환경을 만드세요.</a></li>
                       <li class="mobile_text"><a href="#">디자인 및 다양한 view환경을 고려하여 구성되어있으며, <br />기존보다 최신 정보 및 개발자를 위한 기술 가이드도 찾기 쉽게 <br />제작되는 내용에 의거하여 첨단 IT기술이 적용되는 컨퍼..</a></li>         <li class="mobile_send"><a href="#">모바일 가이드 보러가기</a></li>                    
                   </ul>
               </div>
               
               <div class="snippet">
                    <a class="more" href="#"><img src="images/more.png" alt="더보기"/ ></a>                   
                   <div class="snippet_inner">
                       <h3><img src="images/snippet.png" alt=""/> Snippet</h3>    
                       <p><img class="gimg" src="images/g_img.png" alt=""/ ></p>    
                       <ul>
                           <li class="snippet_header"><a href="#">금주의 CSS활용예제는?</a></li>
                           <li class="snippet_text"><a href="#">w3schools.com 에서 사용하는 마크업 코딩 예제로 한단계 스킬업하세요!</a></li>                           
                       </ul>
                   </div>  
               </div>
           </div>
           <div>
               <div class="jquery">
                    <a class="more" href="#"><img src="images/more.png" alt="더보기"/ ></a>                   
                   <h3><img src="images/jQuery.png" alt=""/>jQuery</h3>
                   <p><img class="gimg" src="images/g_img.png" alt=""/ ></p>    
                   <ul>
                       <li class="jquery_header"><a href="#">금주의 제이쿼리 실습예제는?</a></li>
                       <li class="jquery_text"><a href="#">var,if,eq 그리고 함수와 연산자로 배우는<br>
                       제이쿼리 중급자 과정으로 스펙업!</a></li>
                   </ul>
               </div>
               <div class="ad">
                   <div class="noticeWrap">
                       <ul class="noticeBanner">
                           <li class="ban1">배너1</li>
                           <li class="ban2">배너2</li>
                           <li class="ban3">배너3</li>
                       </ul>
                   </div>   
                   <ul class="noticebutton">
                       <li class="on">버튼1</li>
                       <li>버튼2</li>
                       <li>버튼3</li>
                   </ul>
               </div>
           </div>
           
       </div>
   </div> 
   
<!--    끝 ! 컨텐츠 -->
   
   <div class="spon">
       <img src="images/spon.png" alt=""/>
   </div>
   
   
   <div class="footer">
   <div class="footer_inner clearfix">
       <p><img src="images/flogo.png" alt="" /></p>
       <div class="foot_menu clearfix">
           <ul>
               <li><a href="#">나눔</a></li>
                <li><a href="#">UI라이브러리</a></li>
                <li><a href="#">FE개발자도구모음</a></li>
                <li><a href="#">Nwagon</a></li>
                <li><a href="#">웹접근성 가이드</a></li>
           </ul>
           <ul>
               <li><a href="#">나눔</a></li>
                <li><a href="#">UI라이브러리</a></li>
                <li><a href="#">FE개발자도구모음</a></li>
                <li><a href="#">Nwagon</a></li>
                <li><a href="#">웹접근성 가이드</a></li>
           </ul>
           <ul>
               <li><a href="#">나눔</a></li>
                <li><a href="#">UI라이브러리</a></li>
                <li><a href="#">FE개발자도구모음</a></li>
                <li><a href="#">Nwagon</a></li>
                <li><a href="#">웹접근성 가이드</a></li>
           </ul>
       </div>
       <div class="copy">
            <div class="social">
               <a href="#"><img src="images/facebook.png" alt="페이스북"></a>
               <a href="#"><img src="images/tiw.png" alt="트위터"></a>
            </div>
            <p>Copyright NTS CORP ALL Right</p>
       </div>
   </div>
</div>     
</body>
</html>




