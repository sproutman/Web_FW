<html>
<head>
<title>�û�ע��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
<style type="text/css">
<!--
body {
	margin-bottom: 0px;
}
td{
font-size:9pt;
}
-->
</style>
</head>
<body> 
<form action="register_deal.php" method="post" name="myform" >
<table width="530" height="418" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#A5F700">
      <tr>
        <td width="516" height="412" valign="top" background="images/bg.jpg"><table width="516" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="161" height="74">&nbsp;</td>
            <td width="345">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td height="285">&nbsp;</td>
            <td valign="top">
              <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="32%" height="23" align="center">�� �� ����</td>
                  <td width="68%"><input name="username" type="text" id="username" size="20">
				  <script language="javascript">
					   function openwin(x){
						 if (x==""){
							 alert("�������û���!"); myform.username.focus();return false;
					  }
					  else{
						 window.open("submit_checkuser.php?x="+x,"newframe","width=220,height=60");
						 }
					   }
				   </script>
				<a href="#" onClick="javascript:openwin(myform.username.value)">[����û�]</a>
</td>
                </tr>
                <tr>
                  <td height="22" align="center">��ʵ������</td>
                  <td height="22"><input name="truename" type="text" id="truename" size="20">
        *</td>
                </tr>
                <tr>
                  <td height="18" align="center">��&nbsp;&nbsp;&nbsp;&nbsp;�룺</td>
                  <td height="18"><input name="pwd1" type="password" id="pwd1" size="20">
        *</td>
                </tr>
                <tr>
                  <td height="19" align="center">ȷ�����룺</td>
                  <td height="19"><input name="pwd2" type="password" id="pwd2" size="20" onBlur="javascript:if(this.value!=this.form.pwd1.value){ alert('��������������벻һ�£�');}">
        * </td>
                </tr>
                <tr>
                  <td height="20" align="center">�Ա�</td>
                  <td><input name="sex" type="radio" value="��" checked>
                    �� 
                      <input type="radio" name="sex" value="Ů">
                      Ů</td>
                </tr>
                <tr>
                  <td height="22" align="center">��ϵ�绰��</td>
                  <td><input name="tel" type="text" id="tel"></td>
                </tr>
                <tr>
                  <td height="18" align="center">OICQ���룺</td>
                  <td><input name="oicq" type="text" id="oicq"></td>
                </tr>
                <tr>
                  <td height="25" align="center" style="padding-left:10px">Email��</td>
                  <td class="word_grey"><input name="email" type="text" id="email" size="28">
        *</td>
                </tr>
                <tr>
                  <td height="21" align="center">������ҳ��</td>
                  <td class="word_grey"><input name="homepage" type="text" id="homepage" size="28"></td>
                </tr>
                <tr>
                  <td height="20" align="center">��ͥסַ��</td>
                  <td class="word_grey"><input name="address" type="text" id="address" size="28"></td>
                </tr>
                <tr>
                  <td height="34">&nbsp;</td>
                  <td class="word_grey">&nbsp;&nbsp;                    <input name="submit" type="submit" class="btn_grey" value="�ύ" onClick="return check()">
&nbsp;                      <input name="submit2" type="reset" class="btn_grey" value="����"></td></tr>
              </table>
           </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="43">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
  </table>
</form>
  </body>
</html>
