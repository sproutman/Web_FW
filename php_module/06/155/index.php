<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>统计从数据库里删除的记录数</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="451" height="303" border="0" cellpadding="00" cellspacing="00" background="images/bg.JPG">
  <tr>
    <td width="63" height="120">&nbsp;</td>
    <td width="345">&nbsp;</td>
    <td width="43">&nbsp;</td>
  </tr>
  <tr>
    <td height="150">&nbsp;</td>
    <td align="center" valign="top">
      <table width="340" border="1" cellpadding="0" cellspacing="0" bordercolor="#A3C5CE">
        <tr>
          <td width="40" align="center">&nbsp;</td>
          <td width="62" height="25" align="center"><span class="STYLE1">用户名</span></td>
          <td width="62" align="center"><span class="STYLE1">聊天对象</span></td>
          <td width="102" align="center"><span class="STYLE1">内容</span></td>
          <td width="72" align="center"><span class="STYLE1">时间</span></td>
        </tr>
		<?php $query=mysql_query("select * from tb_chartroom");
		if($query==true){
		while($myrow=mysql_fetch_array($query)){
		?>
         <form name="form1" method="post" action="index_ok.php">
	    <tr>
          <td align="center"><span class="STYLE2">
            <input type="checkbox" name="<?php echo $myrow[id];?>" value="<?php echo $myrow[id];?>">
          </span></td>
          <td height="25" align="center"><span class="STYLE2"><?php echo $myrow[username];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[to_username];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[text];?></span></td>
          <td align="center"><span class="STYLE2"><?php echo $myrow[data];?></span></td>
        </tr>
			<?php }}?>
			
        <tr>
          <td height="25" colspan="4" align="center">&nbsp;</td>
          <td align="left"><input type="submit" name="Submit" value="删除"></td>
        </tr>
		  </form>
      </table>
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
