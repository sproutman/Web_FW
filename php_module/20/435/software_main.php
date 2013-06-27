<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {font-size: 12px}
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
-->
</style></head>
<script language="javascript">
function checkmessage(){
    if(msgform.message.value==""){
	   alert("发言内容不能为空!");
	   msgform.message.focus();
	   return false;  }
       msgform.message.focus();
	   
	   return true; 
	     }
</script>
<body>
<table width="465" height="318" border="0">
  <tr>
    <td align="left" valign="top" background="images/main1.jpg"><table width="462" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="23" height="27">&nbsp;</td>
        <td width="430">&nbsp;</td>
        <td width="9">&nbsp;</td>
      </tr>
      <tr>
	   <?php 
  $query3="select * from tb_chartroom_user where username='$username'";
  $result3=mysql_query($query3);
  $sod=mysql_fetch_array($result3);
  $row=$sod[regtime]  
  ?>
        <td height="96">&nbsp;</td>
        <td align="left" class="STYLE1">
		  <span class="STYLE1"><?php
	    $query="select * from tb_chartroom_messages where time>'$row' order by mesid desc limit 0,6";
	    $result=mysql_query($query);
		echo mysql_error();
	    while($myrow=mysql_fetch_array($result)){
	      echo "[<font color=red>".$myrow[fromuser]."</font>]"."对";
		  echo "[<font color=red>".$myrow[touser]."</font>]说:";
		  echo "<font color='".$myrow[color]."'>".$myrow[content]."</font>";
		  echo "<br>";
	  }
	  ?>
		  </span> </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="42">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
	  <form action="message.php" method="post" name="msgform" onSubmit="return checkmessage()">
      <tr>
        <td height="57">&nbsp;</td>
        <td><textarea name="message" cols="55" rows="3" id="message"></textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td class="STYLE1"><input type="hidden" name="username" id="username" value="<?php echo $_SESSION[username];?>">          
<span class="style1">聊天对象:
          <select name="select2" size="1">
            <option>所有人</option>
            <?php 
           $quer="select * from tb_chartroom_online where username!='$_SESSION[username]' order by onid desc"; 
	       $resul=mysql_query($quer);
           while($myrow=mysql_fetch_array($resul)){ ?>
            <option><?php echo $myrow[username];?></option>
            <?php }?>
          </select>
		  &nbsp;&nbsp;
		  字体颜色:
            <select name="color" size="1">
              <option value="#ff0000">红</option>
              <option value="#ffff00">黄</option>
              <option value="#0000ff">蓝</option>
              <option value="#80080">紫</option>
              <option value="#008000">绿</option>
              <option value="#00cc00">青</option>
              <option value="#ffffff">白</option>
            </select></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="44">&nbsp;</td>
        <td align="center" valign="bottom">&nbsp;&nbsp;
          <input type="image" name="imageField" value="提交" src="images/tijiao.jpg">
         &nbsp;&nbsp;<a href="admin/adminlogin.php" target="_parent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp; <a href="logout.php" target="_parent"><img src="images/tuichu.jpg" width="70" height="24" border="0"></a></td>
        <td>&nbsp;</td>
      </tr>
	    </form>
    </table></td>
  </tr>
</table>
</body>
</html>
