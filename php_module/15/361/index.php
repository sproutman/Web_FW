<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>利用webBrowser打印报表</title>
<link href="CSS/style.css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {color: #FDA02F}
body {
	margin-top: 0px;
}
-->
</style>
</head>
<body>
<object id="WebBrowser" classid="ClSID:8856F961-340A-11D0-A96B-00C04Fd705A2" width="0" height="0">
</object>
<table width="763" height="419" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" background="images/image_01.gif"><table width="763" height="410" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="143">&nbsp;</td>
      </tr>
      <tr>
        <td height="254" valign="top">
		<table width="650" border="1" align="center" cellspacing="0" bordercolorlight="#FC8002" bordercolordark="#FFFFFF" bgcolor="#FFFFFF">
          <tr align="center" bgcolor="#FDA02F">
            <td width="150" height="30">客户名称</td>
            <td width="93">电话</td>
            <td width="51" >联系人</td>
            <td width="83">联系人电话</td>
            <td width="172">E-mail</td>
            <td width="75">所在地区</td>
          </tr>
		  <?php
		  $sql=mysql_query("select * from tb_user");
		  $info=mysql_fetch_array($sql);
		   do{?>
          <tr>
            <td height="30"><?php echo $info[username];?></td>
            <td><?php echo $info[tel];?></td>
            <td><?php echo $info[linker];?></td>
            <td><?php echo $info[linktel];?></td>
            <td><?php echo $info[email];?></td>
            <td><?php echo $info[address];?></td>
          </tr>
		  <?php }while($info=mysql_fetch_array($sql))?>
        </table>
          <table width="654" align="center">
            <tr align="center">
              <td width="646" height="27" colspan="3" align="right"><span class="style1"><a href="#" onClick="document.all.WebBrowser.Execwb(7,1)">打印预览</a> <a href="#" onClick="document.all.WebBrowser.Execwb(6,1)">打印</a> <a href="#" onClick="document.all.WebBrowser.Execwb(6,6)">直接打印</a> <a href="#" onClick="document.all.WebBrowser.Execwb(8,1)">页面设置&nbsp;</a></span> </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td height="13">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
