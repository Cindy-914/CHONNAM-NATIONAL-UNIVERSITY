<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/login.css">
<link rel="stylesheet" href="./css/style.css">
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/prefixfree.min.js"></script>
<script src="./js/script.js"></script>

<script type="text/javascript" src="./js/login.js"></script>


</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
        <div id="main_content">
      		<div id="login_box">
	    		<div id="login_title">
		    		<span>로그인</span>
	    		</div>
	    		<div id="login_form">
          		<form  name="login_form" method="post" action="login.php"> 		       	
                  	<ul>
                    <li><input type="text" name="id" placeholder="아이디" value=""></li>
                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호" value=""></li> <!-- pass -->
                  	</ul>
                  	<div id="login_btn">
                      	<a href="#"><img src="./img/login.png" onclick="check_input()"></a> 
                  	</div>		    	
           		</form>
        		</div> 
    		</div> 
        </div> 
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
