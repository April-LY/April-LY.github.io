<html>
<meta charset="UTF-8"/>

<head>
	<title>blog</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

	<?php include "../header.php";?>

	
	<div class="bloghome">
		<h1>&nbsp&nbsp第二次作业更新日志</h1>
		<p class="annotation">&nbsp&nbsp&nbsp&nbspupdating date:2021/05/29 author:Yun Liu</p>

		<hr>

		<ul class="normal-ul-list">
			<li>将header和php文件封装</li>
			<li>添加了login和注册页面</li>
			<li>美化了部分页面</li>
			<li>添加了php动态交互：登录和注册</li>
		</ul>
		
		<form class="blogPageButton" name="change-page">
			<input type="button" name="last-p" value="last page" onclick="alert('已经是第一页了')">
			<a href="./blog_3rdhwk_log.php"><input type="button" name="next-p" value="next page" /></a>
		</form>

		<p></p>


	</div>

	<?php include "../footer.php";?>
