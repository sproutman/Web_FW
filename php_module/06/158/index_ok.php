<?php session_start(); include("conn/conn.php");
if($Submit=="ɾ������"){
echo $indexs;
   $result=mysql_query("drop index $indexs on $name"); 
   if($result==true){
      echo "<script>alert('�ɹ�ɾ������!'); window.location.href='index.php';</script>";
  }else{
	echo "<script>alert('ɾ������ʧ��!'); window.location.href='index.php';</script>";}
}
?>