<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�Զ�������ʽ�ϴ��ļ������ݿ�</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<script language="javascript">
function file1(form1){
 if(form1.file.value==""){
alert("�ϴ��ļ�����Ϊ��!!");
form1.file.focus();
return;}
form1.submit();}
</script>
<body>
<table width="462" height="162" border="0" cellpadding="0" cellspacing="0" background="images/314.gif">
  <tr>
    <td width="140" height="68">&nbsp;</td>
    <td width="246">&nbsp;</td>
    <td width="69">&nbsp;</td>
  </tr>
  <form name="form1" method="post" action="index_ok.php">
  <tr>
    <td height="28">&nbsp;</td>
    <td align="left" valign="middle"><input name="file" type="file" size="22"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td align="center" valign="top"><input type="submit" name="Submit" value="�ύ" onClick="file1(form1);"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td height="36">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
