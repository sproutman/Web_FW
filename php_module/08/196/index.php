<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������ݱ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
    if(form.sqlstr.value==""){
	  alert("�����봴�����SQL���!");
	  form.sqlstr.select();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="400" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="imgaes/back.gif"><table width="400" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="80">&nbsp;</td>
      </tr>
      <tr>
        <td height="80"><div align="center">
          <textarea name="sqlstr" rows="6" cols="60" class="inputcss"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="20"><div align="center"><input type="submit" name="submit"  value="����"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!=""){
   $sqlstr=$_POST[sqlstr];
   $conn=mysql_connect("localhost","root","root");
   mysql_select_db("db_database08",$conn);
   if(mysql_query($sqlstr,$conn)){
     echo "<script>alert('���ݱ����ɹ�!');</script>";
   }else{
      echo "<script>alert('���ݱ���ʧ��!');</script>";
   }
}
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
