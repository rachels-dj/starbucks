<!--  #### HEADER.PHP  START  -->
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>MULTIBOARD</title>
   <!-- style , script 파일분리할것.  -->
  <style>
		/*  RESET */
		*{   margin:0;   padding:0;   } 	li{   list-style-type:none;   }		img{  border:0 none; }
		html, body{ height:100%;   }
		/*  BASE */
		body{   font-family:"Malgun Gothic" ,  sans-serif;   color:#333; font-size:90%;   width:100%; height:100%; }
		a:link, a:visited{   color:#333; text-decoration:none; }
		a:hover, a:focus{  color:#f00;   text-decoration:underline; }
		/*  LAYOUT - HEADER */
		#wrapper{  width:80%; height:100%; margin:0 auto;}
		#wrapper h1{  padding:10px; }
		.info{  text-align:right;   padding:2%; }
		.info  li{  display:inline;  }
		.info  li a:link, 		.info  li a:visited{   margin:0 1%; }
		.basic{   width:100%;   height:80%; }
		#footer{  text-align:center;  background-color:#333;    color:#eee; padding:2%;  }
		
		/*  POPUP */
		.popup{  width:300px; height:300px;   position:fixed;   top:20%; left:10%;  border:10px solid #123;  border-radius:50%; transition:all 0.3s  ease-in-out  0.1s; }
		.popup:hover, 		.popup:focus{  border-color:crimson;    }
		.popup h3{  text-align:center;   line-height:70px;  }
		.popup p{        padding:0 10%;    line-height: 20px;   font-size: 80%;   text-align:center;}
		.popup p img{  width:30%; }  
		.popup  label, .popup  input{  vertical-align:middle; }
  </style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="./js/cookies.js"></script>
    <script>
		//////// 1
			function ctrolcookies(){
				if(    $("#subpop:checked").length  == 1    ){  setCookie("subpop", "done", 1); 	}
				$(".popup").hide();
			}
		//////// 2
		$(function(){
			if(      getCookie("subpop") == "done" ){    $(".popup").hide();    }
			else{    $(".popup").show();      }
		});
	</script>
 </head>
 <body>
	<div  id="wrapper">
		<header id="header">
			<h1><a href="./index.php">WEB7</a></h1>
			<ul  class="info">
				<li><a href="./login.php">LOGIN</a></li>
				<li><a href="./join.php">JOIN</a></li>
				<li><a href="./my.php">MYPAGE</a></li>
				<li><span style="color:crimson;">홍길동</span>님! 환영합니다.<a href="./logout.php">LOGOUT</a></li>
			</ul>
		</header> <!-- header END -->
<!--  #### HEADER.PHP  END  -->
		<section  class="basic">	
		

		</section><!-- basic END -->
	<!-- 공지사항 START  -->
		<div   class="popup">
			<h3>NOTICE</h3>
			<p> 
				<span>본사이트는 상업적목적이 아닌</span>
				<span>개인 포트폴리오 용도로 제작되었으며</span>
				<span>홈페이지의 일부내용과 기타이미지 등은</span>
				<span>그 출처가 따로 있음을 밝힙니다. </span>
			</p>
			<p><img src="images/QRCodeImg.gif"  alt=""/></p>
			<p>
				<input type="checkbox" id="subpop"    name="subpop"   title="오늘하루동안 이창 열지 않음" onclick="ctrolcookies()"/>
				<label for="subpop">오늘하루동안 이창열지 않음.</label>
				<a href="#"   onclick="ctrolcookies();  return false;">[닫기]</a>
			</p>
		</div>
	<!-- 공지사항 END  -->

<!--  #### FOOTER.PHP  START  -->
		<footer id="footer" > Dazzfriends  copyrights&copy; all rights reserved.</footer><!-- footer END -->
	</div><!-- WRAPPER END -->
  </body>
 </html>
<!--  #### FOOTER.PHP  END  -->