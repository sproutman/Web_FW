<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤�����Ƿ�Ϊ��ֵ��</title>
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
function checkprice(){
if (form1.price.value==0 && form1.price.value==""){ 
	alert("�����뵥�ۣ�");form1.price.focus();form1.price.select();return;}
    if(isNaN(form1.price.value)){
   		alert("������ĵ��۲�����Чֵ��");form1.price.focus();form1.price.select();return;
	}
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="" onSubmit="javascript:return checkprice();">
    <tr align="center">
      <td height="24" colspan="2" class="style1">��֤�����Ƿ�Ϊ��ֵ��</td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">��Ʒ��:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">���:</td>
      <td class="style3">
        <input name="postalcode" type="text" id="postalcode2" size="20" maxlength="50">
        <span class="style2"> </span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����:</td>
      <td class="style3"><input name="price" type="text" id="pass2" size="20" maxlength="50">
          <span class="style2">*������׼ȷ������</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����:</td>
      <td class="style3"><input name="sl" type="text" id="sl" size="30" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="�ύ">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
