<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤�ַ����Ƿ���ָ���ַ�����ͷ</title>
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
var first1=form1.first.value;
var first2=first1.substr(0,1);//��ȡ�ı����еĵ�һ���ַ�
if(first2!="M"){
alert("��������ַ���������M��ͷ��!");form1.first.focus(); }
}
</script>
<body>
<table width="385" border="1" cellpadding="0" cellspacing="0" background="images/sssssss.JPG">
   <form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="23" colspan="2"><span class="style1">��֤�ַ����Ƿ���ָ���ַ�����ͷ</span></td>
    </tr>
  <tr>
    <td width="74" height="21" align="center" class="style1">�û���:
         </td>
    <td width="305"><input name="first" type="text" id="first" size="20" maxlength="50">
      <span class="style2">*�û��������ԡ�M����ͷ��</span></td>
  </tr>
  <tr>
    <td height="21" align="center" class="style1">����:</td>
    <td><input name="password" type="password" id="password" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="21" align="center" class="style1">��ʵ����:</td>
    <td><input name="truename" type="text" id="truename" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="21" align="center" class="style1">��ַ:</td>
    <td><input name="address" type="text" id="address" size="30" maxlength="80"></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ" onClick="check();">      
    <input type="reset" name="Submit2" value="����"></td>
  </tr>
   </form>
</table>

</body>
</html>
