<?php
include "conn/conn.php";
if($_POST["submit"]!=""){
$username=$_POST[username];
$truename=$_POST[truename];
$pwd=$_POST[pwd1];
$sex=$_POST[sex];
$email=$_POST[email];
$tel=$_POST[tel];
$homepage=$_POST[homepage];
$oicq=$_POST[oicq];
$address=$_POST[address];
$sql="Insert Into tb_consumer  (username,pwd,truename,sex,email,tel,homepage,oicq,address) Values('$username','$pwd','$truename','$sex','$email','$tel','$homepage','$oicq','$address')";
$result=mysql_query($sql);
echo "<script> alert('用户注册成功！');</script>";
echo "<script> window.location='index.php';</script>";
}
?>
