<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤�绰����</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {	font-size: 12px;
	color: #FF0000;
}
.style3 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function checkphone(tel){
	var str=tel;
	 //��JavaScript�У�������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
	var Expression=/(\d{3}-)(\d{8})$|(\d{4}-)(\d{7})$/;  //ƥ���ַ����е�ָ��λ����(\d{8})$������8�����ֽ�β
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}	
</script>


<script language="javascript">
function checktel(form1){
	if(form1.tel.value==""){
		alert("������绰����!");form1.tel.focus();return;
	}
	if(!checkphone(form1.tel.value)){
		alert("������ĵ绰���벻��ȷ!");form1.tel.focus();return;
	}
  	form1.submit();
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2"><span class="style1">��֤�绰����</span></td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">�û���:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
          <span class="style2">�û�����������Ϊ0-30�ֽ�</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����:</td>
      <td class="style3"><input name="pass" type="password" id="pass" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����ȷ��:</td>
      <td class="style3"><input name="remainpass" type="text" id="remainpass" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">�Ա�:</td>
      <td><span class="style3">
        <input name="sex" type="radio" value="Ů " checked>
        Ů
        <input type="radio" name="sex" value="��">
        ��</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��������:</td>
      <td class="style3"><input name="data" type="text" id="data" size="25" maxlength="50">
          <span class="style2">��ʽΪ2007-01-01</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ʵ����:</td>
      <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ�绰</td>
      <td class="style3"><input name="tel" type="text" id="tel" size="20" maxlength="50">
        <span class="style2"> * ��������ȷ�ĵ绰����</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">���֤����:</td>
      <td class="style3"><input name="ID card" type="text" id="ID card" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">���˿ռ�:</td>
      <td class="style3"><input name="www" type="text" id="www" size="20" maxlength="70"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">E_mail:</td>
      <td class="style3"><input name="e_mail" type="text" id="e_mail2" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��������:</td>
      <td class="style3"><input name="postalcode" type="text" id="postalcode" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ��ַ:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="button" name="Submit" value="�ύ" onClick="checktel(form1);">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
