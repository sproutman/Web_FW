<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�û���ȫ��¼</title>
</head>
<script language="javascript">
function mycheck(){
if(myform.username.value=="")
{alert("�û����Ʋ���Ϊ�գ���");myform.username.focus();return false;}
if(myform.password.value=="")
{alert("�û����벻��Ϊ�գ���");myform.password.focus();return false;}
}
</script>
<body>
<form name="myform" method="post" action="checklogin.php">
  <table width="350" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#4F8C0A">
    <tr>
      <td><table width="350" height="223" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.jpg">
        <tr>
          <td height="86" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="222" height="33" align="center"><p>�û�����
                  <input name="username" type="text" id="username" size="18"style="width:140;height:22">
          </p></td>
          <td width="128" height="102" rowspan="3" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="29" align="center">��&nbsp;&nbsp;�룺
              <input name="password" type="password" id="password" size="18" style=" font-family:Wingdings; width:140;height:22" oncopy="return false" oncut="return false" onpaste="return false"></td>
        </tr>
        <tr>
          <td height="31" align="center"><input type="submit" name="submit" onClick="return mycheck();" value="��¼">
&nbsp;
      <input type="reset" name="Submit2" value="����"></td>
        </tr>
        <tr>
          <td height="31" colspan="2">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
