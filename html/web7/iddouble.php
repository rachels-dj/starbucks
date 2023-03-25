<?php
	header("Content-type:text/html; charset=utf-8");
	include "./inc/db_info.php";
	
	$wid = $_GET['wid'];	
	$result = mysql_query("select * from webinfo	where wid='$wid' ")   or die(mysql_error());
	$row = mysql_fetch_array( $result );
	if( !empty($row['wid']) ){ echo "not";}
	else{  echo "ok"; }
	mysql_close( $conn );
?>