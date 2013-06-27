<?php session_start(); include("Conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>以文件域的形式显示数据信息(包括显示原文件)</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="350" border="0" cellpadding="0" cellspacing="0" background="images/jjj.JPG">
<?php $query="select * from tb_textarea";
$result=mysql_query($query);
while($myrow=mysql_fetch_array($result)){
?>
  <tr>
    <td height="23" align="center"><span class="style1">以文件域的形式显示数据信息</span></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1"><?php echo $myrow[name];?></td>
  </tr>
  <tr>
    <td align="center"><span class="style2">
      <textarea name="test" cols="45" rows="8" id="test"><?php echo $myrow[text];?></textarea>
    </span></td>
  </tr>
  <tr>
    <td align="right" class="style2"><?php echo $myrow[author];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="style2"><?php echo $myrow[data];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <?php }?>
</table>

</body>
</html>
