<?php session_start(); include("conn/conn.php");
if($Submit=true){
   $i=0;
   while(list($name,$value)=each($_POST)){    
   $result=mysql_query("delete from tb_chartroom where id='".$name."'"); 
   if(is_numeric($name)){
   $i++; }}
   echo "<script>alert('����:���Ѿ�ɾ��.".$i.".����¼!'); window.location.href='index.php';</script>";
}else{
	echo "<script>alert('ɾ��ʧ��!'); window.location.href='index.php';</script>";}
?>