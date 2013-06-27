<?php
include "conn/conn.php";
if($_POST["submit"]!=""){
$username=$_POST[username];
$truename=$_POST[truename];
$pwd=$_POST[pwd1];
$sex=$_POST[sex];
$email=$_POST[email];
$homepage=$_POST[homepage];
$sql="insert into tb_author (username,pwd,truename,sex,email,homepage) values('$username','$pwd','$truename','$sex','$email','$homepage')";
$result=mysql_query($sql);
echo "<script> alert('用户注册成功！');</script>";
echo "<script> window.location='index.php';</script>";
}
?>
