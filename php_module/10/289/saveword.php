<?php
include_once("conn.php");
$title=$_POST[title];
$content=$_POST[content];
$createtime=date("Y-m-j H:i:s");
if(mysql_query("insert into tb_guestbook(title,content,createtime) values ('$title','$content','$createtime')",$conn))
 {
 echo "<script>alert('留言发表成功!');window.location.href='index.php';</script>";
 }
else
 {
  echo "<script>alert('留言发表失败!');history.back();</script>";
 } 
?>