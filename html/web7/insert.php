<?php
	header("Content-type:text/html; charset=utf-8");
	# 0. header  	1. mysql연결    2. db연결 : db명 web7     3. 문자열셋팅
	include "./inc/db_info.php";
	# 4. post로 데이터 넘겨받기	5. 쿼리구문이용해서 데이터 삽입
	$btitle = $_POST['btitle'];    $bname = $_POST['bname'];        $bemail = $_POST['bemail'];  
	$bpass = $_POST['bpass'];  $bcontent = $_POST['bcontent'];  
	$bip = $_SERVER['REMOTE_ADDR'];   ## ip주소확인    서버측함수 - 환경변수
	$bfilename = "";
	if(   $_FILES['bfilename']['error']   > 0  ){ 
		echo  "<p>". $_FILES['bfilename']['error']  ."</p>" ;
		echo "<script>alert('파일올리기에 실패했습니다.');  histroy.go(-1);</script>";   
	}else{    
		move_uploaded_file( $_FILES['bfilename']['tmp_name'] ,  './file/' . $_FILES['bfilename']['name'] );    
		$bfilename	= $_FILES['bfilename']['name'];	  
	}
																																	
	$result = mysql_query("INSERT INTO multiboard (btitle , bname ,bemail ,  bpass , bcontent , 	bdate , bip  , bfilename )  
								   VALUES ( '$btitle' , '$bname' ,'$bemail' ,  '$bpass' , '$bcontent' ,  now() , '$bip'  ,  '$bfilename' )")  or  die( mysql_error() );
	if(  $result  ){    
		echo "<meta http-equiv='refresh'   content='0; url=./board.php'/>";
	}
	else{     echo "<script> alert('관리자에게 문의바랍니다..');    history.go(-1);</script>"; }
	mysql_close(  $conn );
?>
			