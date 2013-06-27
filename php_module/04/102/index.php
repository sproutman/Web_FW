<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证网址</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
.style3 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function checkURL(URL){
	var str=URL;
	 //下面的代码中应用了转义字符"\"输出一个字符"/"
	var Expression=/http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
<script language="javascript">
function checkform1(){
	var www=form1.www.value;
	if(www==""){
		alert("请输入个人主页地址！");
		document.form1.www.focus();					
	}else{
		if(!checkURL(www)){
			alert("您输入的个人主页地址不合法！");
			document.form1.www.focus();
			return;
		}
	}
	form1.submit();
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
 
 <form name="form1" method="post" action=""> <tr align="center">
    <td height="24" colspan="2" class="style1">验证网址</td>
    </tr>
  <tr>
    <td width="100" height="20" align="center" class="style1">用户名:</td>
    <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
      <span class="style2">用户名长度限制为0-30字节</span></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">密码:</td>
    <td class="style3"><input name="pass" type="password" id="pass" size="20" maxlength="50">      </td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">密码确认:</td>
    <td class="style3"><input name="remainpass" type="text" id="remainpass" size="20" maxlength="50">      </td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">性别:</td>
    <td><span class="style3">
      <input name="sex" type="radio" value="女 " checked>
      女
        <input type="radio" name="sex" value="男">
      男</span></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">出生日期:</td>
    <td class="style3"><input name="data" type="text" id="data" size="25" maxlength="50">
      <span class="style2">格式为2007-01-01</span></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">真实姓名:</td>
    <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">联系电话</td>
    <td class="style3"><input name="del" type="text" id="del" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">身份证号码:</td>
    <td class="style3"><input name="ID card" type="text" id="ID card" size="25" maxlength="60"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">个人空间:</td>
    <td class="style3"><input name="www" type="text" id="www" size="20" maxlength="70">
      <span class="style2"> * 请输入正确的个人空间地址</span></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">E_mail:</td>
    <td class="style3"><input name="e_mail" type="text" id="e_mail2" size="25" maxlength="60"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">邮政编码:</td>
    <td class="style3"><input name="postalcode" type="text" id="postalcode" size="20" maxlength="50">
      </td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">联系地址:</td>
    <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
  </tr>
  <tr>
    <td height="24" align="center">&nbsp;</td>
    <td class="style3"><input type="button" name="Submit" value="提交" onClick="checkform1();">
      <span class="style2">      (*为必填项目)</span>        <input type="reset" name="Submit2" value="重置">
      
      </td>
  </tr>
  </form>
</table>

</body>
</html>
