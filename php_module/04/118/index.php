<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤���ƺ���</title>
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
function check(){
    var value=form1.carnumber.value;
	if(form1.carnumber.value==""){
		alert("�����복�ƺ���!");form1.carnumber.focus();return;	
	}
	if(form1.carnumber.value.length!=8||isNaN(value.substr(3,4))){
		alert("������ĳ��ƺ��벻��ȷ!");form1.carnumber.focus();return;	
	}	
	if(!checkNo(form1.carnumber.value)){
		alert("������ĳ��ƺ��벻��ȷ!");form1.carnumber.focus();return;	
	}	
	form1.submit();
}
</script>
<script language="javascript">
function checkNo(str){
	var Expression=/^[\u4E00-\u9FA5]?[a-zA-Z]-\w{5}$/; 	
	var objExp=new RegExp(Expression);
	return objExp.test(str)
}
</script>
<body>
<table width="450"  border="1" cellpadding="0" cellspacing="0" background="images/sd.JPG">
<form name="form1" method="post" action="">
  <tr>
    <td height="25" colspan="2" align="center" class="style1">��֤���ƺ���</td>
    </tr>
  <tr>
    <td height="25" align="center"><span class="style1">���ƺ��룺</span></td>
    <td width="74%"><input name="carnumber" type="text" id="carnumber">
      <span class="style2">*(��ʽΪ����Z-00000)</span></td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">�������ͣ�</td>
    <td class="style2"><input name="carType" type="text" id="carType">
      </td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">����Ʒ����</td>
    <td class="style2"><input name="pm" type="text" id="pm">
      </td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">��ʻԱ������</td>
    <td class="style2">
      <input name="jsy" type="text" id="jsy">
      </td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">��ʻ֤���룺</td>
    <td class="style2">
      <input name="cardNo" type="text" id="cardNo">
      </td>
  </tr>
  <tr>
    <td height="88" align="center" class="style1">��&nbsp;&nbsp;&nbsp;&nbsp;ע��</td>
    <td><textarea name="bz" cols="35" rows="5" class="textarea" id="bz"></textarea></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" class="style1"><input name="Button" type="button"  value="�ύ" onClick="check(form1)">
&nbsp;
<input name="Submit2" type="button" class="btn_grey" value="����" onClick="history.back(1);"></td>
    </tr>
  </form>
</table>
</body>
</html>
