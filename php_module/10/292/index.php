<?php
$str=<<<mark
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>IP转换</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
<body>
<table width="250" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="250" height="100" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php">
	  <tr>
        <td height="25" colspan="2" bgcolor="#666666"><div align="center" class="STYLE1 STYLE1">用户登录</div></td>
      </tr>
      <tr>
        <td width="60" height="25" bgcolor="#FFFFFF"><div align="right">用户名：</div></td>
        <td width="187" bgcolor="#FFFFFF">&nbsp;<input type="text" name="ip" size="18" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">密码：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="ipNum" size="18" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" value="登录" />
</div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
mark;
echo $str;
?>