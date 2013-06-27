<?php session_start(); include("conn/conn.php");
       if($Submit==true){
          $user=$_POST[username];
          $pass=$_POST[password];
       $conndb=new con("localhost","root","root","db_database06");
	   $conn=$conndb->getcon();
       $result=mysql_query("select * from tb_mysql where username='$user' and password='$pass'",$conn);
	   $info=mysql_fetch_array($result);
       if($info!=true){
               echo "<script> alert('管理员登录失败!!'); history.back();</script>";
               }else{echo "管理员登录成功!!";
 }}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过面向对象连接数据库</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>
<table width="398" height="322" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
  <tr>
    <td width="166">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="86" height="206">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <form name="form1" method="post" action="index.php">
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><input name="username" type="text" id="username" size="17"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="2" align="center"><input name="password" type="text" id="password" size="17"></td>
    <td align="left"><input type="submit" name="Submit" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
