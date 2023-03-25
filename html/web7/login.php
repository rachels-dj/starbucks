<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
	<style>
		/*  1) reset.css     크로스브라우징: 모든태그에 여백빼기 */
		/*  2) reset.css     리스트의 불릿기호 빼기 */
		/*  3) reset.css     img 선빼기 */
		*{   margin:0;   padding:0; }   li{  list-style-type:none; }     img{  border:0 none; }
			/*  4) base.css      body에 기본글꼴 설정 */
			/*  5) base.css      a태그에 글꼴설정 */
		
		body{    font-size:100%;   color:#333;   line-height:23px;   font-family:"Malgun Gothic", sans-serif;  background-color:#eee;  }
		a:link   , a:visited {   color:#333;    text-decoration:none;   }
		a:hover, a:focus   {   color:red;      text-decoration:underline;   }

		.basic{  background-color:#fff;   border-top:5px solid #ddd;   width:70%; margin:100px auto;   padding:5%;     }
		form{  width:80%; margin:0 auto;   font-size:100%;  }
		fieldset{  border:0 none;  }
		legend{  font-size:0; line-height:0;  width:1px;   height:1px;   overflow:hidden;      position:absolute; left:-9999%; }
		h3{  margin:10px  0;  }
		form p{   margin-bottom:2%; }
		label{   width:20%;   display:inline-block;    color:#333;   font-size:90%;     }
		input{  border:1px solid #ccc;    width:38%;  padding:2px;   font-size:70%; }
		label , input{  vertical-align:middle; }
		input#wphone, input#wphone2 , input#wphone3 , #post1 , #post2{      width: 20%;  }
		.label_strong { display:block;   color:#333;   font-size:90%;    font-weight:normal; }
		strong{  color:crimson; margin:0 2px;   }
		p span{  display:block; width:100%; }
		input[type="button"] , input[type="reset"] , input[type="submit"] 
		{  width:20%;   margin:0 6px;     border:1px solid crimson;   color:crimson;  background-color:white;  }

		input[type="submit"] {  color:white;  background-color:crimson; }

		input[type="button"]:hover, 		input[type="button"]:focus,
		input[type="reset"]:hover, 		    input[type="reset"]:focus{   color:white;  background-color:crimson;  }
		input[type="submit"]:hover, 		input[type="submit"]:focus  {  color:crimson;  background-color:white; }
		.center{  text-align:center; }
		#address  ,  #address2{      width: 35%; }
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<script>
		$( function(){      
			$("#loginform").submit(function(){
					if(  $("#userid").val()  == "" ){    
								alert("아이디칸이 빈칸입니다.\n확인해주십시오");    // \n 한줄띄기
								$("#userid").focus();  return false;    
					}
					if(  $("#userpass").val()  == "" ){    
								alert("비밀번호칸이 빈칸입니다.\n확인해주십시오");    // \n 한줄띄기
								$("#userpass").focus();  return false;    
					}
			});	
		});
	</script>
 </head>
 <body>
	<?php include "./inc/header.php"; ?>
     <div  class="basic">
		<h3>LOGIN</h3>
        <form  action="./login_process.php"  method="post"  id="loginform">
           <fieldset>
			<legend> PLUS</legend>
			<p><label   for="userid" >아이디 </label><input  type="text"  id="userid"  name="userid"  placeholder="아이디입력해주세요"  /> </p>
			<p><label   for="userpass" >비밀번호 </label><input  type="password"  id="userpass"  name="userpass"    placeholder="비밀번호입력해주세요" /></p>
			<p> <input  type="submit"  value="LOGIN"  /></p>
		   </fieldset>
		</form>
	</div>
 </body>
</html>
<!--
	####1   회원가입
		# M : db명 web7   / table명:webinfo
		# V :   join.php[회원가입폼]				my.php[회원의 정보출력  * ]
		# C :			   join_process.php[회원가입처리]
	####2  로그인
		# M : db명 web7   / table명:webinfo
		# V :   login.php[회원가입폼]	 ↓			index.php[메인페이지 ]
		# C :			   login_process.php[회원가입처리]   ↑  ( 알림창 ) 
-->