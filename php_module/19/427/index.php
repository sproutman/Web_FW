<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��FTP�������Ͻ���ָ����Ŀ¼</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form)
  {
     if(form.address.value=="")
	 {
	   alert("������FTP�������ĵ�ַ!");
	   form.address.select();
	   return(false);
	 }
     if(form.name.value=="")
	 {
	   alert("�������û�����!");
	   form.name.select();
	   return(false);
	 }
	 if(form.pwd.value=="")
	 {
	   alert("�������û�����!");
	   form.pwd.select();
	   return(false);
	 }
	 if(form.listname.value=="")
	 {
	   alert("������Ҫ������Ŀ¼����!");
	   form.listname.select();
	   return(false);
	 }
	return true;
	} 
</script>
<body>
<table width="339" height="229" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="339" height="229" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="80" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="107" height="25"><div align="center">FTP��������ַ��</div></td>
        <td colspan="2">&nbsp;<input type="text" name="address" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">�û�����</div></td>
        <td height="25" colspan="2">&nbsp;<input type="text" name="name" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">���룺</div></td>
        <td height="25" colspan="2">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">Ŀ¼���ƣ�</div></td>
        <td width="154" height="25">&nbsp;<input type="text" name="listname" class="inputcss" size="20"></td>
        <td width="78">&nbsp;<input type="submit" name="submit" class="buttoncss" value="����"></td>
      </tr>
      <tr>
        <td height="49" colspan="3">&nbsp;</td>
      </tr></form>
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
 {
 
    $address=$_POST[address];
	$name=$_POST[name];
	$pwd=$_POST[pwd];
	$listname=$_POST[listname];
    $ftp=ftp_connect($address,21);
	ftp_login($ftp,$name,$pwd);
    if(@ftp_mkdir($ftp,$listname)){
	  echo "<script>alert('��Ŀ¼�����ɹ�!');</script>";
	}else{
	   echo "<script>alert('��Ŀ¼����ʧ��!');</script>";
	}  
 }
?>
</body>
</html>
