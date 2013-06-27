<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证用户名和密码是否正确</title>
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
function checkusername(username){
	var str=username;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/^(\w){6,10}$/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
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
	if(form1.username.value==""){
		alert("请输入用户名!");form1.username.focus();return;
	}
	if(!checkusername(form1.username.value)){
		alert("您输入的用户名不合法!");form1.username.focus();return;
	}
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
      <td height="24" colspan="2" class="style1">验证用户名和密码是否正确</td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">用户名:</td>
      <td width="344" class="style3"><input name="username" type="text" id="username" size="20" maxlength="50">
          <span class="style2">*用户名由6-10个字母、数字和下划线组成</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">密码:</td>
      <td class="style3"><input name="password" type="password" id="password" size="20" maxlength="50">
        <span class="style2">*
      密码由6-20位的字母、数字、下划线和点“.”组成</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">密码确认:</td>
      <td class="style3"><input name="password1" type="text" id="password1" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">性别:</td>
      <td><span class="style3">
        <input name="sex" type="radio" value="女 " checked>
        女
        <input type="radio" name="sex" value="男">
        男</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">出生日期:</td>
      <td class="style3"><input name="data" type="text" id="data" size="25" maxlength="50">
          <span class="style2">格式为2007-01-01</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">真实姓名:</td>
      <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">联系电话</td>
      <td class="style3"><input name="tel" type="text" id="tel" size="20" maxlength="50">
          <span class="style2"> * 请输入正确的电话号码</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">身份证号码:</td>
      <td class="style3"><input name="ID card" type="text" id="ID card" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">个人空间:</td>
      <td class="style3"><input name="www" type="text" id="www" size="20" maxlength="70"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">E_mail:</td>
      <td class="style3"><input name="e_mail" type="text" id="e_mail2" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">邮政编码:</td>
      <td class="style3"><input name="postalcode" type="text" id="postalcode" size="20" maxlength="50">
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
