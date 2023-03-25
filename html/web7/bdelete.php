<?php	
	header("Content-type:text/html; charset=utf-8");
	include "./inc/db_info.php";

	$bno = $_POST['bno'];      $bpass = $_POST['bpass'];

	$result = mysql_query("SELECT * FROM  multiboard		WHERE  bno = '$bno'  ");
	$row = mysql_fetch_array($result);
	
	if(  $bpass ==  $row['bpass'] ){  	mysql_query("DELETE FROM multiboard	where bno='$bno' ")  or  die(mysql_error());	echo "ok";  }
	else{		echo "notok";     }

	mysql_close(  $conn );
?>