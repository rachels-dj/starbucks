<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> HTML에 대하여 </title>
	<link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>    
	<script type="text/javascript" src="js/banner1.js"></script>
	<script type="text/javascript" src="js/banner2.js"></script>	
	
</head>
<body>

    <? include_once("header.php"); ?>
    <div class="navi">
        <span><img src="images/home.png" alt="홈" /></span>
        <img src="images/nav_r.png" alt=""/>
        <span class="last_navi">로그인</span> 
    </div>
    
    <div class="loginpage_box clearfix">
        <div class="login_inner clearfix">
            <div class="login">
                <div>
                    <h3>로그인</h3>
                    <input type="text"><br>
                    <input type="password"><br>
                    <p>
                        <input type="checkbox"><a href="#">아이디기억</a>
                        <span><a href="#">아이디찾기</a> | <a href="#">비밀번호 찾기</a> | <a href="#">회원가입</a></span>
                    </p>
                    <a href="#">로그인</a>
                </div>
            </div>
            <div class="sns_login">
                <div>
                    <h3>SNS로그인</h3>
                    <ul class="clearfix">
                        <li><a href="#"><span><img src="images/f.png" alt="facebook"/></span><br>페이스북</a></li>
                        <li><a href="#"><span><img src="images/t.png" alt="facebook"/></span><br>트위터</a></li>
                        <li><a href="#"><span><img src="images/g.png" alt="facebook"/></span><br>구글</a></li>
                        <li><a href="#"><span><img src="images/n.png" alt="facebook"/></span><br>네이버</a></li>                                                   
                    </ul>
                    
                    <p>
                        웹카페의 다양한 건강 컨텐츠를 소셜 계정으로도 간편하게 로그인 후 
                        이용하실 수 있습니다. 소셜 계정이 없으시면 위의 로고를 선택하셔서 
                        SNS 가입 후 로그인 해주세요.
                    </p>
                </div>
            </div>        
        </div>
    </div>    
 

    
    
   
    
    <? include_once("footer.php"); ?>
</body>
</html>