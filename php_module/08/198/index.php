<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ɾ�����ݱ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form){
   if(form.dbname.value==""){
     alert("���������ݿ���!");
	 form.dbname.select();
	 return(false);
   }
    if(form.tbname.value==""){
     alert("���������!");
	 form.tbname.select();
	 return(false);
   }
   return(true);
 }
</script>
<body>
<table width="175" height="109" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="175" height="109" border="0" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="30" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="63" height="20"><div align="center">���ݿ�����</div></td>
        <td width="112">&nbsp;<input type="text" name="dbname" size="15" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20"><div align="center">������</div></td>
        <td height="20">&nbsp;<input type="text" name="tbname" size="15" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><div align="center"><input type="submit" name="submit" class="buttoncss" value="ɾ��"></div></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
	 </form>> 
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!=""){
   $dbname=$_POST[dbname];
   $tbname=$_POST[tbname];
   $conn=mysql_connect("localhost","root","root");  
   mysql_select_db($dbname,$conn);
   if(mysql_query("drop tables $tbname",$conn)){
    echo "<script>alert('��ɾ���ɹ�!');</script>"; 
   }else{
    echo "<script>alert('��ɾ��ʧ��!');</script>";
   }
  
 }

?>
</body>
</html>
