<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
function chkinput(form){
  if(form.address.value==""){
    alert("������FIP!��������ַ");
    form.address.select();
	return(false);
  }
  if(form.name.value==""){
    alert("�������û���!");
    form.name.select();
	return(false);
  }
  if(form.pwd.value==""){
    alert("�������û�����!");
    form.pwd.select();
	return(false);
  }
  return(true);
}

</script>
<table width="321" height="153" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="321" border="0" align="center" cellpadding="0" cellspacing="0">
	<form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
      <tr>
        <td height="50" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="105" height="25"><div align="center"><span class="STYLE1">FTP��������ַ</span>��</div></td>
        <td width="216">&nbsp;<input type="text" name="address" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">�û�����</div></td>
        <td height="25">&nbsp;<input type="text" name="name" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">���룺</div></td>
        <td height="25">&nbsp;<input type="password" name="pwd" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="28" colspan="2"><div align="center"><input type="submit" name="submit" class="buttoncss" value="����"></div></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!=""){
  $address=$_POST[address];
  $name=$_POST[name];
  $pwd=$_POST[pwd];
  $ftp=ftp_connect($address,21);
  if(@ftp_login($ftp,$name,$pwd)){
    echo "<script>alert('FTP���������ӳɹ�!�ļ�����Ŀ¼Ϊ".ftp_pwd($ftp)."');</script>";
  }else{
    echo "<script>alert('FTP����������ʧ��!');</script>";
  }
  
  
}

?>