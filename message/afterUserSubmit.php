<html>
<meta charset="UTF-8"/>

<head>
	<title>Successfully submit</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

	<?php include "../header.php";?>
	
	<div id="afterUserSubmitRe">
		
		
		 <h1 align="center" color="red"><?php 
			echo "您好，" ,$_GET["MesgUsrName"];
		 ?>您的留言已成功提交</h1>
		<a href="./message.php"><p>请点击此处返回留言板查看</p></a>
		<?php
			$link=mysqli_connect("127.0.0.1",root);
			if(mysqli_connect_errno()){
				echo "Failed to connect to the database!<BR>";
				die();
			}
			$select=mysqli_select_db($link,"mesgbord");
			if(!$select){
				echo "Failed to select the database!";
				die();
			}
			echo "Successfully select the database!<BR>";

			mysqli_query($link,"set names UTF8");
			
			$name = htmlspecialchars($_POST['MesgUsrName']);
			$tel = htmlspecialchars($_POST["telnumber"]);
			$mail = htmlspecialchars($_POST["mailaddress"]); 
			$mesg = htmlspecialchars($_POST["usrmesg"]);
			$sendtime = date("y-m-d H:i:s");
			if($mail){
				$sql_re="insert into info set	name='$name',mail='$mail',mesg='$mesg',sendtime='$sendtime'";
			}
			else{
				$sql_re="insert into info set	name='$name',tel='$tel',mesg='$mesg',sendtime='$sendtime'";
			}
			
			


			if (mysqli_query($link,$sql_re)) {
				echo "Add Successfully";
			}else{
				echo "Failed to add the message";
			}
			mysqli_close($link);


		?>
	</div>

	<?php include "../footer.php";?>
