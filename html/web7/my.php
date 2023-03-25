<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
	/* reset.css   */
	*{  margin:0; padding:0;  }        li{  list-style-type:none;  }         img{  border:0 none; }
	/*   base.css  */
	body{   font-size:90%;   line-height:1.2em;   font-family:"Malgun Gothic" , sans-serif;   background-color:#eee;  }
	a:link, a:visited  {   color:#333;  text-decoration:none;   }
	a:hover, a:focus{   color:#333;  text-decoration:underline;   }
	.basic{   width:80%;  background-color:#fff;  border-top:5px solid #ddd;   margin:50px auto;  padding:5%;   }
	form{   width:80%;  margin:50px auto; }
	form fieldset{    border:0 none;  }
	form legend{   font-size:0; line-height:0;    width:1px; height:1px; overflow:hidden;   position:absolute;  left:-9999%;  }	
	label{   color:crimson;  font-weight:bold;   display:inline-block;   width:20%; }
	input{  border:1px solid #ccc;    padding:2px;  }

	h3{   margin:20px 0;  border-left:10px solid crimson; text-indent:1em; }
	.c_data{   width:80%; margin:0 auto; border-top:5px solid #ddd;   border-bottom:3px solid #ddd; }
	p{   margin:10px; border-bottom:1px solid #ddd;  font-size:90%;}
	p strong{    display:inline-block;    width:30%; color:crimson; }
			label , input{  vertical-align:middle; }
	input[type="button"] , input[type="reset"] , input[type="submit"] 
	{  width:20%;   margin:0 6px;     border:1px solid crimson;   color:crimson;  background-color:white;  }
		input[type="button"]:hover, 		input[type="button"]:focus{   color:white;  background-color:crimson;  }
  </style>
 </head>
 <body>
 	<?php include "./inc/header.php"; ?>
 <div  class="basic">
	<?php
		# M : db명 web7   / table명:webinfo
		# V :   join.php[회원가입폼]				my.php[회원의 정보출력  * ]
		# C :			   join_process.php[회원가입처리]
		include "./inc/db_info.php";
		$wemail = $_GET['wemail'];  
		$result = mysql_query("  SELECT * FROM webinfo WHERE wemail='$wemail' ")  or die(mysql_error());
		$row = mysql_fetch_array(  $result  ); 			 
	?>
	<div  class="c_data">
		<h3>MYPAGE</h3>
		<p> <strong>회원이름</strong>  <span> <?php echo $row['wname'];  ?> </span></p>
		<p> <strong>아이디</strong>     <span> <?php echo $row['wid'];  ?> </span></p>
		<p> <strong>비밀번호</strong>  
		    <input type="text"  id="pwdchange"  placeholder="비밀번호바꾸기"   title="비밀번호칸"  value="<?php echo $row['wpwd'];  ?>"/>
		    <input type="button" value="비밀번호바꾸기"/></p>
		<p> <strong>이메일</strong>     <span> <?php echo $row['wemail'];  ?></span></p>
		<p> <strong>전화번호</strong>  <span> <?php echo $row['wphone'];  ?></span></p>
		<p> <strong>주소</strong>        <span> <?php echo $row['waddress'];  ?></span></p>
	</div>
	<?php    mysql_close( $conn );     ?>
</div>
 </body>
</html>
