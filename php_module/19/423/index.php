<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上载文件到FTP服务器</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #0000FF}
-->
</style>
</head>
<script language="javascript">
function chkinput(form){
  if(form.address.value==""){
    alert("请输入FTP服务器地址!");
    form.address.select();
	return(false);
  }
   if(form.name.value==""){
    alert("请输入用户名称!");
    form.name.select();
	return(false);
  }
   if(form.pwd.value==""){
    alert("请输入用户密码!");
    form.pwd.select();
	return(false);
  }
  
   if(form.fileaddress.value==""){
    alert("请选择上传文件的位置!");
    form.fileaddress.focus();
	return(false);
  }
 return(true);
}
</script>
<body>
<table width="392" height="249" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="back.gif"><table width="392" height="249" border="0" align="center" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="80" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="167" height="25"><div align="right" class="STYLE1">FTP服务器地址：</div></td>
        <td width="225">&nbsp;<input type="text" name="address" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="right" class="STYLE1">用户名：</div></td>
        <td height="25">&nbsp;<input type="text" name="name" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="right" class="STYLE1">登录密码：</div></td>
        <td height="25">&nbsp;<input type="password" name="pwd" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="right" class="STYLE1">文件地址：</div></td>
        <td height="25">&nbsp;<input type="file" name="fileaddress" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="69" colspan="2" valign="top"><table width="200" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div align="center"><input type="submit"  name="submit" value="上传" class="buttoncss"></div></td>
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
  $fileaddress=$_POST[fileaddress];
  $ftp=ftp_connect($address,21);
  ftp_login($ftp,$name,$pwd);
  $filename=basename($fileaddress);
  if(ftp_put($ftp,$filename,$fileaddress,FTP_ASCII)){
    echo "<script>alert('文件上传成功!');</script>";
  }else{
     echo "<script>alert('文件上传失败!');</script>";
  }
 }
?>

</body>
</html>
