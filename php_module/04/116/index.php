<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤����֤����</title>
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
function checkeNO(NO){
	var str=NO;
	 //��JavaScript�У��������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
	var Expression=/\d{17}[\d|X]|\d{15}/; 
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
	if(form1.IDcard.value==""){
		alert("����������֤����!");form1.IDcard.focus();return false;
	}
	if(!(form1.IDcard.value.length==15 || form1.IDcard.value.length==18)){
	  alert("����֤��ֻ��Ϊ15λ��18λ!");form1.IDcard.focus();return false;
	 
	}
	if(!checkeNO(form1.IDcard.value)){
		alert("����������֤���벻��ȷ!");form1.IDcard.focus();return false;
	}
	
	form1.submit();
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2" class="style1">��֤����֤����</td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">�û���:</td>
      <td width="344" class="style3"><input name="username" type="text" id="username" size="20" maxlength="50">
          </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����:</td>
      <td class="style3"><input name="password" type="password" id="password" size="20" maxlength="50">
          </td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">����ȷ��:</td>
      <td class="style3"><input name="password1" type="text" id="password1" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">�Ա�:</td>
      <td><span class="style3">
        <input name="sex" type="radio" value="Ů " checked>
        Ů
        <input type="radio" name="sex" value="��">
        ��</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">��������:</td>
      <td class="style3"><input name="data" type="text" id="data" size="25" maxlength="50">
          <span class="style2">��ʽΪ2007-01-01</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">��ʵ����:</td>
      <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">��ϵ�绰</td>
      <td class="style3"><input name="tel" type="text" id="tel" size="20" maxlength="50">
          <span class="style2"> </span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">����֤����:</td>
      <td class="style3"><input name="IDcard" type="text" id="IDcard" size="25" maxlength="60">
      <span class="style2">* ��������ȷ������֤����</span></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">���˿ռ�:</td>
      <td class="style3"><input name="www" type="text" id="www" size="20" maxlength="70"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">E_mail:</td>
      <td class="style3"><input name="e_mail" type="text" id="e_mail2" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">��������:</td>
      <td class="style3"><input name="postalcode" type="text" id="postalcode" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">��ϵ��ַ:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="20" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="�ύ" onClick="check();">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>