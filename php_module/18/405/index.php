<?php
include "conn/conn.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>确定对方的IP地址</title>
</head>
<style>
td{
font-size:9pt;
}
</style>
<body>
<?php 
$IP=getenv("REMOTE_ADDR");
$sql=mysql_query("select * from tb_chat");
$info=mysql_fetch_array($sql);
?>
<table width="778" height="403" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="402" background="images/bg.jpg"><table width="778" height="270" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="60" height="53">&nbsp;</td>
        <td width="218" height="50">&nbsp;</td>
        <td width="460" rowspan="5">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $info[info];?></td>
        <td width="40">&nbsp;</td>
      </tr>
      <tr>
        <td height="113">&nbsp;</td>
        <td height="140" align="right">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="203" rowspan="3">&nbsp;</td>
        <td height="24">昵称：&nbsp;<?php echo $info[name];?></td>
        <td rowspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="24">IP：&nbsp;<?php echo $IP;?></td>
      </tr>
      <tr>
        <td height="24">E-mail：&nbsp;<?php echo $info[email];?></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
