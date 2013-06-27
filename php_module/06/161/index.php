<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>批量清空数据表</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>
<script language="javascript" type="text/javascript">
function deletes(){
  if (window.confirm('确定要删除该记录?')==true){
  return true;
  }else{ return false;}

}
</script>
<body>
<table width="525" height="130" border="0" cellpadding="0" cellspacing="0" background="images/bg1.jpg">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="525" border="0" cellpadding="0" cellspacing="0" background="images/bg2.jpg">
  <tr>
    <td width="153" height="25" align="right" class="STYLE1">选项</td>
    <td colspan="4" align="center" class="STYLE1">&nbsp;</td>
  </tr>
  <form name="form1" method="post" action="index_ok.php" onSubmit="return deletes();">
 <?php 
$result = mysql_list_tables ("db_drop");
$i = 0;
while ($i < mysql_num_rows ($result)) {
    $tb_names = mysql_tablename ($result, $i);  
?> 
        <tr>
          <td height="25" align="right"><span class="STYLE2">
            <input type="checkbox" name="<?php echo $tb_names;?>" value="<?php echo $tb_names;?>">
          </span></td>
          <td width="103" align="right"><span class="STYLE2"><?php echo $tb_names;?></span></td>
        </tr>
		<?php  $i++; }?>	
 
  
  <tr>
    <td height="25" colspan="3" align="center">&nbsp;</td>
    <td width="102" align="center"><input type="submit" name="Submit" value="删除"></td>
    <td width="166" align="center">&nbsp;</td>
  </tr>
  </form>
</table>
<table width="525" height="55" border="0" cellpadding="0" cellspacing="0" background="images/bg3.jpg">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
