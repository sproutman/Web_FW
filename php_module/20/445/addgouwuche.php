<?php
session_start();
  $id=strval($_GET[id]);
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$id)
	  {
	     echo "<script>alert('该商品已经在您的购物车中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  
  header("location:gouwu1.php");
?> 