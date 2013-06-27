<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>字符串的base64解码</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="250" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="250" height="100" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index_2.php">
	  <tr>
        <td height="25" colspan="2" bgcolor="#666666"><div align="center" class="STYLE1">字符串的base64解码</div></td>
      </tr>
      <tr>
        <td width="110" height="25" bgcolor="#FFFFFF"><div align="right">base64编码值：</div></td>
        <td width="137" bgcolor="#FFFFFF">&nbsp;<input type="text" name="str" size="18" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">对应字符串的值：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<?php if($_POST[submit]!="") echo base64_decode(trim($_POST[str]));?></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="解码" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
