<?php
session_start();
unset($_SESSION['username']);
echo "<a href='./index.php'> 您已经注销，点此返回主页</a>";
?>