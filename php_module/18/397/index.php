<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>�Ե�¼������м���

</title>
<style type="text/css">
<!--
.STYLE1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="250" height="75" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="250" height="105" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="index.php" >
	  <tr>
        <td height="25" colspan="2" bgcolor="#0099FF"><div align="center" class="STYLE1">�û���¼</div></td>
      </tr>
      <tr>
        <td width="84" height="25" bgcolor="#FFFFFF"><div align="center">�û�����</div></td>
        <td width="163" bgcolor="#FFFFFF">&nbsp;<input  type="text" name="name" size="22" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">���룺</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input  type="password" name="pwd" size="22" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="��¼" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!="")
 {
   $name=$_POST[name];
   $pwd=$_POST[pwd];
   echo "<script>alert('���������Ѿ�base64����!������".base64_encode($pwd)."');</script>";
 
 }

?>
</body>
</html>
