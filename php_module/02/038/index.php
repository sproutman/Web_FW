<?php include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>修改数据时下拉列表的默认值为数据库中原数据信息</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="320" border="1" cellpadding="0" cellspacing="0" background="images/ggg.JPG">
  <tr align="center">
    <td height="25" colspan="5" class="style1">修改员工个人信息</td>
  </tr>
  <tr align="center">
    <td height="25"><span class="style1">姓名</span></td>
    <td><span class="style1">编号</span></td>
    <td><span class="style1">部门</span></td>
    <td><span class="style1">地址</span></td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  $query=mysql_query("select * from tb_userclass");
  while($myrow=mysql_fetch_array($query)){
  ?>
  <tr valign="middle">
    <td height="20"><span class="style2">&nbsp;<?php echo $myrow[username];?></span></td>
    <td><span class="style2">&nbsp;<?php echo $myrow[number];?></span></td>
    <td><span class="style2">&nbsp;<?php echo $myrow[userclass];?></span></td>
    <td><span class="style2">&nbsp;<?php echo $myrow[address];?></span></td>
    <td align="center" class="style2"><a href="041_delete.php?lmbs=<?php echo $myrow[number];?>">修改</a></td>
  </tr>
  <?php }?>
</table>
</body>
</html>
