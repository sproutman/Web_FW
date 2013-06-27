<?php session_start(); include "conn/conn.php"; include "check_login.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>版主回复</title>
</head>
<?php
if($_POST["submit"]<>""){
$txt_topic=$_POST[txt_topic];
$txt_content=$_POST[txt_content];
$createtime=date("Y-m-d h:i:s");
$sql="insert into tb_relapse (id,topic,content,createtime,author) values('$_SESSION[id]','$txt_topic','$txt_content','$createtime','$_SESSION[username]')";
$info=mysql_query($sql);
if($info){
?>
<script language="javascript">
alert("版主回复信息添加成功！");window.location.href="index.php";
</script>
<?php 
}else{
?>
<script language="javascript">
alert("版主回复信息添加失败！");window.location.href="index.php";
</script>
<?php 
}
}
?><body>
<table width="805" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="157"><img src="images/images_01.gif" width="805" height="157" border="0" usemap="#Map"></td>
  </tr>
  <tr>
    <td height="34" background="images/images_02.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="226" align="center" valign="top" background="images/images_03.gif"><br>
      <form name="form1" method="post" action="">
        <table width="537" border="1" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#69C7EF">
          <tr bgcolor="#FFFFFF">
            <td width="147" align="center">回复主题</td>
            <td width="373"><input name="txt_topic" type="text" id="txt_topic" size="35"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td align="center">回复内容</td>
            <td><textarea name="txt_content" cols="50" rows="5" id="txt_content"></textarea></td>
          </tr>
          <tr align="center" bgcolor="#FFFFFF">
            <td colspan="2"><input type="submit" name="submit" value="提交">
&nbsp;
      <input type="reset" name="submit2" value="重置"></td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
  <tr>
    <td height="22" background="images/images_05.gif">&nbsp;</td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="493,130,553,152" href="leaveword.php">
  <area shape="rect" coords="560,130,610,151" href="regedit.php">
  <area shape="rect" coords="616,130,661,152" href="login.php">
  <area shape="rect" coords="669,130,718,151" href="index.php">
  <area shape="rect" coords="726,130,777,153" href="safe.php">
</map>

</body>
</html>
