<?php
	header("content-type:text/html; charset=utf-8");

	# 구글 > [ php.net 한글 ] 검색
	session_start();
	session_unset();
	session_destroy();

	echo "<meta http-equiv='refresh' content='0; url=./board.php' / >";
?>