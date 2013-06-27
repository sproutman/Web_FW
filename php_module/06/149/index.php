<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>批量数据更新</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="554" height="388" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
  <tr>
    <td width="80" height="90">&nbsp;</td>
    <td width="392">&nbsp;</td>
    <td width="82">&nbsp;</td>
  </tr>
  <tr>
    <td height="175">&nbsp;</td>
    <td align="left" valign="top"><table width="391" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="88" height="25" align="center" class="STYLE1">选项</td>
        <td width="108" align="center"><span class="STYLE1">用户名</span></td>
        <td width="98" align="center"><span class="STYLE1">权限</span></td>
        <td width="98" align="center"><span class="STYLE1">操作</span></td>
      </tr>
	   <form name="form1" method="post" action="index_ok.php">
	   <?php $query="select * from tb_update";
	          $result=mysql_query($query);
			  if($result==true){
			  while($myrow=mysql_fetch_array($result)){
	   ?>
      <tr>
        <td height="25" align="center"><input name="<?php echo $myrow[id];?>" type="checkbox" value="<?php echo $myrow[id];?>"></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow[user];?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow[popedom];?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow[operation];?></span></td>
      </tr>
	  <?php }}?>
      <tr>
        <td height="25">&nbsp;</td>
        <td align="center"><input type="submit" name="Submit" value="激活"></td>
        <td align="center"><input type="submit" name="Submit2" value="冻结"></td>
        <td>&nbsp;</td>
      </tr>
	    </form>
    </table>
    
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="123">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
