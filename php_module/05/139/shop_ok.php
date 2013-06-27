<?php
session_start();
if($_SESSION[user]==""&&$_SESSION[pass])
 {
  echo "<script>alert('请先登录后购物!');history.back();</script>"; 
  exit;
 }
  $lmbs=strval($_GET[lmbs]); //获取变量的字符串值
  $array=explode("@",$_SESSION[producelist]);  //切开后的字符串返回到数组变量中
  for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$lmbs)
	  {
	     echo "<script>alert('该商品已经在您的购物车中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$_GET[lmbs]."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  
  header("location:gwc.php");
?> 
