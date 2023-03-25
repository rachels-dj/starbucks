<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
	<style>
		*{   margin:0;   padding:0; }   li{  list-style-type:none; }     img{  border:0 none; }
		
		body{    font-size:100%;   color:#333;   line-height:23px;   font-family:"Malgun Gothic", sans-serif;   }
		a:link   , a:visited {   color:#333;    text-decoration:none;   }
		a:hover, a:focus   {   color:red;      text-decoration:underline;   }

		.basic{     width:70%; margin:100px auto;   padding:5%;     }
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

		/*  bwrite.php */
		body{  background-color:white; }
		.basic{   border-top:5px solid #ddd; }
		h3{   border-left:10px solid crimson; text-indent:1em; }
		.basic.bwrite  form {  margin:20px auto; border-left:10px solid #eee;   padding: 0 2%; }
		.basic.bwrite  form  p{  margin:1% 0;   border-bottom:1px solid #ddd;  padding:1%;  }
		.basic.bwrite  form  label{     display:inline-block;   width:20%;   color:#123;   font-weight:bold;    font-size:85%;   }
		.basic.bwrite  form  input{   border:1px solid #ccc;  padding:2px; }
		.basic.bwrite  form p span {   display:inline;    font-size:80%;   margin:0 10px;   color:crimson;  font-weight:bold;  }
		.basic.bwrite  form textarea{  margin-left:20%;   width:60%;   }
	</style>
 </head>
 <body>
 	<?php include "./inc/header.php"; ?>
	<div  class="basic  bwrite">
		<h3> PHP MYSQL 멀티게시판제작</h3>
		<form  action="./binsert.php"    method="post"     enctype="multipart/form-data">
			<fieldset>
			<legend>글쓰기</legend>
			<p><label for="btitle">제목</label><input type="text" id="btitle" name="btitle" placeholder="제목을 입력해주세요"/></p>
			<p><label for="bname">이름</label><input type="text" id="bname" name="bname" placeholder="이름을 입력해주세요"/></p>
			<p><label for="bemail">이메일</label><input type="email" id="bemail" name="bemail" placeholder="이메일을 입력해주세요"/></p>
			<p><label for="bpass">비밀번호</label><input type="password" id="bpass" name="bpass" placeholder="비밀번호 입력해주세요"/><span>* 수정, 삭제시 필수!</span></p>
			<p><label for="bfilename">첨부파일</label><input type="file" id="bfilename" name="bfilename"/></p>
			<p><label for="bcontent">내용</label><textarea id="bcontent" name="bcontent"  cols="60" rows="5"></textarea></p>
			<p  class="center"><input type="submit"  value="글쓰기"/><input type="reset"  value="취소"/><input type="button"  value="목록"  onclick="history.go(-1);"/></p>
			</fieldset>
		</form>
	</div>
 </body>
</html>
