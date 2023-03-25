<?php
	header("Content-type:text/html; charset=utf-8");

	include "./inc/db_info.php";
	
	$wname = $_POST['wname'];	$wid = $_POST['wid'];  $wpwd = $_POST['wpwd'];  $wemail = $_POST['wemail'];	
	$wphone = $_POST['wphone'] . $_POST['wphone2'] . $_POST['wphone3'];	
	$waddress = $_POST['post1'] . "-" . $_POST['post2'] . "_" . $_POST['address']. $_POST['address2'];

	mysql_query("INSERT INTO  webinfo 
					(wname , wid , wpwd , wemail , wphone , waddress)   
					VALUES 
					('$wname' , '$wid' , '$wpwd' , '$wemail' , '$wphone' , '$waddress')")  or die(  mysql_error() );
	mysql_close(  $conn  );
	
												# content='몇초뒤에;url=주소' 
	echo "<meta http-equiv='refresh'  content='0;  url=./my.php?wemail=$wemail'   />";

?>