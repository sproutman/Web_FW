<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û�ע��</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
  
    if(form.nc.value==""){
	  alert("�������û��ǳ�!");
	  form.nc.select();
	  return(false);
	}
   if(form.pwd.value==""){
	  alert("������ע������!");
	  form.pwd.select();
	  return(false);
	}
	 if(form.email.value==""){
	  alert("������E-mail��ַ!");
	  form.email.select();
	  return(false);
	}
	
	if(form.address.value==""){
	  alert("�������ͥ��ַ!");
	  form.address.select();
	  return(false);
	}
   return(true);
  }

</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="65" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#1170FF"><table width="500" height="157" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#B5D3FF"><div align="center">�û�ע��</div></td>
      </tr>
      <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">�û��ǳƣ�</div></td>
        <td width="347" bgcolor="#FFFFFF">&nbsp;<input type="text" name="nc" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">ע�����룺</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">E-mail��</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">��ͥסַ��</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="address" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="ע��" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss"></div></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
<?php
 if($_POST[submit]!="")
 {
    $conn=new mysqli("localhost","root","root","db_database09");
    $conn->query("set names gb2312");   
    $nc=$_POST[nc];
    $pwd=md5($_POST[pwd]);
    $email=$_POST[email];
    $address=$_POST[address];
    if($sql=$conn->query("call pro_reg('".$nc."','".$pwd."','".$email."','".$address."')")){
	   echo "<script>alert('�û�ע��ɹ�!');</script>";
	}else{
	    echo "<script>alert('�û�ע��ʧ��!');</script>";
	}
    
 }

?>
</body>
</html>
