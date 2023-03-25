<?php 
$connect = mysql_connect('localhost','dazzfriends','****');
mysql_select_db("dazzfriends" , $connect) or die( mysql_error() );
mysql_query("set names utf8");
?>
