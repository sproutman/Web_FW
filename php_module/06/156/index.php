<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线删除指定的数据表</title>
</head>
<body>
<table width="456" height="419" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
  <tr>
    <td width="91">&nbsp;</td>
    <td width="172" height="125">&nbsp;</td>
    <td width="193">&nbsp;</td>
  </tr>
  <?php 
$result = mysql_list_tables ("db_drop");
$i = 0;
while ($i < mysql_num_rows ($result)) {
    $tb_names = mysql_tablename ($result, $i);  
 $i++;
?> 
<form name="form1" method="post" action="index_ok.php?lmbs=<?php echo $tb_names;?>">
  <tr>
    <td></td>
    <td height="35"><?php echo $tb_names;?>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="删除">
    </td>
  </tr>
  </form>
  <?php }?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>   
</table>
</body>
</html>
