<?php session_start();
session_unregister(username);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>聊天室系统设计</title>
<script language=JavaScript src=script/zc_check.js type=text/javascript></script>
<style type="text/css">
<!--
a:link {
	color: #FF0000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #FF0000;
}
.style1 {font-size: 14px}
.style2 {font-size: 13px}
-->
</style></head>
<body>

<table width="300" border="1" align="center" bgcolor="#7BBEE8">
<form action="dl_ok.php" method="post" name="dlform">
  <tr>
    <td height="35" colspan="2" align="center" valign="middle"><span class="style1">进入网络聊天室</span></td>
    </tr>
  <tr>
    <td width="102" align="center" valign="middle"><span class="style2">会员名称:</span></td>
    <td width="182"><input name="username" type="text" id="username" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="35" align="center" valign="middle">&nbsp;</td>
    <td><input name="denglu" type="submit" id="denglu" value="登录"></td>
  </tr>
  </form>
</table>

</body>
</html>