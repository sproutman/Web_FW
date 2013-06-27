<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取客户端TCP/IP端口的方法</title>
</head>
<style>
td{
font-size:9pt;
}
</style>
<body>
<?php $ip=getenv("SERVER_PORT");?>
<table width="787" height="259" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0099CC">
  <tr>
    <td height="259" valign="bottom" background="images/bg.jpg"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">客户端TCP/IP端口:&nbsp;&nbsp;<?php echo $ip;?><br>          <br>
          <br></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
