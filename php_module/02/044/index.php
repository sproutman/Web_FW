<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>设置安全的密码域</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<?php 
if($Submit=="提交"){
echo $username;
echo "<br>".$password;
}
?>
<body>
<table width="350" border="1" cellpadding="0" cellspacing="0" background="images/jjj.JPG">
  <tr align="center">
    <td height="23" colspan="2" class="style1">设置安全的密码域</td>
  </tr>
  <tr align="center">
    <td height="23" colspan="2"><span class="style1">请输入管理员用户名和密码:</span></td>
  </tr>
  <form name="form1" method="post" action="index.php">
  <tr>
    <td width="169" height="22" align="right" class="style1">用户名:</td>
    <td width="175"><input name="username" type="text" id="username" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="right" class="style1">密码:</td>
    <td><input name="password" type="password" id="password" size="20" style="font-family: '黑体';"
	 onCopy="return false" onCut="return false" onPaste="return false" maxlength="60"></td>
  </tr>
  <tr>
    <td align="right">&nbsp;<input type="submit" name="Submit" value="提交"></td>
    <td height="23">&nbsp;&nbsp;      <input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>
</body>
</html>
