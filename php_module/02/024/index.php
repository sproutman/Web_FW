<?php 
if($Submit=="�ύ"){
$hiddens=$_POST[ID];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�������ֵ</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<?php $hidden="027";?>
<table width="220" border="1" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="index.php">
  <tr>
    <td width="151" align="center" class="style1">�������ֵ :<?php echo $hidden;?>      <input type="hidden" name="ID" value="<?php echo $hidden;?>"></td>
    <td width="60" height="25"><input type="submit" name="Submit" value="�ύ"></td></tr>
  <tr>
    <td height="25" colspan="2" align="center" class="style1">��ȡ�������ֵ:<?php echo $hiddens;?></td>
  </tr> </form>
</table>
</body>
</html>
