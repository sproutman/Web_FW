<?php
include_once("conn.php");
$title=$_POST[title];
$content=$_POST[content];
$createtime=date("Y-m-j H:i:s");
if(mysql_query("insert into tb_guestbook(title,content,createtime) values ('$title','$content','$createtime')",$conn))
 {
 echo "<script>alert('���Է���ɹ�!');window.location.href='index.php';</script>";
 }
else
 {
  echo "<script>alert('���Է���ʧ��!');history.back();</script>";
 } 
?>