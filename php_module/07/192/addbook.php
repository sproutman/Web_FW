<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ͼ����</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script>
function chkinput(form){
 if(form.bookname.value=="")
  {
   alert("����������!");
   return(false);
  }
  if(form.auto.value=="")
  {
   alert("����������!");
   return(false);
  }
  if(form.pub.value=="")
  {
   alert("���������������!");
   return(false);
  }
  if(form.pubtime.value=="")
  {
   alert("���������ʱ��!");
   return(false);
  }
  return(true);

}

</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="703" height="147" /></td>
  </tr>
</table>
<table width="703" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#EF5E0F" ><table width="704" height="157" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="savebook.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#F39A40"><div align="right">|&nbsp;<a href="index.php">���ͼ����Ϣ</a>&nbsp;|&nbsp;<a href="addbook.php">���ͼ����Ϣ</a>&nbsp;|&nbsp;</div></td>
      </tr>
      <tr>
        <td width="207" height="25" bgcolor="#FFFFFF"><div align="right">������</div></td>
        <td width="494" bgcolor="#FFFFFF">&nbsp;<input type="text" name="bookname" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">�����磺</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="pub" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">���ߣ�</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="auto" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">����ʱ�䣺</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="pubtime" size="25"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="���">&nbsp;<input type="reset" value="��д"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60"><div align="center"> ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ��</div></td>
  </tr>
</table>
</body>
</html>
