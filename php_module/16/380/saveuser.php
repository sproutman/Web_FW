<?php
$username=$_GET[user];
include("conn.php");
$sql=mysql_query("select * from user where address='".$username."'",$conn);
if(mysql_fetch_array($sql))
 {
  echo "<script>alert('���ռ����Ѿ����ڣ�');history.back();</script>";
  exit;
 }
else
 { 
  mysql_query("insert into user(address) values ('$username')",$conn);
  header("location:index.php");
 }
?>