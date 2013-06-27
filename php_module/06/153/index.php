<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>批量数据删除</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="509" height="295" border="0" cellpadding="00" cellspacing="00" background="images/bg.JPG">
  <tr>
    <td width="24" height="90">&nbsp;</td>
    <td width="462">&nbsp;</td>
    <td width="23">&nbsp;</td>
  </tr>
  <tr>
    <td height="150">&nbsp;</td>
    <td align="center" valign="top"><form name="form1" method="post" action="index_ok.php">
      <table width="486" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="40" align="center">&nbsp;</td>
          <td width="62" height="25" align="center"><span class="STYLE1">用户名</span></td>
          <td width="62" align="center"><span class="STYLE1">聊天对象</span></td>
          <td width="102" align="center"><span class="STYLE1">内容</span></td>
          <td width="72" align="center"><span class="STYLE1">时间</span></td>
          <td width="72" align="center"><span class="STYLE1">IP</span></td>
        </tr>
		<?php $query=mysql_query("select * from tb_chartroom");
		if($query==true){
		while($myrow=mysql_fetch_array($query)){
		?>
        <tr>
          <td align="center"><span class="STYLE2">
            <input type="checkbox" name="<?php echo $myrow[id];?>" value="<?php echo $myrow[id];?>">
          </span></td>
          <td height="25" align="center"><span class="STYLE2"><?php echo $myrow[username];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[to_username];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[text];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[data];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[ip];?></span></td>
        </tr>
		<?php }}?>
        <tr>
          <td height="25" colspan="4" align="center">&nbsp;</td>
          <td colspan="2" align="left"><input type="submit" name="Submit" value="删除"></td>
          </tr>
		
      </table>
        </form>
    </td>
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
