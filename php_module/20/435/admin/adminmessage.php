<?php session_start();include("../conn/conn.php");
       if($name=="mr"){  ?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���������Թ���</title>
<style type="text/css">
<!--
.style2 {font-size: 12px}
body {
	background-color: #EFF3FF;
}
.style3 {color: #FF0000}
.STYLE4 {font-size: 14px}
-->
</style></head>
<body>
<table width="100%"  border="1" cellpadding="0" cellspacing="0">
  <tr align="center" valign="middle" bgcolor="#B5E7FF">
    <td height="25" class="style2">&nbsp;</td>
    <td class="style2">&nbsp;</td>
    <td colspan="3" class="style2 style3 STYLE4">������MESSAGE����</td>
    <td class="style2">&nbsp;</td>
  </tr>
  <tr align="center" valign="middle" bgcolor="#B5E7FF">
    <td width="5%" height="25" class="style2">���</td>
    <td width="10%" class="style2">������</td>
    <td width="11%" class="style2">�������</td>
    <td width="13%" class="style2">����ʱ��</td>
    <td width="51%" class="style2">��������</td>
    <td width="10%" class="style2">&nbsp;</td>
  </tr>
<?php $query="select * from tb_chartroom_messages where mesid ";
       $result=mysql_query($query);
       while($myrow=mysql_fetch_array($result)){ ?>
  <tr>
    <td align="center" class="style2"><?php echo $myrow[mesid];?></td>
    <td align="center" class="style2"><?php echo $myrow[fromuser];?></td>
    <td align="center" class="style2"><?php echo $myrow[touser];?></td>
    <td align="center" class="style2"><?php echo $myrow[time];?></td>
    <td class="style2"><?php echo $myrow[content];?></td>
    <td><a href="deletemes.php?mesid=<?php echo $myrow[mesid];?>" class="style2">ɾ��</a></td>
  </tr>
<?php } ?>
</table>
</body></html>
<?php }else{ 
echo "������ȷ��¼!";
echo "<meta http-equiv=\"Refresh\" content=\"2;url=adminlogin.php\">";} ?>