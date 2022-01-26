<html>
<meta charset="UTF-8"/>

<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body>

	<?php include "./header.php";?>

	<div id="login-form">
		<h1>注册</h1>
		<?php
			$id = $_POST["ri-usrname"];
			$psswd = $_POST["ri-pswd"];
			$re_psswd = $_POST["ri-repswd"];

			$check_id = preg_match("/\w{1,30}/", $id);
			$check_psswd = preg_match("/\d{4,14}/",$psswd);
			$check_repsswd = preg_match("/\d{4,14}/",$re_psswd);

			if($check_id && $check_psswd && ($psswd = $re_psswd)){
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
				$sql="select * from usrname='$id'";
				$result = mysqli_query($link,$sql);
				$num = mysqli_num_rows($result);
				if($num != 0){
					echo "该账户已被注册，请更换用户名。";
				}
				else{
					$sql="insert into rigisterinfo set	usrname='$id',passwd='$psswd'";
					if (mysqli_query($link,$sql)) {
						echo "<p>Add user Successfully!</p>";
					}else{
						echo "Failed to add the user infomation to the database";
					}
					mysqli_close($link);
					echo $id;
					echo "欢迎，您已成功注册！";
					?>
					<p><a href="./login.php">请点击此处返回登录页面</a></p>
					<?php
				}
			}
			else{
				if(!$check_id){
					echo "用户名格式输入错误！";
				}
				if (!$passwd or !$re_psswd) {
					echo "密码格式输入错误！";
				}
				if( $psswd != $re_psswd){
					echo "两次输入密码不一致！";
				}
				?>
				<p><a href="./rigister.php">请点击此处返回注册页面</a></p>
				<?php
			}

		?>

		
			

	</div>

	<style type="text/css">

	</style>

	<?php include "./footer.php";?>
