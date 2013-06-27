<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过鼠标的移动改变文本框的背景色</title>
</head>
<body>
<form name="form1" method="post" action="index.php">
  <table width="538" height="304"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="531" height="248" background="images/image_01.gif">&nbsp;</td>
    </tr>
    <tr align="center">
      <td height="55" colspan="2" background="images/image_02.gif">用户名：
          <input name="name" type="text" id="name"style="border-width:1;padding-left:4;padding-right:4;padding-top:1;padding-bottom:1;width:120px;height:15px" onFocus="this.select(); " onMouseOver="this.style.background='#ccffff';" onMouseOut="this.style.background='#FFFFFF'" size="80">
&nbsp;&nbsp;&nbsp;密码：
      <input name="pwd" type="password" id="pwd"style="border-width:1;padding-left:4;padding-right:4;padding-top:1;padding-bottom:1;width:120px;height:15px" onFocus="this.select(); " onMouseOver="this.style.background='#ccffff';" onMouseOut="this.style.background='#FFFFFF'" size="80">
&nbsp;
<input name="Btn_tj" type="image" src="images/2.gif"  value="登录" width="55" height="22" border="0"><br>      </td>
    </tr>
  </table>
</form>
<?php
if ($_POST["Btn_tj"]==""){
?>
<script language="javascript">
	alert("快看！鼠标指向文本框时，背景颜色变了吧！");
</script>
<?php
}
?>
</body>
</html>
