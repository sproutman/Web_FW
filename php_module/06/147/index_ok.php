<?php session_start();  include("conn/conn.php");
if($Submit==true){
$query=mysql_query("select * from tb_mysql where username='$username' and password='$password'");
if(mysql_num_rows($query)>0){
echo "<script> alert('系统日志:用户名:$username 登录时间:$data 具体工作:$work');window.location.href='index.php';</script>";
$result=mysql_query("insert into tb_log (user,data,work)values('$username','$data','$work')");
}else{echo "<script>alert('您输入的用户信息不正确!!'); window.location.href='index.php';</script>";}
}
?>
