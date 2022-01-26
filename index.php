<html>
<meta charset="UTF-8"/>

<head>
	<title>Novolari's Website</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>


<body class="whole-page">

	<?php include "./header.php";?>
	
	<div id="mid-main" style="text-align: center;">
		<hr>
		<div id="home" href="./Blogs/blog.php">
			<table cellspacing="20px" align="center">
				<tr align="center">
					<td style="padding: 0">
						<div id="personal_info">
							<img id="selfphoto" src="./img/_MG_6762.jpg">
							<p class="personal_info_name"><b>Liu Yun
								<br>HZAU-undergraduate</br></b>
							</p>		
						</div>
					</td>
					<td style="padding: 0"> 
						<div id="text-information">
							<h1 class="dark-bg-title">About me</h1>
							<table cellspacing="10px">
								<tr>
									<td>Name:</td>
									<td>刘鋆</td>
								</tr>
								<tr>
									<td>Major:</td>
									<td>Bioinformatics</td>
								</tr>
								<tr>
									<td>E-mail:</td>
									<td>prublue@163.com</td>
								</tr>
								<tr>
									<td>Home:</td>
									<td>Hebei</td>
								</tr>
								<tr>
									<td>Hobby:</td>
									<td>Running Painting</td>
								</tr>
								<tr>
									<td>Phone:</td>
									<td>13930143600</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>		
		</div>
			
				
		<div id="blog-layout">
			<h1 class="dark-bg-title">&nbsp&nbspBlog</h1>
					<table class="blog-show" cellspacing="20" >
				
				<tr class="table-heading">
		    		<th class="table-heading">
		    			<a href="./blog_2ndhwk_log.php">第二次作业更新日志</a></th>
		        	<th class="detail-info">Yun Liu</th>
    			</tr>

    			<tr class="table-line">
		    		<th class="preview-content">将header和php文件封装;添加了login和注册页面</th>
		        	<th class="detail-info">2021-05-20</th>
    			</tr>
    			
	    		<tr>
			    	<th class="table-heading">
						<a href="./blog_3rdhwk_log.php">第三次作业更新日志</a></th>
			        <th class="detail-info">Yun Liu</th>
	    		</tr>

    			<tr class="table-line">
		    		<th class="preview-content">预览内容</th>
		        	<th class="detail-info">2021-06-05</th>
    			</tr>

    			<tr>
			    	<th class="table-heading">
						<a href="./blog_4thhwk_log.php">第四次作业更新日志</a></th>
			        <th class="detail-info">Yun Liu</th>
	    		</tr>

    			<tr class="table-line">
		    		<th class="preview-content">预览内容</th>
		        	<th class="detail-info">2021-06-12</th>
    			</tr>

			</table>
		</div>
	</div>
	

		<div id="index-gallery">

			<h1>Pictures</h1>
			<p>摄影师:linksphotograph</p>
				<div id="pic_inline">
					<?php
						for ($i=1; $i<=4; $i++) {
							echo '<img class="pic_Gallery" src="./img/gallery',$i,'.jpeg" height="200px" width="250px">';
						}
					?>	
				</div>
		</div>
		
		<div id="index-mesgbord">

			<h1>留言</h1>
				
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
				$sql = "select * from info order by sendtime desc limit 2";
				$result = mysqli_query($link,$sql);
				$num = mysqli_num_rows($result);

				$i=0;

				while ($row = mysqli_fetch_array($result)){
					# code...
					$i++;
				?>
				<hr>
				<h2>留言人：<?php echo $row['name'] ?></h2>
				<p>留言日期：<?php echo $row['sendtime'] ?></p>
				<p>留言内容：<?php echo $row['mesg'] ?></p>
			<?php
				}
			?>
			<hr>
		</div>

		</div>
	</div>

	<style type="text/css">
		

	</style>


	<?php include "./footer.php";?>
