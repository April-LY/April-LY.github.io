<html>
<meta charset="UTF-8"/>
<?php 
	ini_set("display_errors", 0);
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL ^ E_WARNING);
?>
<head>
	<title>message</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>
	<?php include "../header.php";?>

	<div>
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

			$usr = $_GET['usr-q-mesg'];
			$sql = "select * from info where name='$usr'";
			$result = mysqli_query($link,$sql);
			$num = mysqli_num_rows($result);
			
			if ($num == 0) {
				echo "没有当前用户的留言。";
				include "../footer.php";
				exit();
			}

			$i=0;

			while ($row = mysqli_fetch_array($result)){
					# code...
					$i++;
			?>
			<hr>
			<h2>留言人：<?php echo $row['name'] ?></h2>
				
			<p>留言内容：<?php echo $row['mesg'] ?></p>
			<?php
				}
			?>
		
	</div>

	<?php include "../footer.php";?>
