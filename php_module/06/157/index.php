<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线删除多个指定的数据表</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function delconfirm(){
if(window.confirm('您确定删除该项吗?')==true){
  return true;
  }else{
  return false;}
}
</script>
<body>
<table width="557" height="338" border="0" cellpadding="00" cellspacing="00" background="images/bg.JPG">
  <tr>
    <td width="63" height="108">&nbsp;</td>
    <td width="431">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr>
    <td height="150">&nbsp;</td>
    <td align="center" valign="top">
      
      <table width="425" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td height="28" align="center"><span class="STYLE1">选项</span></td>
          <td align="center"><span class="STYLE1">数据表名</span></td>
        </tr>
		  <form name="form" method="post" action="index_ok.php" onSubmit="return delconfirm(); ">
	<?php 
$result = mysql_list_tables ("db_drop");
$i = 0;
while ($i < mysql_num_rows ($result)) {
    $tb_names = mysql_tablename ($result, $i);  
?> 
        <tr>
          <td height="25" align="center"><span class="STYLE2">
            <input type="checkbox" name="<?php echo $tb_names;?>" value="<?php echo $tb_names;?>">
          </span></td>
          <td align="center"><span class="STYLE2"><?php echo $tb_names;?></span></td>
        </tr>
		<?php  $i++; }?>	
        <tr>
          <td colspan="2" align="center"><input type="submit" name="Submit" value="删除"></td>
          </tr>
		</form>  
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
