<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过异或加密</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="250" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0099CC"><table width="250" height="60" border="0" align="center" cellpadding="0" cellspacing="1">
	<form name="form1" method="post" action="index.php">
      <tr>
        <td height="25" colspan="2" bgcolor="#0099CC"><div align="center" class="STYLE1">金额的格式化输出</div></td>
      </tr>
      <tr>
        <td width="95" height="25" bgcolor="#FFFFFF"><div align="center">请输入金额数：</div></td>
        <td width="152" bgcolor="#FFFFFF">&nbsp;<input type="text" name="money" class="inputcss" size="20"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" value="格式化输出" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
 {
  $money=number_format($_POST[money],2); 
  echo "<div align=center>".$money."</div>";
 }

?>
</body>
</html>
