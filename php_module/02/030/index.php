<?php 
if($Submit=="�ύ"){
$file=$_POST[file]; }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�ļ����ֵ</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">��ȡ�ļ����ֵ</span></td>
  </tr>
  <form name="form1" method="post" action="index.php">
  <tr>
    <td width="95" align="center"><span class="style2">�ϴ�:</span></td>
    <td width="200"><input name="file" type="file" id="file" size="15" maxlength="80"></td>
  </tr>
  <tr>
    <td align="center" class="style2">����ϴ���ֵ:</td>
    <td class="style2"><?php echo $file;?></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ"></td>
  </tr>
  </form>
</table>

</body>
</html>
