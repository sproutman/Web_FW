<html>
<head>
<title>用户注册</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
<style type="text/css">
<!--
body {
	margin-bottom: 0px;
}
td{
font-size:9pt;
}
-->
</style>
</head>
<body> 
<form action="register_deal.php" method="post" name="myform" >
<table width="530" height="418" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#A5F700">
      <tr>
        <td width="516" height="412" valign="top" background="images/bg.jpg"><table width="516" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="161" height="74">&nbsp;</td>
            <td width="345">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td height="285">&nbsp;</td>
            <td valign="top">
              <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="32%" height="23" align="center">用 户 名：</td>
                  <td width="68%"><input name="username" type="text" id="username" size="20">
				  <script language="javascript">
					   function openwin(x){
						 if (x==""){
							 alert("请输入用户名!"); myform.username.focus();return false;
					  }
					  else{
						 window.open("submit_checkuser.php?x="+x,"newframe","width=220,height=60");
						 }
					   }
				   </script>
				<a href="#" onClick="javascript:openwin(myform.username.value)">[检测用户]</a>
</td>
                </tr>
                <tr>
                  <td height="22" align="center">真实姓名：</td>
                  <td height="22"><input name="truename" type="text" id="truename" size="20">
        *</td>
                </tr>
                <tr>
                  <td height="18" align="center">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
                  <td height="18"><input name="pwd1" type="password" id="pwd1" size="20">
        *</td>
                </tr>
                <tr>
                  <td height="19" align="center">确认密码：</td>
                  <td height="19"><input name="pwd2" type="password" id="pwd2" size="20" onBlur="javascript:if(this.value!=this.form.pwd1.value){ alert('您两次输入的密码不一致！');}">
        * </td>
                </tr>
                <tr>
                  <td height="20" align="center">性别：</td>
                  <td><input name="sex" type="radio" value="男" checked>
                    男 
                      <input type="radio" name="sex" value="女">
                      女</td>
                </tr>
                <tr>
                  <td height="22" align="center">联系电话：</td>
                  <td><input name="tel" type="text" id="tel"></td>
                </tr>
                <tr>
                  <td height="18" align="center">OICQ号码：</td>
                  <td><input name="oicq" type="text" id="oicq"></td>
                </tr>
                <tr>
                  <td height="25" align="center" style="padding-left:10px">Email：</td>
                  <td class="word_grey"><input name="email" type="text" id="email" size="28">
        *</td>
                </tr>
                <tr>
                  <td height="21" align="center">个人主页：</td>
                  <td class="word_grey"><input name="homepage" type="text" id="homepage" size="28"></td>
                </tr>
                <tr>
                  <td height="20" align="center">家庭住址：</td>
                  <td class="word_grey"><input name="address" type="text" id="address" size="28"></td>
                </tr>
                <tr>
                  <td height="34">&nbsp;</td>
                  <td class="word_grey">&nbsp;&nbsp;                    <input name="submit" type="submit" class="btn_grey" value="提交" onClick="return check()">
&nbsp;                      <input name="submit2" type="reset" class="btn_grey" value="重填"></td></tr>
              </table>
           </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="43">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
  </table>
</form>
  </body>
</html>
