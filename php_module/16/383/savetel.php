<?php
$telno=$_GET[tel];
include("conn.php");
$sql=mysql_query("select * from message where telno='".$telno."'",$conn);
if(mysql_fetch_array($sql))
 {
  echo "<script>alert('���û��Ѿ����ڣ�');history.back();</script>";
  exit;
 }
else
 { 
  mysql_query("insert into message(telno) values ('$telno')",$conn);
  header("location:index.php");
 }
?>