<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤ʱ��������ʽ</title>
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
function check(data){
var data=form1.data.value;
if(data.substr(2,1)!=":" || data.substr(5,1)!=":"){
alert("�������ʱ�䲻�Ϸ�!!");
return false;
}
var checkdata=data.match(/^(\d{2})(:)?(\d{2})\2(\d{2})$/)
if(checkdata==null){alert("��������ȷ��ʱ��,лл!!");return false;}
if(checkdata[1]>24||checkdata[3]>60||checkdata[4]>60){
alert("�������ʱ�䲻�Ϸ�!!");
return false;
}
return true;
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2" class="style1">��֤ʱ��������ʽ</td>
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
      <td height="20" align="center" class="style1">��¼ʱ��:</td>
      <td class="style3"><input name="data" type="text" id="data" size="25" maxlength="50">
          <span class="style2">* ��������ȷ�ĵ�¼ʱ��,��ʽΪ00:00:00.</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ʵ����:</td>
      <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ�绰</td>
      <td class="style3"><input name="tel" type="text" id="tel" size="20" maxlength="50"></td>
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
          <span class="style2"> </span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ��ַ:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="�ύ" onClick="check();">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
