<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>字符串的查找</title>
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
	<form name="form1" method="post" action="index.php">
      <tr>
        <td height="25" colspan="2" bgcolor="#666666"><div align="center" class="STYLE1">字符串查找</div></td>
      </tr>
      <tr>
        <td width="100" height="25" bgcolor="#FFFFFF"><div align="right">原字符串：</div></td>
        <td width="147" bgcolor="#FFFFFF">&nbsp;<input type="text" name="str1" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">要查找的字符串：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="str2" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="查找" class="buttoncss"></div></td>
      </tr></form>
    </table></td>
  </tr>
</table>
</body>
</html>
<br>
<?php
if($_POST[submit]!="")
 {
   $str1=$_POST[str1];
   $str2=$_POST[str2];
   echo "<div align=center>要查找的字符串在原字符串中的位置是：".(strpos($str1,$str2)+1)."</div>"; 
   
 }
?>