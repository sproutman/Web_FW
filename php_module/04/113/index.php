<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤������ı��Ƿ�Ϊ����</title>
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
function checktruename(truename){
	var str=truename;
	 //��JavaScript�У�������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
	var Expression=/[^\u4E00-\u9FA5]/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}		
</script>
<script language="javascript">
function check(form1){
	if(form1.truename.value==""){
		alert("��������ʵ����!");form1.truename.focus();return;
	}
	if(checktruename(form1.truename.value)){
		alert("�������������ʽ����!");form1.truename.focus();return;
	}
	form1.submit();
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="" onSubmit="javascript:return check(form1);">
    <tr align="center">
      <td height="24" colspan="2" class="style1">��֤������ı��Ƿ�Ϊ����</td>
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
      <td height="18" align="center" class="style1">��ʵ����:</td>
      <td class="style2"><input name="truename" type="text" id="truename" size="20" maxlength="50">
      *����д��ʵ������</td>
    </tr>
    <tr>
      <td height="18" align="center" class="style1">��ϵ��ַ:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="20" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="�ύ">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
