<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>不提交表单获取单选按钮的值</title>
<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: "宋体";
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {
	font-size: 13px;
	font-family: "宋体";
}
.style3 {font-size: 13px;
	font-family: "宋体";
	font-weight: normal;
}
-->
</style>
<script language="javascript">
//判断用户的输入是否合法
function getcard(){
	var CardTypeValue;
	for (i=0;i<zhuce.CardType.length;i++){
		if (zhuce.CardType[i].checked){
			CardTypeValue=zhuce.CardType[i].value;
			break;  //使用该语句可以减少不必要的循环次数
		}
	}
	if(CardTypeValue=="身份证"){
		if(zhuce.cardNO.value.length!=15 && zhuce.cardNO.value.length!=18){
			alert("您输入的证件号码有误！");zhuce.cardNO.focus();return;
		}
	}else{
		if(CardTypeValue=="学生证"){
			if(zhuce.cardNO.value.length!=7 && zhuce.cardNO.value.length!=8){
				alert("您输入的证件号码有误！");zhuce.cardNO.focus();return;
			}		
		}
	}
}
</script>
</head>
<body>
<table width="590"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.gif">
      <tr valign="middle">
        <td height="25" colspan="3" align="center"><span class="style1">&nbsp;== 用户注册信息填写 == </span></td>
      </tr>
      <tr>
        <td width="280" height="263" align="center" valign="top"><table width="90%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="55%" height="20">&nbsp;</td>
            <td width="45%">&nbsp;</td>
          </tr>
          <tr align="left" valign="top">
          <td height="340" colspan="2"><ul>
              <li class="style1"> 用 户 名：为用户登录在线论坛的通行证，可使用英文字母、数字或英文字母、数字、下划线的组合，长度控制在3-20个字符之内。</li>
              <li class="style1">真实姓名： 请输入真实的姓名，该项为隐藏项，用户可以放心输入。</li>
              <li class="style1">密码：请设定在6-20位之间，登录密码及确认密码必须一致。</li>
              <li class="style1">证件：输入您的证件号码，请您<span class="style2">输入</span>正确的号码<span class="style2">。</span></li>
              <li class="style1">地址：请您输入正确的联系地址。</li>
              <li class="style1">Email：请填写有效的Email地址，以便与您联系。</li>
            </ul>            <p class="style1">&nbsp; </p>
            </td>
          </tr>
        </table></td>
        <td width="9" background="image/zc2.gif">&nbsp;</td>
        <td width="469" align="center" valign="top">
		  <table width="90%"  border="0" cellpadding="0" cellspacing="0">
        <form name="zhuce" method="post" action="index.php" enctype="multipart/form-data">
		  <tr>
		    <td width="18%" rowspan="2" align="center" valign="bottom"><span class="style2">用 户 名:</span></td>
		    <td height="16" valign="bottom"></td>
	      </tr>
		  <tr>
            <td height="16" valign="bottom"><input name="zc_username" type="text" id="zc_username" size="20" maxlength="20"> 
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">真实姓名:</td>
            <td><input name="zsxm" type="text" id="zsxm" size="20" maxlength="10">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">密&nbsp;&nbsp;&nbsp;&nbsp;码:</td>
            <td><input name="zc_password" type="password" id="zc_password" size="20" maxlength="30">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">密码确认:</td>
            <td><input name="mmqr" type="password" id="mmqr" size="20" maxlength="30">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">证件类别:</td>
            <td class="style2"><input name="CardType" type="radio" value="身份证">
              身份证
              <input type="radio" name="CardType" value="学生证">
                学生证</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">证件号码:</td>
            <td><input name="cardNO" type="text" id="TEL"  size="20" maxlength="20"></td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">联系电话:</td>
            <td><input name="lxdh" type="text" id="lxdh" size="15" maxlength="20">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">OICQQ号:</td>
            <td><input name="qq" type="text" id="qq" size="20" maxlength="20"></td>
          </tr>
          
          <tr>
            <td height="28" align="center" class="style2">Email:</td>
            <td><input name="email" type="text" id="email" size="35" maxlength="50">              
            *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">个人主页:</td>
            <td><input name="grzy" type="text" id="grzy" size="35" maxlength="50"></td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">联系地址:</td>
            <td><input name="lxdz" type="text" id="lxdz" size="35" maxlength="100">
            *</td>
          </tr>
          <tr>
            <td height="34" align="center">&nbsp;</td>
            <td class="style2"><input name="qrtj" type="submit" id="qrtj" value="确认提交" onClick="getcard()">
              <input type="reset" name="Submit2" value="刷新重置"></td>
          </tr>
		  </form>
        </table>
          
        </td>
      </tr>
</table>
</body>
</html>
