<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证两个文本框的值是否相等</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px;
	color: #FF0000;
}
.style3 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function checkepassword(password){
	var str=password;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/^[A-Za-z]{1}([A-Za-z0-9]|[._]){5,19}$/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
<script language="javascript">
function check(form1){
	if(form1.password.value==""){
		alert("请输入密码!");form1.password.focus();return;
	}
	if(!checkepassword(form1.password.value)){
		alert("您输入的密码不合法!");form1.password.focus();return;
	}
	if(form1.password1.value==""){
		alert("请确认密码!");form1.password1.focus();return;
	}
	if(form1.password1.value!=form1.password.value){
		alert("您两次输入的密码不一致，请重新输入!");form1.password.focus();return;
	}
	form1.submit();
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="" onSubmit="javascript:return check(form1);">
    <tr align="center">
      <td height="24" colspan="2" class="style1"> 验证两个文本框的值是否相等 </td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">用户名:</td>
      <td width="344" class="style3"><input name="username" type="text" id="username" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">密码:</td>
      <td class="style3"><input name="password" type="password" id="password" size="20" maxlength="50">
        <span class="style2">*
      密码由6-20位的字母、数字、下划线和点“.”组成</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">密码确认:</td>
      <td class="style3"><input name="password1" type="password" id="password1" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">联系地址:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="20" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="提交">
          <span class="style2"> (*为必填项目)</span>
          <input type="reset" name="Submit2" value="重置">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
