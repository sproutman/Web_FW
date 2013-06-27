<?php
session_start();
if($_SESSION[username]==""){
	echo "<script>alert('您没有访问权限，请先登录!');window.location.href='index.php';</script>";
}
?>
