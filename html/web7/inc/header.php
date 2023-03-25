		<header id="header">
			<h1><a href="./index.php">WEB 7</></h1>
			<ul class="info">
<?php 
	if( empty($_SESSION['userid']) ){ ?>
				<!-- 로그인 안한사람 -->
				<li><a href="./login.php">LOGIN</a></li>
				<li><a href="./join.php">JOIN</a></li>

		
<?php	} else { ?>

				<!-- 로그인 한사람 -->
				<li><a href="./my.php">MYPAGE</a></li>
				<li><span style="color:crimson;"><?=$_SESSION['userid']?></span>님! 환영합니다 
				<?php 
					echo "<meta http-equiv='refresh' content='60; url=./logout.php'  />";
				?>
				<a href="./logout.php"/>LOGOUT</a></li>
		
<?php	} ?>
			</ul>
		</header><!-- -->
<!-- ## header.php  END-->