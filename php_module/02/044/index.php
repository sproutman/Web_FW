<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ð�ȫ��������</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<?php 
if($Submit=="�ύ"){
echo $username;
echo "<br>".$password;
}
?>
<body>
<table width="350" border="1" cellpadding="0" cellspacing="0" background="images/jjj.JPG">
  <tr align="center">
    <td height="23" colspan="2" class="style1">���ð�ȫ��������</td>
  </tr>
  <tr align="center">
    <td height="23" colspan="2"><span class="style1">���������Ա�û���������:</span></td>
  </tr>
  <form name="form1" method="post" action="index.php">
  <tr>
    <td width="169" height="22" align="right" class="style1">�û���:</td>
    <td width="175"><input name="username" type="text" id="username" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="right" class="style1">����:</td>
    <td><input name="password" type="password" id="password" size="20" style="font-family: '����';"
	 onCopy="return false" onCut="return false" onPaste="return false" maxlength="60"></td>
  </tr>
  <tr>
    <td align="right">&nbsp;<input type="submit" name="Submit" value="�ύ"></td>
    <td height="23">&nbsp;&nbsp;      <input type="reset" name="Submit2" value="����"></td>
  </tr>
  </form>
</table>
</body>
</html>
