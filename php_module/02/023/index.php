<?php 
if($Submit=="提交"){
$username=$_POST[username];
$password=$_POST[password];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取文本框提交的值</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="283" height="85" border="1" cellpadding="0" cellspacing="0" background="images/admin2.gif">
<form name="form1" method="post" action="index.php">
  <tr>
    <td width="114" height="30" align="center" class="style1">管理员:</td>
    <td width="163" height="30" align="center"><input name="username" type="text" id="username4" size="20"></td>
  </tr>
  <tr>
    <td align="center" class="style1">密码:</td>
    <td height="30" align="center"><input name="password" type="password" id="password" value="" size="20"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25">&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
  </tr>
  </form>
</table>

</span>
<table width="284" border="1" cellpadding="0" cellspacing="0">
  <tr>
  <td height="25" align="center" class="style1"><?php echo "管理员:$username"?></td>
  </tr>
  <tr>
  <td height="25" align="center" valign="middle" class="style1"><?php echo "密码:$password";?></td>
  </tr>
</table>
</body>
</html>
