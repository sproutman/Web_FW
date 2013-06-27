<?php if($Submit==true){
echo $number;
}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证输入的数值是否在指定范围内</title>
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
function checknumber(){     
       if (form1.number.value.length!=6) 
    { 
 		alert("请您输入正确的6位编号！");
		form1.number.focus();
		return (false);	 
    } 
		for (i=1;i<form1.number.value.length;i++){
    		ct=form1.number.value.charAt(i);
		     if (!(ct>='0'&&ct<='5'))
		     {
			  alert("个人编号只允许输入0-5之间的数字");
			  form1.number.focus();
		  	  return(false);
	    	     }
		}	
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2" class="style1">验证输入的数值是否在指定范围内</td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">用户名:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
          </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">个人编号:</td>
      <td class="style3">        <input name="number" type="text" id="number2" size="20" maxlength="50">
        <span class="style2"> * 限制在0-5之间的6位数字组合</span>      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">密码:</td>
      <td class="style3"><input name="pass" type="password" id="pass2" size="20" maxlength="50">
        <span class="style2">*请输入密码</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">联系地址:</td>
      <td class="style3"><input name="address" type="text" id="address" size="30" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="提交" onClick="checknumber();">
          <span class="style2"> (*为必填项目)</span>
          <input type="reset" name="Submit2" value="重置">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
