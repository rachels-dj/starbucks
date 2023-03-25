<?php 
	header("Content-type:text/html; charset=utf-8");
	include "./inc/db_info.php";
	$bno = $_GET['bno']; 
?>
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
		h3{   border-left:10px solid crimson; text-indent:1em; }
		.basic.bdetail    {  margin:100px auto; border-left:10px solid #eee;   padding: 0 2%; }
		.basic.bdetail    p{  margin:1% 0;   border-bottom:1px solid #ddd;  padding:1%;  }
		.basic.bdetail    strong{     display:inline-block;   width:20%;   color:#123;   font-weight:bold;    font-size:85%;   }
		.basic.bdetail    span{  display:inline-block;   width:60%; }
		.basic.bdetail  a:link, 		.basic.bdetail a:visited{   margin:0 6px;     border:1px solid crimson;   color:crimson;  background-color:white;  padding:5px;  }
		.basic.bdetail  a:hover, 		.basic.bdetail a:focus{ color:white;  background-color:crimson;  text-decoration:none; }
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 </head>
 <body>
	<?php include "./inc/header.php"; ?>
	<div  class="basic  bdetail">
<?php  	$result = mysql_query("SELECT * FROM multiboard WHERE bno='$bno' ") or  die( mysql_error() );
			$row = mysql_fetch_array(  $result );
?>
		<h3> PHP MYSQL 멀티게시판제작</h3>
		<p><strong>제목</strong>    <span><?=$row['btitle']?></span></p>
		<p><strong>이름</strong>    <span><?=$row['bname']?></span></p>
		<p><strong>이메일</strong> <span><?=$row['bemail']?></span></p>
		<p><strong>조회수</strong> <span><?=$row['bview']?></span></p>
		<p><strong>날짜</strong>    <span><?=$row['bdate']?></span></p>
		<p><strong>내용</strong>    <span><?=nl2br($row['bcontent'])?></span></p>
		<p>
			 <strong>첨부파일</strong>
			 <span><?php  if( !empty($row['bfilename']) ){  ?><img src="./file/<?=$row['bfilename']?>"  alt=""/> <?php }?> </span>
		</p>

		<p  class="center">
						<a href="./board.php">[목록보기]</a>
						<a href="./bedit.php?bno=<?=$bno?>">[수정]</a>
						<a href="#"   id="bdelete">[삭제]</a>
						<input type="password"  id="pass"  title="삭제에필요한 비밀번호 입력받기" placeholder="비밀번호입력해주세요">
						<input type="button"      id="check"  title="확인버튼누르면ajax로 비밀번호넘기고 삭제" value="확인">
						<input type="hidden"      id="bnopass"   value="<?=$bno?>">
						<script>
							$(function(){
								$("#pass").css({ "padding":"1%" ,"width":"150px"});
								$("#check").css({ "padding":"1%" ,"width":"150px"});
								$("#pass  ,  #check").hide();
								$("#bdelete").click(function(e){   e.preventDefault();      
								$("#pass  ,  #check").slideToggle();    });

								$("#check").click(function(e){
									alert(  $("#pass").val()  + "/ " + $("#bnopass").val() +   '연결완료');
									e.preventDefault();  
									$.ajax({
										url:"./bdelete.php" , type:"post" , dataType:"text" ,  
										data:{"bpass":$("#pass").val() , "bno":$("#bnopass").val()} , 
										success:function(data){  
											if(data =="ok"){
												alert("삭제를 완료했습니다."); 
												location.href="./board.php";
											}else{  alert("비밀번호를 확인해주세요");  }
										} , 
										error:function(){   alert("관리자에게 문의바랍니다.");  }
									});
								});
							});
						</script>
		</p>
		</form>
	</div>
 </body>
</html>
<?php   mysql_query("UPDATE  multiboard  SET  bview=bview+1 WHERE  bno='$bno'")  or  die(mysql_error()); ?>
<?php   mysql_close($conn);   ?>