<?php session_start();include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>根据数据表结构自动生成数据录入页面</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 13px;
	font-weight: bold;
}
.STYLE2 {font-weight: bold}
-->
</style>
</head>

<body>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/ddd.JPG">
<form name="form1" method="post" action="index_ok.php">
  <tr align="center">
    <td height="25" colspan="2"><span class="STYLE1">用户资料录入</span></td>
  </tr>
  <?php 
   $ss=mysql_list_fields("db_database02", "tb_form");
   $count=mysql_num_fields($ss);
   for($i=1;$i<$count;$i++){
   ?>
 <tr> 
      <td width="68" height="22" align="center" class="STYLE1"><?php echo mysql_field_name($ss,$i);?></td>
      <td width="226" height="22"><input name="<?php echo mysql_field_name($ss,$i);?>" type="text" size="20" ></td>
  </tr>
  <?php }?>
  <tr>
    <td>&nbsp;</td>
    <td height="22"><input type="submit" name="Submit" value="提交">
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>
</body>
</html>
