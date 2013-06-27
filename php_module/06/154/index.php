<?php session_start();include("Conn/conn.php");$furl=getenv("HTTP_REFERER")?>
<title>删除数据前给予提示信息</title>
<script language="javascript">
function delconfirm(x){
if(window.confirm('您确定删除该项吗?')==true)
 {
  window.location.href='index_ok.php?ljid='+x;}
}
</script>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 12px}
.STYLE3 {font-size: 13px}
-->
</style>
<table width="500" height="104" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/bg01.jpg" width="500" height="104"></td>
  </tr>
</table>
<table width="500" height="72" border="0" cellpadding="0" cellspacing="0" background="images/bg011.jpg">
 <?php 
  $query="select * from tb_delete where id limit 4";
  $result=mysql_query($query);
  while(@$myrow=mysql_fetch_array($result)){
  ?>
  <tr>
    <td width="77" height="36" align="center"><span class="STYLE3"><?php echo $myrow[user];?></span></td>
    <td width="96" align="center"><span class="STYLE3"><?php echo $myrow[title];?></span></td>
    <td width="155" align="center"><span class="STYLE3"><?php echo $myrow[text];?></span></td>
    <td width="95" align="center"><span class="STYLE3"><?php echo $myrow[data];?></span></td>
    <td width="77" align="left"><input name="Submit" type="submit" onClick="delconfirm(<?php echo $myrow[id];?>)" value="删除"></td>
  </tr>
    <?php }?>
  <tr>
    <td height="36">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="500" height="32" border="0" cellpadding="0" cellspacing="0" background="images/bg03.jpg">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
