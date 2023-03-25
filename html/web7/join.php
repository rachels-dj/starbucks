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
		/*  1. 우편번호검사=>http://postcode.map.daum.net/guide */
		/*  var  mycat = {"name":"sally","age":"3"};   => JavaScript Object Notation      */
		$(function(){
			$("#postcode").click(function( ){
				new daum.Postcode({
					oncomplete: function(data) {
						$("#post1").val( data.postcode1  );      
						$("#post2").val( data.postcode2  );    
						$("#address").val( data.address  ); 
						$("#address2").focus();
					}
				}).open();
			});
		});



	</script>
 </head>
 <body>
	<?php include "./inc/header.php"; ?>
	<div  class="basic">
		<h3>회원가입</h3>
		<form  action="./join_process.php"  method="post"   id="joinform">
		  <fieldset>
		  <legend>회원가입</legend>
				<p><strong>*</strong> 표기가 된 항목은 필수 입력사항이므로 꼭 입력을 해주셔야 합니다.</p>
				<p>
					<label for="wname"><strong>*</strong>이름</label><input type="text"   id="wname"  name="wname" placeholder="이름을 입력해주세요"   required="required" />
				</p>
				<p>
					<label for="wid"><strong>*</strong>아이디</label><input type="text"   id="wid"  name="wid" placeholder="아이디를 입력해주세요"   required="required" />
					<input type="button"  value="아이디중복체크" id="iddouble" />
					<script>
						$(function(){
							$("#iddouble").click(function(){
								if($("#wid").val() == "" ){  alert('빈칸입니다.');  $("#wid").focus();   return  ;}
								$.ajax({
									url:"./iddouble.php" , type:"get" , dataType:"text" , data:{"wid": $("#wid").val() } , 
									success:function(data){   
											if( data == "not" ){   
												alert("이미사용중입니다.\n확인바랍니다.");    
												$("#wid").val("");  $("#wid").focus();
											}else{
												alert("사용가능합니다.");
											}
									},
									error:function( jqXHR, textStatus, errorThrown ){   
											$(".iddouble_result").html( "ERROR" );  
									}
								});
							});
						});
					</script>
				</p>
				<p>
					<label for="wpwd"><strong>*</strong>비밀번호</label><input type="text"   id="wpwd"  name="wpwd" placeholder="비밀번호를 입력해주세요"   required="required" />
				</p>
				<p>
					<label for="wemail"><strong>*</strong>이메일</label><input type="text"   id="wemail"  name="wemail" placeholder="이메일을 입력해주세요"   required="required" />
				</p>
				<p>
					<label for="wphone"><strong>*</strong>연락처</label>
					<input type="text"   id="wphone"  name="wphone"  required="required" />-<input type="text"   id="wphone2"  name="wphone2"  title="연락처 두번째 자리"  required="required" />-<input type="text"   id="wphone3"  name="wphone3"     title="연락처 세번째 자리"  required="required" />
				</p>
				<p>
					<strong  class="label_strong">주소</strong>
				    <span>
						<label for="post1"> 우편번호 </label>
						<input type="text"   id="post1"  name="post1"  required="required" /> - <input type="text"   id="post2"  name="post2"  title="우편번호두번째자리"  required="required" /><input type="button"  value="우편번호찾기"  id="postcode" />
					</span>
					<span> 
						<label for="address"> 상세주소 </label>
						<input type="text"   id="address"  name="address"/> - <input type="text"   id="address2"  name="address2" title="상세주소두번째자리"/>
					</span>
				</p>
				<p  class="center">
					<input type="submit"  value="전송" /><input type="reset"   value="취소"/>
				</p>
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