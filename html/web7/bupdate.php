<?php
	header("Content-type:text/html; charset=utf-8");
	include "./inc/db_info.php";

	$bno = $_GET['bno'];		  // # 해당글번호의 비밀번호 찾기
	$bpass = $_POST['bpass']; // # 사용자가 입력한 비밀번호
	$btitle = $_POST['btitle'];  	    $bname = $_POST['bname'];  	$bemail = $_POST['bemail'];      $bcontent = $_POST['bcontent'];

	$bfilename = "";
	if(   $_FILES['bfilename']['error']   > 0  ){ 
		echo  "<p>". $_FILES['bfilename']['error']  ."</p>" ;
		echo "<script>alert('파일올리기에 실패했습니다.');  histroy.go(-1);</script>";   
	}else{    
		move_uploaded_file( $_FILES['bfilename']['tmp_name'] ,  './file/' . mktime() . "_".md5($_FILES['bfilename']['name']) );    
		$bfilename	=  mktime()  . "_".md5($_FILES['bfilename']['name'])  ;	   # mktime()  현재시간  / md5() 암호화 

	}

	$result = mysql_query(  " SELECT bpass  FROM multiboard  WHERE  bno='$bno' ") or die(mysql_error()) ;
	$row = mysql_fetch_array( $result );

	if(  $bpass  == $row['bpass']  ){   
		mysql_query("UPDATE multiboard  
						  SET btitle='$btitle'  , bname='$bname' , bemail='$bemail'  ,bcontent='$bcontent'   , bfilename = '$bfilename'
						  WHERE  bno='$bno'  ") or die(mysql_error());
		echo "<meta  http-equiv='refresh'   content='0; url=./bdetail.php?bno=$bno'  />";					
	}else{
		echo "<script>  alert('비밀번호를 확인해주세요');  history.go(-1);  </script>";
	}
	mysql_close( $conn  );
?>
