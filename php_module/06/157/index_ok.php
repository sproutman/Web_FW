<?php session_start(); include("conn/conn.php");
if($Submit=="ɾ��"){
     while(list($name,$value)=each($_POST)){    
   $result=mysql_query("drop table $name"); 
   if(is_numeric($name)){
 }}
 echo "<script>alert('�ɹ�ɾ�����ݱ�!'); window.location.href='index.php';</script>";
}else{
	echo "<script>alert('ɾ��ʧ��!'); window.location.href='index.php';</script>";}
?>