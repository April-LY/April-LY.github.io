<html>
<meta charset="UTF-8"/>

<head>
	<title>pics</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

	<?php include "../header.php";?>
	
	<p></p>
	<div class="pic_inline">
		<p id="hdText"><b>Here are my favorite pictures</b></p>
		<p id="btText">Photographed by linksphotograph</p>
		<div class="all_pics">
		<?php 
			for ($i=1; $i<=4; $i++) {
							echo '<img class="pic_Gallery" src="../img/gallery',$i,'.jpeg" height="200px" width="250px">';
			}
		 ?>
		 </div>
		
		
	</div>
	<style type="text/css">
		p {
			text-align: center;
		}
		}
		h1.hdText{
			color:#F8C3CD; 
			text-align: center;
			font-size:60px: 
		}
		h1.btText{
			color:#F8C3CD; 
			text-align: center;
			font-size:60px;
			display:block;

		}
		div.pic_inline img{
			border: dashed;
			border-color: #904840;
			border-width: 5px;
			
		}
	</style>

	<?php include "../footer.php";?>

