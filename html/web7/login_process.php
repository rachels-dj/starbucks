<?php
	header("Content-type:text/html;  charset=utf-8");
	include "./inc/db_info.php";
	$wid = $_POST['userid'];    $wpwd = $_POST['userpass'];
	$result = mysql_query("SELECT count(*) FROM webinfo 
								  WHERE  wid='$wid'  AND wpwd='$wpwd ' ")  or die(  mysql_error());
	$row = mysql_fetch_array($result);
	if(  $row[0]  == 1 ){   
		session_start();
		$_SESSION['userid'] = $_POST['userid'];
		echo "<script> alert('반갑습니다{$wid}'); </script>"; 
	    echo "<meta http-equiv='refresh'  content='0; url=./index.php'/> "; 
	}else{
		echo '<script> alert("오류가 발생했습니다\n관리자에게 문의부탁드려요");    history.go(-1); </script>'; 	
	}
	mysql_close(  $conn );

	####2  로그인
		# M : db명 web7   / table명:webinfo
		# V :   login.php[회원가입폼]	 ↓			index.php[메인페이지 ]
		# C :			   login_process.php[회원가입처리]   ↑  ( 알림창 ) 
?>
