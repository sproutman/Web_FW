<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0000FF"><table width="200" height="80" border="0" align="center" cellpadding="0" cellspacing="1">
	<form name="form1" method="post" action="<?php echo $PHP_SELF;?>">
      <tr>
        <td height="25" bgcolor="#0099FF"><div align="center" class="STYLE1">�ַ�����β�ո���</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">�ַ�:<input type="text" name="str" size="10"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit1" value="ȥ��ո�">&nbsp;<input type="submit" name="submit2" value="ȥ�ҿո�"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit3" value="ȥ�����пո�"></div></td>
      </tr>
	</form>  
    </table></td>
  </tr>
</table>
</body>
</html>
<br><br>
<div align="center">
<?php
if($_POST[submit1]!="")
 {
    $str=$_POST[str];
	echo $str."ȥ����ո�Ľ��Ϊ".ltrim($str);
 }

if($_POST[submit2]!="")
 {
    $str=$_POST[str];
	echo $str."ȥ���ҿո�Ľ��Ϊ".rtrim($str);
 }
 if($_POST[submit3]!="")
 {
    $str=$_POST[str];
	echo $str."ȥ���������пո�Ľ��Ϊ".trim($str);
 }

?>
</div>