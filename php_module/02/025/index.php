<?php 
if($Submit=="提交"){
$username=$_POST[username];
$test=$_POST[test];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取文本域的值</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	color: #0066FF;
}
.style4 {font-size: 13px; color: #0066FF; }
-->
</style>
</head>

<body>
<table width="300" height="182" border="1" cellpadding="0" cellspacing="0" background="images/bg.gif">
 <form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="30" colspan="2"><span class="style1">明日科技留言板系统</span></td></tr>
  <tr>
    <td width="83" height="25" align="center"><span class="style4">用户名:</span></td>
    <td><input name="username" type="text" id="username"></td> </tr>
  <tr>
    <td align="center" class="style4">留言内容:</td>
    <td height="50"><textarea name="test" cols="25" rows="5" id="test">欢迎大家访问我们的论坛</textarea></td> </tr>
  <tr align="center">  <td height="25" colspan="2"> <input type="submit" name="Submit" value="提交"></td>
    </tr>
  <tr align="center">
    <td height="25" colspan="2"><span class="style4"><?php echo $username;?></span></td>
    </tr>
  <tr>
    <td height="25" colspan="2" align="center"><span class="style4"><?php echo $test;?></span></td>
    </tr>
  </form>
</table>

</body>
</html>
