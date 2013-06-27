<?php session_start(); include("../conn/conn.php");
	   if($name=="mr"){  ?>
<style type="text/css">
<!--
.style1 {font-size: 12px}
body {
	background-color: #EFF3FF;
}
.style2 {color: #FF0000}
.STYLE3 {font-size: 14px}
-->
</style>
<title>在线用户管理</title>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr align="center" valign="middle" bgcolor="#8CC6FF">
    <td height="29" colspan="4" class="style2 STYLE3">在线用户管理</td>
  </tr>
  <tr align="center" valign="middle" bgcolor="#8CC6FF">
    <td height="29" class="style1">用户名</td>
    <td class="style1">进入时间</td>
    <td class="style1">IP</td>
    <td class="style1">是否踢出</td>
  </tr>
<?php $query="select * from tb_chartroom_online where is_online=1  order by onid desc";
	   $result=mysql_query($query);
	   if($result){
	   while($myrow=mysql_fetch_array($result)){  ?>
  <tr align="center" valign="middle">
    <td height="26" class="style1"><?php echo $myrow[username];?></td>
    <td class="style1"><?php echo $myrow[intime];?></td>
    <td class="style1"><?php echo $myrow[ip];?></td>
	<td><a href="kick.php?lmbs=<?php echo $myrow[urlencode(username)];?>" class="style1">踢出</a></td>
  </tr>
<?php  } }?>
</table>
<?php }else{ echo "请您正确登录!";
echo "<meta http-equiv=\"Refresh\" content=\"2;url=adminlogin.php\">";}?>