<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ɾ��FTP��������ָ�����ļ�</title>
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
	 if(form.filename.value=="")
	 {
	   alert("������Ҫɾ�����ļ�·��������!");
	   form.filename.select();
	   return(false);
	 }
	return true;
	} 
</script>
<body>
<table width="314" height="193" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="314" height="193" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="80" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="98" height="20"><div align="center">FTP��������ַ��</div></td>
        <td colspan="2">&nbsp;<input type="text" name="address" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20"><div align="center">�û�����</div></td>
        <td height="20" colspan="2">&nbsp;<input type="text" name="name" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20"><div align="center">�û����룺</div></td>
        <td height="20" colspan="2">&nbsp;<input type="password" name="pwd" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20"><div align="center">ɾ�����ļ�����</div></td>
        <td width="152" height="20">&nbsp;<input type="text" name="filename" size="20" class="inputcss"></td>
        <td width="64">&nbsp;<input type="submit" name="submit" value="ɾ��" class="buttoncss"></td>
      </tr>
      <tr>
        <td height="33" colspan="3">&nbsp;</td>
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
	$filename=$_POST[filename];
    $ftp=ftp_connect($address,21);
	ftp_login($ftp,$name,$pwd);
    if(@ftp_delete($ftp,$filename)){
	  echo "<script>alert('�ļ�ɾ���ɹ�!');</script>";
	}else{
	   echo "<script>alert('�ļ�ɾ��ʧ��!');</script>";
	}  
 }
?>
</body>
</html>
