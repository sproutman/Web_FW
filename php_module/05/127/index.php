<?php include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>inlcude()函数的应用</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="350" border="1" cellpadding="0" cellspacing="0" background="images/5.6.JPG">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">inlcude()函数的应用</span></td>
  </tr>
  <tr align="center" class="style1">
    <td width="168" height="22">管理员名称</td>
    <td width="176">密码 </td>
  </tr>
  <?php $query="select * from tb_admin";
  $result=mysql_query($query);
  if($result==true){
  while($myrow=mysql_fetch_array($result)){
  ?>
  <tr align="center">
    <td><span class="style2"><?php echo $myrow[user];?></span></td>
    <td class="style2"><?php echo $myrow[pass];?></td>
  </tr>
  <?php }}?>
</table>
</body>
</html>
