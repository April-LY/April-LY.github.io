<?php
	session_start();
	$checkCode="";
	for($i=0;$i<4;$i++){	// 4位验证码
		$checkCode.=dechex(rand(1,15));	// 十进制 转化成 十六进制；
	}
 
	// 将随机验证码保存到session中
	$_SESSION['myCheckCode']=$checkCode;
 
	/// 创建图片，并把随机数画上去
	$img=imagecreatetruecolor(110,30);
 
	// 背景默认就是黑色,你可以指定背景颜色
	$bgcolor=imagecolorallocate($img,0,0,0);
	imagefill($img,0,0,$bgcolor);
 
	// 创建新颜色
	$white=imagecolorallocate($img,255,255,255);
	$blue=imagecolorallocate($img,0,0,255);
	$red=imagecolorallocate($img,255,0,0);
	$green=imagecolorallocate($img,255,0,0);
 
	// 画出干扰线段
	for($i=0;$i<20;$i++){

 
		// 更好的方法是颜色随机
		imageline($img,rand(0,110),rand(0,30),rand(0,110),rand(0,30),imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255)));
		
	}
 
	//把四个随机值画上去	
	imagestring($img,rand(1,5),rand(2,80),rand(2,10),$checkCode,$white);
	
	//如果要使用中文
	//考虑array imagefttext ()函数；
	//imagettftext($img,15,10,20,25,$white,"STXINWEI.TTF","北京你好");
	
	//输出
	header("content-type: image/png");
	imagepng($img);
	
	// 摧毁
	imagedestroy($img);

?>