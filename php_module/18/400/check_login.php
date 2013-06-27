<?php
include "conn/conn.php";
$username=trim($_POST[user]);
$pass=trim($_POST[pass]);          //提取表单提交的密码值
$password=crypt($pass,"mr");       //用crypt()函数进行加密
$sql=mysql_query("select * from tb_gl where username='$username' and password='$password'");
$result=mysql_fetch_array($sql);
if($result==true){
	 echo "<script>alert('恭喜您登录成功!');window.location.href='index.php';</script>"; 
}else{
	 echo "<script>alert('你输入的用户名 $username 不存在或密码不正确!!'); window.location.href='index.php';</script>";
}
?>   
