<?php
$name=$_POST[name];
$age=$_POST[age];
$address=$_POST[address];
$bm=$_POST[bm];
$sno=$_POST[sno];
$type=$_POST[type];
include_once("conn.php");
if(mysql_query("insert into tb_worker(name,age,address,bm,sno,type) values ('$name','$age','$address','$bm','$sno','$type')",$conn))
 {
   echo "<script>alert('员工信息添加成功！');history.back()</script>";
 }
 else
  {
   echo "<script>alert('员工信息添加失败！');history.back()</script>";
  }
?>