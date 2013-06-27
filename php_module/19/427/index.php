<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在FTP服务器上建立指定的目录</title>
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
	 if(form.listname.value=="")
	 {
	   alert("请输入要建立的目录名称!");
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
        <td width="107" height="25"><div align="center">FTP服务器地址：</div></td>
        <td colspan="2">&nbsp;<input type="text" name="address" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">用户名：</div></td>
        <td height="25" colspan="2">&nbsp;<input type="text" name="name" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">密码：</div></td>
        <td height="25" colspan="2">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25"><div align="center">目录名称：</div></td>
        <td width="154" height="25">&nbsp;<input type="text" name="listname" class="inputcss" size="20"></td>
        <td width="78">&nbsp;<input type="submit" name="submit" class="buttoncss" value="建立"></td>
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
	  echo "<script>alert('新目录建立成功!');</script>";
	}else{
	   echo "<script>alert('新目录建立失败!');</script>";
	}  
 }
?>
</body>
</html>
