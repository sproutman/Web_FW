<?php session_start(); include("conn/conn.php");
if($Submit=="ɾ��"){
     while(list($name,$value)=each($_POST)){    
   $result=mysql_query("delete from $name"); 
   if(is_numeric($name)){
 }}
 echo "<script>alert('�ɹ�ɾ������!'); window.location.href='index.php';</script>";
}else{
	echo "<script>alert('ɾ��ʧ��!'); window.location.href='index.php';</script>";}
?>