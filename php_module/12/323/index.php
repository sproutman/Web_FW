<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����Ŀ¼</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 14px;
	font-family: "��������";
	color: #FF0000;
}
-->
</style></head>
<body>
<table width="511" height="297" border="0" cellpadding="0" cellspacing="0" background="images/336.jpg">
  <tr>
    <td width="233" height="95">&nbsp;</td>
    <td width="141">&nbsp;</td>
    <td width="137">&nbsp;</td>
  </tr>
    <form name="form1" method="post" action="index.php">
  <tr>
    <td height="25">&nbsp;</td>
    <td><input name="file_dir" type="text" id="file_dir" size="18"></td>
    <td><input type="submit" name="Submit" value="�ύ">
    
      </td>
  </tr>
  </form>
  <tr>
    <td height="35">&nbsp;</td>
    <td><span class="style1">
      <?php 
	if($Submit=="�ύ"){
      $file_dir=$_POST[file_dir];
	if(mkdir($file_dir)==true){echo "�����ɹ�!";}else{echo "ʧ��!!";}}?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="142">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
