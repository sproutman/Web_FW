<?php 
if($Submit=="�ύ"){
$textarea=$_POST[textarea];
$select=$_POST[select];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�����б��ֵ</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="280" border="1" cellpadding="0" cellspacing="0" background="images/aaa.JPG">
<form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">Ա�������</span></td>
  </tr>
  <tr>
    <td width="80" height="20" align="center"><span class="style2">�������:</span></td>
    <td width="194"><select name="select" size="1">
      <option>��˾��չ</option>
      <option>��˾�ƶ�</option>
      <option selected>���ڷ���</option>
      <option>Ա��н��</option>
    </select></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="style2">������ݣ�</td>
    <td><textarea name="textarea" cols="22" rows="3"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ"></td>
  </tr>
  <tr>
    <td colspan="2" class="style2">&nbsp;&nbsp;��ȡ�����б��ֵ:<?php echo $select;?></td>
  </tr>
  <tr>
    <td colspan="2" class="style2">&nbsp;&nbsp;���������:<?php echo $textarea;?></td>
  </tr>
  </form>
</table>
</body>
</html>
