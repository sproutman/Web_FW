<?php 
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="refresh" content="10" />
<title>明日聊天室</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>
<script language="javascript">
  function selectuser(x){
    parent.form_bbs.touser.value=x;
	parent.form_bbs.touser1.value=x;
	window.location.href='selectuser.php?usernc='+x;
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<script src="function1.php"></script>
 <div id="toolTipLayer" style="position:absolute; visibility: hidden; z-index:0"></div>
<script language="JavaScript">initToolTips(); </script>
<table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
 <?php
  include_once("conn/conn.php");
  $sql=mysql_query("select * from tb_puser where online=1 order by logintime desc ",$conn);
  $info=mysql_fetch_array($sql);
  if($info==false){
 ?>
  <tr>
    <td width="25" height="25">&nbsp;</td>
    <td height="25" colspan="2"><div align="center">暂无人登录</div></td>
  </tr>
 <?php
  }
  else{
 ?>
 <tr onClick="javascript:selectuser('所有人')" style="cursor:hand">
   <td height="25" colspan="3" bgcolor="#99CCFF"><div align="center" class="STYLE1">发给所有参与者</div></td>
 </tr>
  
  <?php
   do{
	  if($info[usernc]!=$_SESSION["nc"]){
 ?> 
 <tr onClick="javascript:selectuser('<?php echo $info[usernc];?>')" style="cursor:hand">
    <td width="25" height="25"><div align="center"><img src="<?php echo $info[userhead];?>" width="20" height="20" onMouseOver="toolTip('<?php echo $info[usernc];?>', '<?php echo $info[email];?>', '<?php echo $info[ip];?>', '<?php echo $info[logintime];?>');" 
      onmouseout=toolTip(); border=0></div></td>
    <td width="77" height="25"><div align="center"><?php echo $info[usernc];?></div></td><?php
  }
  }while($info=mysql_fetch_array($sql));
 } 
 ?>
</table>
</body>
</html>
