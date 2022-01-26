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

	<div class="layout"></div>
	<style type="text/css"> #layout{float=left;width:10%;height:60%;}</style>
		<div class="messageboard">
			<h1>请给我留言</h1>
		
			<form name="MesgSubmitForm" method="post" action="./afterUserSubmit.php">
				<p>昵称：<input type="text" name="MesgUsrName"></p>
				<p>您的联系方式
				<input type="radio" name="buttoon" value="M" checked/>telephone
				<input type="text" name="telnumber" value="" size=10 value="contactway" maxlength=8 />
	    		<input type="radio" name="buttoon" value="F"/>mail
	    		<input type="text" name="mailaddress" value="" size=10 value="contactway" maxlength=8 /></p>
	    		<p></p>
				<textarea name="usrmesg" cols = "100" rows = "10">请您输入您想对我说的话</textarea>
					<p>
						<input type="submit" name="hobby2" value="提交"/>
	    				<input type="reset" name="hobby2" value="重置"/>
	    			</p>
			</form>			
		</div>
		

		<div class="showmesgboard">	
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

				$sql = "select * from info order by sendtime desc";
				$result = $link -> query($sql);
				$rows = $result -> num_rows;
				
				if($rows == 0){
					echo "此处还没有留言！";
					die();
				}

				$pagesize = 3;
				$pagecount = ceil($rows/$pagesize);
				$url = $_SERVER['REQUEST_URI'];
				$url = parse_url($url);
				$pageno = $url['query'][7];

				if (is_null($pageno))
					$pageno=1;

				if($pageno>$pagecount)
					$pageno=$pagecount;
				
				$offset=($pageno-1)*$pagesize;
				$result->data_seek($offset);
			?>
			
			<?php
				$i=0;
				while ($row = $result->fetch_object()){
			?>
				<hr>
				
				<table class="mesg-board-tb">
					<tr>
						<td align="left">留言人：<?php echo $row->name; ?></td>
						<td align="right"><?php echo $row->sendtime; ?></td>
					</tr>
				</table>
				
				<table class="mesg-board-tb">
					<tr>
						<td align="left"><?php echo $row->mesg;?></td>
					</tr>
				</table>
				<style type="text/css">
				
				</style>

			<?php
				$i = $i+1;
				if ($i == $pagesize) 
					break;
				}
				$result->free();
				$link->close();
			?>

			
			<div align="center">
				[第<?php echo $pageno; ?>页/共<?php echo $pagecount; ?>页]
				<?php
				$url = $_SERVER['REQUEST_URI'];
				$url = parse_url($url);
				$url = $url['path'];
				$href = $url."?pageno=";

					for ($i=1; $i <= $pagecount; $i++) { 
						echo "<a href=$href$i >$i</a> &nbsp";		
					}

				?>
				[一共<?php echo $rows;  ?>条记录]
				
			</div>
			
			
		</div>
		<p></p>
		<div align="center">
			<form action="./queryusr.php" method="get">	
				请输入要查询的账户的留言：
				<input type="text" name="usr-q-mesg" maxlength="20" />
				<input type="submit" name="submit" value="确定">
				<input type="reset" name="reset" value="取消">
			</form>
		</div>

	<?php include "../footer.php";?>
