<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤���ձ��</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
function checknumber(number){
	var str=number;
	 //��JavaScript�У�������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
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
		alert("�����뻤�ձ��!");form1.number.focus();return;
	}
	if(form1.number.value.length>9||form1.number.value.length<8){
	    alert("������Ļ��ձ�Ų���ȷ!");form1.number.focus();return;
	}
	if(!checknumber(form1.number.value)){
		alert("������Ļ��ձ�Ų���ȷ!");form1.number.focus();return;
	}
	form1.submit();
}
</script>
<body>
<table width="500" border="1" cellpadding="0" cellspacing="0" background="images/sdd.JPG">
  <form name="form1" method="post" action="">
  <tr>
    <td height="20" colspan="4" align="center"><span class="style1">��֤���ձ��</span></td>
  </tr>
  <tr>
    <td width="90" height="20" align="center" class="style1">������</td>
    <td width="140"><input name="textfield" type="text" size="19" maxlength="50"></td>
    <td width="82" align="center" class="style1">�������ڣ�</td>
    <td width="188"><input name="textfield2" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">�Ա�</td>
    <td><input name="textfield3" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">����״����</td>
    <td><input name="textfield10" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">���֤���룺</td>
    <td><input name="textfield4" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">���ձ�ţ�</td>
    <td><input name="number" type="text" id="number" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">����ʡ�ݣ�</td>
    <td><input name="textfield5" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">���ڳ��У�</td>
    <td><input name="textfield8" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">��ϵ�绰��</td>
    <td><input name="textfield6" type="text" size="19" maxlength="50"></td>
    <td align="center" class="style1">�������룺</td>
    <td><input name="textfield7" type="text" size="19" maxlength="50"></td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">��ͥסַ��</td>
    <td colspan="2"><input name="textfield9" type="text" size="28" maxlength="80"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20" align="center" class="style1">��ע��</td>
    <td colspan="3"><input name="textfield11" type="text" size="50" maxlength="100"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" name="Submit" value="�ύ" onClick="check();"></td>
    <td><input type="reset" name="Submit2" value="����"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>
