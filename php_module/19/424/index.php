<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��FTP�������������ļ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">

 function chkinput(form){
  if(form.address.value=="")
   {
     alert("������FTP��������ַ!");
     form.address.select();
	 return(false);
   }
   
   if(form.name.value=="")
   {
     alert("�������û���!");
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
     alert("������Ҫ���ص��ļ���!");
     form.filename.select();
	 return(false);
   }
   
   if(form.saveaddress.value=="")
   {
     alert("�������ļ��ı����ַ!");
     form.saveaddress.select();
	 return(false);
   }
 
  return(true);
 }
</script>
<body>
<table width="278" height="196" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="278" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="92" height="25"><div align="center" class="STYLE1">FTP��������ַ��</div></td>
        <td colspan="2">&nbsp;<input type="text" name="address" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">�û�����</div></td>
        <td height="25" colspan="2">&nbsp;<input type="text" name="name" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">�û����룺</div></td>
        <td height="25" colspan="2">&nbsp;<input type="password" name="pwd" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">�����ļ�����</div></td>
        <td height="25" colspan="2">&nbsp;<input type="text" name="filename" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">�����ַ��</div></td>
        <td width="124" height="25">&nbsp;<input type="text" name="saveaddress" size="17" class="inputcss"></td>
        <td width="62">&nbsp;<input type="submit" name="submit" class="buttoncss" value="����"></td>
      </tr></form>
    </table>
      <table width="200" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
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
	 $saveaddress=$_POST[saveaddress];
     $ftp=ftp_connect($address,21);
     ftp_login($ftp,$name,$pwd);
     if(@ftp_get($ftp,$saveaddress."/".$filename,$filename,FTP_ASCII)){
	   echo "<script>alert('�ļ����سɹ�!');</script>";
	 }else{
	   
	   echo "<script>alert('�ļ�����ʧ��!');</script>";
	 }
   }
?>
</body>
</html>
