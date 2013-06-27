<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<LINK href="Css/style.css" rel=stylesheet>
<title>应用CSS+DIV实现无边框窗口</title>
</head>
<body>
<script language="javascript">
function Myopen(divID){    //根据传递的参数确定显示的层
	divID.style.display='block';
	divID.style.left=(screen.width-240)/2;
	divID.style.top=(screen.height-590)/2;
}
</script>
<table width="750" height="529" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" background="images/images_1.jpg">
	 <table width="750" height="437" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="707" height="83">&nbsp;</td>
        <td width="43">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right">
		<a href="#" onClick="Myopen(User)"><img src="images/email.gif" width="12" height="12" border="0">&nbsp;用户登录</a>&nbsp;&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="324" align="center">
<!--应用层设计用户登录表单页面开始-->
<div id="User" style="position:absolute;width:240px; height:139px;display:none;">
<table width="240" height="139"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="139" align="center"><form name="form_U" method="post">
        <table width="220" height="115" bgcolor="#FFFFFF" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
          <tr align="center" valign="middle">
            <td height="24" colspan="2" background="Images/bg_Login.GIF"><font color="#505875">=== 用户登录 === </font> </td>
          </tr>
          <tr>
            <td width="61" height="27" align="right" valign="middle">用户名：</td>
            <td width="157" valign="middle"><input name="UID" type="text" maxlength="20"></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">密 &nbsp;码：</td>
            <td valign="middle"><input name="PWD" type="password"  maxlength="20"></td>
          </tr>
          <tr align="center" valign="middle">
            <td height="27" colspan="2"><input name="Submit" type="button" class="btn_grey" value="登录" >
&nbsp;
            <input name="Submit2" type="button" class="btn_grey" value="关闭" onClick="javascript:User.style.display='none';"></td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
</div>
<!--应用层设计用户登录表单页面结束-->
		</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
