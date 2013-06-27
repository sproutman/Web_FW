<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>以二进制形式上传图片到数据库</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 12px}
-->
</style></head>

<body>
<table width="355" height="222" border="0" align="center" cellpadding="0" cellspacing="0" background="images/318.jpg">
<form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1" >
  <tr>
    <td width="110" height="65" align="right">&nbsp;</td>
    <td width="184" align="center">&nbsp;</td>
    <td width="61">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="right">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td align="left" valign="middle"><input name="image" type="file" id="image" size="15"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="44">&nbsp;</td>
    <td align="center" valign="middle"><input type="submit" name="Submit" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="52">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</form>
</table>
<table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <?php
     $query="select * from tb_image1 where data order by id desc limit 2  ";
     $result=mysql_query($query);
     if($result){
     while ($myrow=mysql_fetch_array($result)){   ?>
    <td width="175" align="center"><table width="175" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="175" align="center"><img src="image_1.php?recid=<?php echo $myrow[id];?>"  width="170" height="100" border="0"></td>
       
      </tr>
      <tr>
        <td align="center" class="style1"><span class="style1">上传时间:</span><?php echo $myrow[data];?></td>
      </tr>
    </table></td> <?php }} ?>
  </tr>
</table>
</body>
</html>
