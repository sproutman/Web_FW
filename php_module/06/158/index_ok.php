<?php session_start(); include("conn/conn.php");
if($Submit=="删除索引"){
echo $indexs;
   $result=mysql_query("drop index $indexs on $name"); 
   if($result==true){
      echo "<script>alert('成功删除索引!'); window.location.href='index.php';</script>";
  }else{
	echo "<script>alert('删除索引失败!'); window.location.href='index.php';</script>";}
}
?>