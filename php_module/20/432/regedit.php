<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�û�ע��</title>
</head>
<body>
<script  language="javascript">
//�ж��û��������Ƿ�Ϸ�
function check(){
	if (myform.truename.value==""){
		alert("��������ʵ������");myform.truename.focus();return false;
	}
	if (myform.pwd1.value==""){
		alert("���������룡");myform.pwd1.focus();return false;
	}
	if (myform.pwd1.value.length<6){
		alert("��������Ϊ6λ�����������룡");myform.pwd1.focus();return false;
	}		
	if (myform.pwd2.value==""){
		alert("��ȷ�����룡");myform.pwd2.focus();return false;
	}
	if (myform.email.value==""){
		alert("������Email��ַ��");myform.email.focus();return false;
	}
	var i=myform.email.value.indexOf("@");
	var j=myform.email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("�������Email��ַ����ȷ�����������룡");myform.email.value="";myform.email.focus();return false;
	}
	//myform.submit();		
}
</script>
<table width="805" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="124" background="images/images_01.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" background="images/images_02.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="243" align="center" valign="middle" background="images/images_03.gif">
	<form name="myform" method="post" action="register_deal.php">
      <table width="537" border="1" align="center" bordercolor="#FFFFFF" bgcolor="#69C7EF">
        <tr>
          <td><table width="537"  border="1" cellpadding="4" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#69C7EB">
            <tr bgcolor="#FFFFFF">
              <td width="32%" height="22" align="center">�� �� ����</td>
              <td width="68%"><input name="username" type="text" id="username4" size="20"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="22" align="center">��ʵ������</td>
              <td height="22"><input name="truename" type="text" id="truename" size="20">
      *</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="18" align="center">��&nbsp;&nbsp;&nbsp;&nbsp;�룺</td>
              <td height="18"><input name="pwd1" type="password" id="pwd1" size="20">
      *</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="19" align="center">ȷ�����룺</td>
              <td height="19"><input name="pwd2" type="password" id="pwd2" size="20" onBlur="javascript:if(this.value!=this.form.pwd1.value){ alert('��������������벻һ�£�');}">
      * </td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="20" align="center">�Ա�</td>
              <td><input name="sex" type="radio" value="��" checked>
      ��
        <input type="radio" name="sex" value="Ů">
      Ů</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="22" align="center" style="padding-left:10px">Email��</td>
              <td class="word_grey"><input name="email" type="text" id="email" size="28">
      *</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="21" align="center">������ҳ��</td>
              <td class="word_grey"><input name="homepage" type="text" id="homepage" size="28"></td>
            </tr>
            <tr align="center" bgcolor="#FFFFFF">
              <td height="22" colspan="2">&nbsp;&nbsp;
                  <input name="submit" type="submit" class="btn_grey" value="�ύ" onClick="return check()">
&nbsp;
      <input name="submit2" type="reset" class="btn_grey" value="����"></td>
            </tr>
          </table></td>
        </tr>
      </table>
	</form>    </td>
  </tr>
  <tr>
    <td height="22" background="images/images_05.gif">&nbsp;</td>
  </tr>
</table>

</body>
</html>
