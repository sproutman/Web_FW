<?php session_start(); include("conn/conn.php");
if($Submit=true){
   $i=0;
   while(list($name,$value)=each($_POST)){    
   $result=mysql_query("delete from tb_chartroom where id='".$name."'"); 
   if(is_numeric($name)){
   $i++; }}
   echo "<script>alert('警告:您已经删除.".$i.".条记录!'); window.location.href='index.php';</script>";
}else{
	echo "<script>alert('删除失败!'); window.location.href='index.php';</script>";}
?>