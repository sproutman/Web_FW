<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>用户注册</title>
</head>
<body>
<script  language="javascript">
//判断用户的输入是否合法
function check(){
	if (myform.truename.value==""){
		alert("请输入真实姓名！");myform.truename.focus();return false;
	}
	if (myform.pwd1.value==""){
		alert("请输入密码！");myform.pwd1.focus();return false;
	}
	if (myform.pwd1.value.length<6){
		alert("密码至少为6位，请重新输入！");myform.pwd1.focus();return false;
	}		
	if (myform.pwd2.value==""){
		alert("请确认密码！");myform.pwd2.focus();return false;
	}
	if (myform.email.value==""){
		alert("请输入Email地址！");myform.email.focus();return false;
	}
	var i=myform.email.value.indexOf("@");
	var j=myform.email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("您输入的Email地址不正确，请重新输入！");myform.email.value="";myform.email.focus();return false;
	}
	//myform.submit();		
}
</script>
<table width="805" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="124" background="images/images_01.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" background="images/images_02.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="243" align="center" valign="middle" background="images/images_03.gif">
	<form name="myform" method="post" action="register_deal.php">
      <table width="537" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#69C7EF">
        <tr>
          <td><table width="537"  border="1" cellpadding="4" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#69C7EB">
            <tr bgcolor="#FFFFFF">
              <td width="32%" height="22" align="center">用 户 名：</td>
              <td width="68%"><input name="username" type="text" id="username4" size="20"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="22" align="center">真实姓名：</td>
              <td height="22"><input name="truename" type="text" id="truename" size="20">
      *</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="18" align="center">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
              <td height="18"><input name="pwd1" type="password" id="pwd1" size="20">
      *</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="19" align="center">确认密码：</td>
              <td height="19"><input name="pwd2" type="password" id="pwd2" size="20" onBlur="javascript:if(this.value!=this.form.pwd1.value){ alert('您两次输入的密码不一致！');}">
      * </td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="20" align="center">性别：</td>
              <td><input name="sex" type="radio" value="男" checked>
      男
        <input type="radio" name="sex" value="女">
      女</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="22" align="center" style="padding-left:10px">Email：</td>
              <td class="word_grey"><input name="email" type="text" id="email" size="28">
      *</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="21" align="center">个人主页：</td>
              <td class="word_grey"><input name="homepage" type="text" id="homepage" size="28"></td>
            </tr>
            <tr align="center" bgcolor="#FFFFFF">
              <td height="22" colspan="2">&nbsp;&nbsp;
                  <input name="submit" type="submit" class="btn_grey" value="提交" onClick="return check()">
&nbsp;
      <input name="submit2" type="reset" class="btn_grey" value="重填"></td>
            </tr>
          </table></td>
        </tr>
      </table>
	</form>    </td>
  </tr>
  <tr>
    <td height="22" background="images/images_05.gif">&nbsp;</td>
  </tr>
</table>

</body>
</html>
