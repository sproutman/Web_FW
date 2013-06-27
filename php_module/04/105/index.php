<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证日期的输入格式</title>
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
function checkdata1(data){
	var str=data;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/(\d{4}-)(\d{2}-)(\d{2})$/;  //匹配字符串中的指定位数，(\d{2})$表明以2个数字结尾
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}	
</script>
<script language="javascript">
//判断输入的日期是否正确
function checkdata(data){ 
if (data=="")
    {return true;}
	subYY=data.substr(0,4)
	if(isNaN(subYY) || subYY<=0){
		return true;
	}
	//转换月份
	if(data.indexOf('-',0)!=-1){	separate="-"}
	else{
		return true;}
		
		area=data.indexOf(separate,0)
		subMM=data.substr(area+1,data.indexOf(separate,area+1)-(area+1))
		if(isNaN(subMM) || subMM<=0){
		return true;
	}
		if(subMM.length<2){subMM="0"+subMM}
	//转换日
	area=data.lastIndexOf(separate)
	subDD=data.substr(area+1,data.length-area-1)
	if(isNaN(subDD) || subDD<=0){
		return true;
	}
	if(eval(subDD)<10){subDD="0"+eval(subDD)}
	NewDate=subYY+"-"+subMM+"-"+subDD
	if(NewDate.length!=10){return true;}
    if(NewDate.substr(4,1)!="-"){return true;}
    if(NewDate.substr(7,1)!="-"){return true;}
	var MM=NewDate.substr(5,2);
	var DD=NewDate.substr(8,2);
	if((subYY%4==0 && subYY%100!=0)||subYY%400==0){ //判断是否为闰年
		if(parseInt(MM)==2){
			if(DD>29){return true;}
		}
		}else{
		if(parseInt(MM)==2){
			if(DD>28){return true;}
		}	
	}
	var mm=new Array(4,6,9,11); //判断每月中的最大天数
	for(i=0;i< mm.length;i++){
		if (parseInt(MM) == mm[i]){
			if(parseInt(DD)>30){return true;}
		}else{
			if(parseInt(DD)>31){return true;}
		}
	}
	if(parseInt(MM)>12){return true;}
   return false;}
</script>
<script language="javascript">
function check(){
	if(form1.data.value==""){
		alert("请输入正确的日期");form1.data.focus();return;
	}	
	if(!checkdata1(form1.data.value)||form1.data.value.length!=10){
		alert("您输入的基本格式不对!");form1.data.focus();return;
	}
			if(checkdata(form1.data.value)){
		alert("您输入的日期不正确（如:1920-07-17）\n 请注意闰年!");form1.data.focus();return;
	}
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2"><span class="style1">验证日期输入格式</span></td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">用户名:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
          <span class="style2">用户名长度限制为0-30字节</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">密码:</td>
      <td class="style3"><input name="pass" type="password" id="pass" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">密码确认:</td>
      <td class="style3"><input name="remainpass" type="text" id="remainpass" size="20" maxlength="50">
      </td>
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
          <span class="style2">* 请输入正确的日期</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">真实姓名:</td>
      <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">联系电话</td>
      <td class="style3"><input name="tel" type="text" id="tel" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">身份证号码:</td>
      <td class="style3"><input name="ID card" type="text" id="ID card" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">个人空间:</td>
      <td class="style3"><input name="www" type="text" id="www" size="20" maxlength="70"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">E_mail:</td>
      <td class="style3"><input name="e_mail" type="text" id="e_mail2" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">邮政编码:</td>
      <td class="style3"><input name="postalcode" type="text" id="postalcode" size="20" maxlength="50">
          <span class="style2"> </span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">联系地址:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="提交" onClick="check();">
          <span class="style2"> (*为必填项目)</span>
          <input type="reset" name="Submit2" value="重置">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
