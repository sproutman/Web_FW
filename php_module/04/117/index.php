<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证护照编号</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
function checknumber(number){
	var str=number;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/(P\d{7})|(G\d{8})/; 	
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
<script language="javascript">
function check(){
	if(form1.number.value==""){
		alert("请输入护照编号!");form1.number.focus();return;
	}
	if(form1.number.value.length>9||form1.number.value.length<8){
	    alert("您输入的护照编号不正确!");form1.number.focus();return;
	}
	if(!checknumber(form1.number.value)){
		alert("您输入的护照编号不正确!");form1.number.focus();return;
	}
	form1.submit();
}
</script>
<body>
<table width="500" border="1" cellpadding="0" cellspacing="0" background="images/sdd.JPG">
  <form name="form1" method="post" action="">
  <tr>
    <td height="20" colspan="4" align="center"><span class="style1">验证护照编号</span></td>
  </tr>
  <tr>
    <td width="90" height="20" align="center" class="style1">姓名：</td>
    <td width="140"><input name="textfield" type="text" size="19" maxlength="50"></td>
    <td width="82" align="center" class="style1">出生日期：</td>
    <td width="188"><input name="textfield2" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">性别：</td>
    <td><input name="textfield3" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">婚姻状况：</td>
    <td><input name="textfield10" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">身份证号码：</td>
    <td><input name="textfield4" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">护照编号：</td>
    <td><input name="number" type="text" id="number" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">所在省份：</td>
    <td><input name="textfield5" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">所在城市：</td>
    <td><input name="textfield8" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">联系电话：</td>
    <td><input name="textfield6" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">邮政编码：</td>
    <td><input name="textfield7" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">家庭住址：</td>
    <td colspan="2"><input name="textfield9" type="text" size="28" maxlength="80"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">备注：</td>
    <td colspan="3"><input name="textfield11" type="text" size="50" maxlength="100"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" name="Submit" value="提交" onClick="check();"></td>
    <td><input type="reset" name="Submit2" value="重置"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>
