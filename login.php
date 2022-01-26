<html>
<meta charset="UTF-8"/>

<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body>

	<?php include "./header.php";?>
	

	<div class="login-form">
		<h1>个人登录</h1>
		<p>e.g. username:prublue code:123456</p>
		<p>login use this account or rigister</p>
		<form name="form" method="post" action="click-login.php">
			<p>用户名:<input type="text" name="logusrname"></p>
			<p>密 码：<input type="password" name="logpswd"></p>
			
			<!--借鉴自网络-->
			<p>验证码：<input type="text" name="checkcode"><img src="./verifyCode.php" /></p>


			<p>如您没有账号，请先<a href="./rigister.php">注册</a></p>
			
			<p><input type="submit" name="submit" value="登录"></p>
		</form>

		

	</div>


	
	<?php include "./footer.php";?>

