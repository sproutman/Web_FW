<?php session_start(); include("conn/conn.php");
if($Submit=="删除"){
     while(list($name,$value)=each($_POST)){    
   $result=mysql_query("delete from $name"); 
   if(is_numeric($name)){
 }}
 echo "<script>alert('成功删除数据!'); window.location.href='index.php';</script>";
}else{
	echo "<script>alert('删除失败!'); window.location.href='index.php';</script>";}
?>