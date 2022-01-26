
	<div id="header">
		<nav class="site-nav">
    		<ul id="menu" class="menu-whole">
		        <li id="menu-homepage" class="menu-label">
		          <a href="/2018317220120/index.php" rel="section">
		            主页
		          </a>
		        </li>
        
            
		        <li id="menu-bolg" class="menu-label">
		          <a href="/2018317220120/Blogs/blog.php" rel="section">
		            博文
		          </a>
		        </li>
      
        
		        <li id="menu-message" class="menu-label">
		          <a href="/2018317220120/message/message.php" rel="section">
		            留言
		          </a>
		        </li>
      
        
		        <li id="menu-pic" class="menu-label">
		          <a href="/2018317220120/pic/pic.php" rel="section">
		            图集
		          </a>
		        </li>
      
        
		        <li id="menu-list100" class="menu-label">
		          <a href="/2018317220120/list100/list100.php" rel="section">
		            List_100
		          </a>
		        </li>
				
        
		        <li id="menu-login-rigister" class="menu-label">
		          <a href="/2018317220120/login.php" rel="section">
		            login
		          </a>
		        </li>

		        <li id="session-label" class="menu-label">
					<?php
						session_start();
							if(isset($_SESSION['username'])){
        						echo "<a href='./zhuxiao.php'>".$_SESSION['username']."已登陆,单击以注销</a>";
							}
					?>
		        </li>	

    		</ul>	
	</div>

	<div  id="head-rolling-pics">
		<h1 class="head-rp-sub"> Novolari's Website</h1>
		<ul class="pic-roll-point">
			<?php
				for ($i=5; $i >0; $i--){
					echo "<li class='label-point'><a href='/2018317220120/img/gallery'".$i.".jpeg>o</a></li>";
				}	
			 ?>
			
		</ul>
	</div>





<style type="text/css">
li.session-label{
	float: right;
}
#header {
	background-color: #9ABBD9;
    color:white;
    width: 100%;
    text-align:center;
    height: 30px;
    padding:8px 16px;
    overflow-x:hidden; 
}
#head-rolling-pics{
	background-image: url("/2018317220120/img/gallery5.jpg");
	background-repeat: no-repeat;
	background-position: center;
	width: auto;
	height: 400px;
	text-align: center;
	margin: 30;
	border-radius: 25px;
}
h1.head-rp-sub{
	height: 120px;
	color: white;
	text-align: center;
	position: relative;
	top: 50%;
}


ul.pic-roll-point{
	list-style-type: none;
	margin: 0;
	padding: 0; 
	overflow: hidden；
	border: 1px solid #e7e7e7;
	background-color: #f1f1f1;
	position: relative;
	top: 55%;
	left:48%;
}
ul.menu-whole {
	list-style-type: none;
	margin: 0;
	padding: 0; 
	overflow: hidden；
	border: 1px solid #e7e7e7;
	width: 100%;
	background-color: #f1f1f1;
}


li.label-point{
	color:white;
	opacity: 1;
	transform:translateY(0px);
	float: left;
}
li.menu-label {
	opacity: 1; 
	transform:translateY(0px);
	float: left;
}


li.label-point a{
	color:white;
	display: block;
	text-align: center;
	padding: 2px;
	text-decoration:none;
}
li.menu-label a{
	color: white;
	display: block;
	text-align: center;
	padding: 5px 10px;
	text-decoration: none;
	border-color: #2D5273;
	border-style: dashed; 
}





li.label-point a.active{
	background-color: #2D5273;
	color: white;
}

li.label-point a:hover:not(.active){
	background-color: #555;
	color: white;
}

li.menu-label a.active{
	background-color: #2D5273;
	color: white;
}

li.menu-label a:hover:not(.active){
	background-color: #555;
	color: white;
}



</style>
