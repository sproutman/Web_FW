<?php
session_start();
include "conn/conn.php";
$_SESSION[id]=$_GET[id];
$sql=mysql_query("select * from tb_leaveword where id='$_SESSION[id]'");
$info=mysql_fetch_array($sql);
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/style.css">
<title>查看留言</title>
<style type="text/css">
<!--
.style2 {
	font-size: 12pt;
	color: #CC0099;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table width="565" border="1" align="center" cellpadding="3" cellspacing="2" bordercolor="#FFFFFF" bgcolor="#69C7EF">
  <tr>
    <td height="238" align="center"><span class="style2">查看留言</span><br>      <br>      <table width="528" border="1" align="center" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#69C7EF">
      <tr bgcolor="#FFFFFF">
        <td height="25" align="center">主题信息</td>
        <td><input name="txt_topic" type="text" id="txt_topic" value="<?php echo $info[topic];?>" size="35"></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="116" height="25" align="center">主题分类</td>
        <td width="395"><input name="txt_topic" type="text" id="txt_topic" value="<?php echo $info[resume];?>" size="35"></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="84" align="center">主题内容</td>
        <td><textarea name="txt_content" cols="60" rows="5" id="txt_content"><?php echo $info[content]; ?></textarea></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="26" align="center">留 言 人 </td>
        <td><input name="txt_topic2" type="text" id="txt_topic" value="<?php echo $info[author];?>" size="35"></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="26" colspan="2" align="center"> <a href="#" onclick="javascript:window.history.back();">返回</a></td>
        </tr>
    </table></td>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp;</p>
</body>
</html>
