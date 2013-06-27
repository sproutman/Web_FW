<?php session_start();
echo $_POST[user];
echo $_POST[pass];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过POST方法提交</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/5.1.JPG">
  <form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">通过POST方法提交</span></td>
  </tr>
  <tr>
    <td width="90" align="center" class="style1">管理员:</td>
    <td width="204" height="22"><input name="user" type="text" id="user" size="22"></td>
  </tr>
  <tr>
    <td align="center" class="style1">密码:</td>
    <td height="22"><input name="pass" type="password" id="pass" size="22"></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td height="22"><input type="submit" name="Submit" value="提交">
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>
</body>
</html>
