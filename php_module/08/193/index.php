<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>创建数据库</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  
  function chkinput(form){
    if(form.dbname.value==""){
	  alert("请输入新数据库名称!");
	  form.dbname.select();
	  return(false);
	}
    return(true);
  }
  
</script>
<body>
<table width="200" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="200" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="50" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="67" height="25"><div align="center">数据库名：</div></td>
        <td width="133">&nbsp;<input type="text" name="dbname" size="16" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><div align="center"><input type="submit" name="submit" value="创建" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
        </tr>
      <tr>
        <td height="20" colspan="2">&nbsp;</td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<?php
  if($_POST[submit]!=""){
    $conn=mysql_connect("localhost","root","root");
	$dbname=$_POST[dbname];
	mysql_query("drop database ".$dbname."if exists");
	if(mysql_query("create database ".$dbname."",$conn)){
	   echo "<script>alert('数据库创建成功!');</script>";
	}else{
	   echo "<script>alert('数据库创建失败!');</script>";
	}
  
  }
?>
</body>
</html>
