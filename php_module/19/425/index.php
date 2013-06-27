<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>更改FTP服务器中文件名称</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form)
  {
     if(form.address.value=="")
	 {
	   alert("请输入FTP服务器的地址!");
	   form.address.select();
	   return(false);
	 }
     if(form.name.value=="")
	 {
	   alert("请输入用户名称!");
	   form.name.select();
	   return(false);
	 }
	 if(form.pwd.value=="")
	 {
	   alert("请输入用户密码!");
	   form.pwd.select();
	   return(false);
	 }
	 if(form.sourcefile.value=="")
	 {
	   alert("请输入要更改的文件名称!");
	   form.sourcefile.select();
	   return(false);
	 }
	if(form.objfile.value=="")
	 {
	   alert("请输入文件新的名称!");
	   form.objfile.select();
	   return(false);
	 }
  
  
  
  }


</script>
<body>
<table width="392" height="257" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="back.gif"><table width="392" height="257" border="0" align="center" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="80" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="100" height="25"><div align="center">FTP服务器地址：</div></td>
        <td colspan="2">&nbsp;<input type="text" name="address" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">用户名：</div></td>
        <td height="25" colspan="2">&nbsp;<input type="text" name="name" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">密码：</div></td>
        <td height="25" colspan="2">&nbsp;<input type="password" name="pwd" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">原文件名：</div></td>
        <td height="25" colspan="2">&nbsp;<input type="text" name="sourcefile" size="25" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">新文件名：</div></td>
        <td width="180" height="25">&nbsp;<input type="text" name="objfile" size="25" class="inputcss"></td>
        <td width="112">&nbsp;
          <input type="submit" name="submit" value="更改" class="buttoncss">&nbsp;<input type="reset" value="重写" class="buttoncss"></td>
      </tr>
      <tr>
        <td height="52">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
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
	$sourcefile=$_POST[sourcefile];
	$objfile=$_POST[objfile];
    $ftp=ftp_connect($address,21);
	ftp_login($ftp,$name,$pwd);
    if(@ftp_rename($ftp,$sourcefile,$objfile)){
	  echo "<script>alert('文件名更改成功!');</script>";
	}else{
	   echo "<script>alert('文件名更改失败!');</script>";
	}  
 
 
 
 
 
 }



?>
</body>
</html>
