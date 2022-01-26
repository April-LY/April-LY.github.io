<html>
<meta charset="UTF-8"/>
<?php 
	ini_set("display_errors", 0);
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL ^ E_WARNING);
?>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body>

	<?php include "./header.php";?>

	<div id="login-form">
		<h1>个人登录</h1>
		<?php

			$id = $_POST["logusrname"];
			$psswd = $_POST["logpswd"];
			session_start();
			$checkcodeinsession = $_SESSION['myCheckCode'];
			$checkcode = $_POST["checkcode"];
			
			if ($checkCode==$checkCodeInSession) {
				echo "验证码正确";

				$link=mysqli_connect("127.0.0.1",root);
					if(mysqli_connect_errno()){
						echo "Failed to connect to the database!<BR>";
						die();
					}
					$select=mysqli_select_db($link,"usr");
					if(!$select){
						echo "Failed to select the database!";
						die();
					}
					echo "Successfully select the database!<BR>";

					mysqli_query($link,"set names UTF8");
					
					$sql = "select usrname,passwd from rigisterinfo	where usrname='$id' ";
					$result = mysqli_query($link,$sql);

					$num = mysqli_num_rows($result);
					#echo $num;
					if($num==0){
						echo '<p style="color:red;font-size:30px;text-align:center"><b>You have not rigistered yet, please rigister first!</b></p>';
						echo '<p style="text-align:center"><a href="./rigister
						.php" >Click here to rigister.</a></p>';
					}
					else{
						$row = mysqli_fetch_array($result);
						if ($row['passwd'] == $psswd) {						
							echo '<p style="color:red;font-size:30px;text-align:center"><b>欢迎'.$row['usrname'].',您已成功登录！</b></p>';
							session_start();
							$_SESSION['username'] = $row['usrname'];
							echo "<a href='./login.php'>欢迎您访问此网站</a>";
						}
						else{
							echo $row['usrname'];
							echo '<p style="color:red;font-size:30px;text-align:center"><b>密码错误请重新登录。</b></p>';
						}
					}
			}
			else{
				echo '<p style="color:red;font-size:30px;text-align:center"><b>验证码错误请重新登录。</b></p>';
			}

		?>

	</div>

	<style type="text/css">

	</style>

	<?php include "./footer.php";?>
