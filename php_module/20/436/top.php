<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>明日科技在线聊天室</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800" height="8" bgcolor="#CFD9EC"></td>
  </tr>
  <tr>
    <td height="70" bgcolor="#82A3DF"><table width="800" height="95" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="70" bgcolor="#FFFFFF"><img src="images/banner.gif" width="233" height="46"></td>
      </tr>
      <tr>
        <td height="25" background="images/menubar_top.gif" bgcolor="#FFFFFF"><table width="800" height="25" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="586"><div align="left">&nbsp;<?php 
				include_once("conn/conn.php");
				if($_SESSION["nc"]!=""){
				$sqla=mysql_query("select * from tb_puser where usernc='".$_SESSION["nc"]."'",$conn);
				$infoa=mysql_fetch_array($sqla);
				if($infoa[mark]==1)
				{ ?>
                  |&nbsp;<a href="addadmin.php">添加管理员</a>&nbsp;|&nbsp;<a href="setwordnull.php">清空聊天记录</a>&nbsp;|&nbsp;<a href="chat.php">继续聊天</a>&nbsp;<?php }} ?><?php if($_SESSION["nc"]!=""){?>|&nbsp;<a href="logout.php">退出聊天室</a>&nbsp;|<?php }?></div></td>
                <td width="214">
				
				
				
	
				
				
				
				
				
				
				
				
				
				<div align="center">
今天是:&nbsp;<script language=JavaScript>
   today=new Date();
   function initArray(){
   this.length=initArray.arguments.length
   for(var i=0;i<this.length;i++)
   this[i+1]=initArray.arguments[i]  }
   var d=new initArray(
     "星期日",
     "星期一",
     "星期二",
     "星期三",
     "星期四",
     "星期五",
     "星期六");
document.write(
     "<font color=#000000 style='font-size:9pt;font-family: 宋体'> ",
     today.getYear(),"年",
     today.getMonth()+1,"月",
     today.getDate(),"日",
	  "&nbsp;&nbsp;",
     d[today.getDay()+1],
	"</font>" ); 
</script></div></td>
              </tr>
            </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="800" height="8" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
