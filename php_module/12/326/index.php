<?php 
session_start();
if($Submit=="输入"){
$ip=$_POST[ip];
$host_ip=gethostbyaddr($ip);}

if($Submit2=="输入"){
$name=$_POST[name];
$host_name=gethostbyname($name);}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>读取注册表信息</title>
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
<table width="350" height="150" border="0" cellpadding="0" cellspacing="0" background="images/339.gif">
  <form name="form" method="post" action="index.php">
  <tr>
    <td width="117" height="50">&nbsp;</td>
    <td width="76">&nbsp;</td>
    <td width="67">&nbsp;</td>
    <td width="90">&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td colspan="2" align="center"><input name="ip" type="text" id="ip" size="20">     </td>
    <td><input type="submit" name="Submit" value="输入"></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" align="left" valign="middle"><?php echo $host_ip;?></td>
    </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
<table width="350" height="150" border="0" cellpadding="0" cellspacing="0" background="images/335.gif">
  <form name="form1" method="post" action="index.php">
    <tr>
      <td width="111" height="50">&nbsp;</td>
      <td width="28">&nbsp;</td>
      <td width="121">&nbsp;</td>
      <td width="90">&nbsp;</td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td colspan="2" align="center"><input name="name" type="text" id="name" size="20">      </td>
      <td><input type="submit" name="Submit2" value="输入"></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="left" valign="middle"><?php echo $host_name;?></td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </form>
</table>
<p>&nbsp;</p>
</body>
</html>
