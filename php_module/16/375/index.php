<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>mail()�����ʼ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form)
  {
    if(form.from.value=="")
	 {
	   alert("�����뷢���˵�ַ!");
	   form.from.select();
	   return(false);
	 }
	if(form.to.value=="")
	 {
	   alert("�������ռ��˵�ַ!");
	   form.to.select();
	   return(false);
	 }
     if(form.title.value=="")
	 {
	   alert("�������ʼ�����!");
	   form.title.select();
	   return(false);
	 }
	 if(form.content.value=="")
	 {
	   alert("�������ʼ�����!");
	   form.content.select();
	   return(false);
	 }
    return(true);
  }
</script>
<body>
<table width="333" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="500" height="72" ><img src="images/back_1.gif" width="500" height="72" /></td>
  </tr>
  <tr>
    <td width="500" height="150" background="images/back_2.gif"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
	<form name="form1" method="post" action="send.php" onsubmit="return chkinput(this)">
      <tr>
        <td width="100" height="25"><div align="center">�����ˣ�</div></td>
        <td width="350">&nbsp;<input type="text" name="from" size="50" class="inputcss" ></td>
      </tr>
      <tr>
        <td height="25"><div align="center">�ռ��ˣ�</div></td>
        <td height="25">&nbsp;<input type="text" name="to" size="50" class="inputcss" ></td>
      </tr>
      <tr>
        <td height="25"><div align="center">���ͣ�</div></td>
        <td height="25">&nbsp;<input type="text" name="cc" size="50" class="inputcss" ></td>
      </tr>
      <tr>
        <td height="25"><div align="center">���ͣ�</div></td>
        <td height="25">&nbsp;<input type="text" name="bcc" size="50" class="inputcss" ></td>
      </tr>
      <tr>
        <td height="25"><div align="center">���⣺</div></td>
        <td height="25">&nbsp;<input type="text" name="title" size="50" class="inputcss" ></td>
      </tr>
      <tr>
        <td height="100"><div align="center">���ݣ�</div></td>
        <td height="50">&nbsp;<textarea name="content" rows="8" cols="50" class="inputcss"></textarea></td>
      </tr>
	    <td height="30" colspan="2"><div align="center"><input type="submit" value="����" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss"></div></td>
	    </form>
    </table></td>
  </tr>
  <tr>
    <td width="500" height="52" background="images/back_3.gif"><div align="center">��Ȩ���У�����ʡ���տƼ����޹�˾</div></td>
  </tr>
</table>
</body>
</html>
