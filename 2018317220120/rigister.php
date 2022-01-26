<html>
<meta charset="UTF-8"/>

<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body>

	<?php include "./header.php";?>

	<div class="login-form">
		<h1>注册</h1>
		<form name="form" method="post" action="click-rigister.php">
			<table align="center">
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="ri-usrname"></td>
					<td>*1-10个包括下划线的任何单词字符</td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="ri-pswd"></td>
					<td>*4-14个包括下划线的任何单词字符</td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" name="ri-repswd"></td>
					<td>*与密码一致</td>
				</tr>

			</table>
			<p>我已注册，<a href="./login.php">请登录</a></p>
			<p>
				<input type="submit" name="submitname" value="注册">
				<input type="reset" name="resetname" value="重置">
			</p>
		</form>
		
	
		

	</div>

	<style type="text/css">

	</style>

	<?php include "./footer.php";?>

