<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���������ַ����ĳ���</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>
<script language="javascript">
function checkstr(str,digit){
	var n=0;
	for(i=0;i<str.length;i++){
		var leg=str.charCodeAt(i);
		if(leg>255){
		   	n+=2;
		}else {
			n+=1;
		}
	}
	if (n>digit){
		return true;
	}else {
		return false;
	}	 	 
}	
</script>
<script language="javascript">
function checkname(){
	var name=form1.username.value;
	if(name==""){
		alert("�û�������Ϊ��");
		form1.username.focus();
	}else{
		if(checkstr(name,20)){
			alert("�û������Ȳ��ܳ���20���ַ������������룡");
			form1.username.focus();
		}
	}	
}		
</script>

<body>
<table width="350" border="1" cellpadding="0" cellspacing="0" background="images/sssss.JPG">
 <form name="form1" method="post" action="">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">���տƼ�����--�û�ע��</span></td>
  </tr>
  <tr>
    <td width="79" align="center" class="style1">�û���:</td>
    <td width="265" height="20"><input name="username" type="text" id="username" size="20" maxlength="50">
      <span class="style2">*�û������ܳ���20���ֽ�</span></td>
  </tr>
  <tr>
    <td align="center" class="style1">����:</td>
    <td height="20"><input name="password" type="password" id="password" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td align="center" class="style1">����ȷ��:</td>
    <td height="20"><input name="password1" type="password" id="password1" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td align="center" class="style1">��ϵ��ַ:</td>
    <td height="20"><input name="address" type="text" id="address" size="25" maxlength="60">
    </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td height="20"><input type="submit" name="Submit" value="�ύ" onClick="checkname();">
    <input type="reset" name="Submit2" value="����"></td>
  </tr>
  </form>
</table>

</body>
</html>
