<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="refresh" content="5" />
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

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">

<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
 <?php
 include_once("conn/conn.php");
 include_once("function.php");
 $sql=mysql_query("select * from tb_message order by pubtime desc limit 0,20 ",$conn);
 $info=mysql_fetch_array($sql);
 if($info!=false){
   do{
     if($info[touser]=="all"){
 ?> 
  <tr>
    <td  height="20"><img src="images/topic.gif" width="10" height="9"></td>
    <td ><div align="left"><font color="#3333FF">[&nbsp;<strong><?php echo $info[fromuser];?></strong>&nbsp;]&nbsp;对 [      &nbsp;<strong>所有人</strong>&nbsp;]
    说：&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;<?php echo getday($info[pubtime]);?>&nbsp;)</font></div></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($info[content]);?></div></td>
  </tr>
 <?php
      }else{
	  if($_SESSION["nc"]==$info[touser] ||$_SESSION["nc"]==$info[fromuser] ){
   ?>	  
	<tr>
    <td width="36" height="20"><img src="images/topic.gif" width="10" height="9"></td>
    <td><div align="left"><font color="#3333FF">[&nbsp;<strong><?php echo $info[fromuser];?></strong>&nbsp;]&nbsp;对 [      &nbsp;<strong><?php echo $info[touser];?></strong>&nbsp;]
    说：&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;<?php echo getday($info[pubtime]);?>&nbsp;)</font></div></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($info[content]);?></div></td>
  </tr>  
  <?php
         }	  
	  }
   }while($info=mysql_fetch_array($sql));
  }
 ?> 
</table>
</body>
</html>
