<html>
<meta charset="UTF-8"/>

<head>
	<title>blog</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

	<?php include "../header.php";?>

	
	<div class="bloghome">
		<h1>&nbsp&nbsp第三次作业更新日志</h1>
		<p class="annotation">&nbsp&nbsp&nbsp&nbspupdating date:2021/06/05 author:Yun Liu</p>

		<hr>
		<ul class="normal-ul-list">
			<li>制作了注册页面和留言板的sql表</li>
			<li>可以提交留言到数据库中</li>
			<li>自动读取了留言页面的sql数据库的信息，并展示出来</li>
			<li>利用php循环的展示了画廊，利用循环展示了目前留言版数据库中的全部信息</li>

		</ul>
		<form class="blogPageButton" name="change-page">
			<a href="./blog_2ndhwk_log.php"><input type="button" name="last-p" value="last page" /></a>
			<a href="./blog_4thhwk_log.php"><input type="button" name="next-p" value="next page" /></a>

		</form>
		
		<p></p>


	</div>

	<?php include "../footer.php";?>
