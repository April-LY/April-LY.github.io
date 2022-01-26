<html>
<meta charset="UTF-8"/>

<head>
	<title>blog</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<body>

	<?php include "../header.php";?>

	
	<div class="bloghome">
		<h1>&nbsp&nbsp第四次作业更新日志</h1>
		<p class="annotation">&nbsp&nbsp&nbsp&nbspupdating date:2021/06/12 author:Yun Liu</p>

		<hr>
		<ul class="normal-ul-list">
			<li>完善注册页面和留言板的sql表</li>
			<li>重新布置了网页的版面</li>
			<li>完善了blog部分的超链接跳转</li>
			<li>制作了轮播图</li>

		</ul>
		<form class="blogPageButton" name="change-page">
			<a href="./blog_3rdhwk_log.php"><input type="button" name="last-p" value="last page" /></a>
			<input type="button" name="next-p" value="next page" onclick="alert('已经是最后一页了')">


		</form>
		
		<p></p>


	</div>

	<?php include "../footer.php";?>
