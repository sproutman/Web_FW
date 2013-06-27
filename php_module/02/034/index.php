<?php session_start();include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>投票系统中单选按钮与复选框的应用</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/hhh.JPG">
  <tr align="center">
    <td height="25" colspan="4"><span class="style1">投票主题浏览</span></td>
  </tr>
  <?php 
  $result=mysql_query("select * from tb_poll");
  while($myrow=mysql_fetch_array($result)){
  $tpzt=$myrow[tpzt];
  ?>
  <tr>
    <td width="46">&nbsp;</td>
    <td height="25" colspan="2" align="center" class="style1"><a href="index.php?lmbs=投票专区&lmlb=<?php echo $tpzt;?>" title="参加投票"><?php echo $myrow[tpzt];?></a></td>
    <td width="323"><span class="style2">&nbsp;说明:&nbsp;<?php echo $myrow[tpzt_sm];?></span></td>
  </tr>
  <?php }?>
  <tr>
    <td height="20" colspan="4" align="center">&nbsp;</td>
  </tr>
</table>
<p>
  <?php 
switch($lmbs and $lmlb){
case "$tpzt" :
include"indexs.php";
break;
}
?>
</p>
<p>&nbsp; </p>
</body>
</html>
