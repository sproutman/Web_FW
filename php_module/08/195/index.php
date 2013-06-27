<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>删除数据库</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">

  function chkinput(form){
    if(form.dbname.value==""){
	  alert("请输入要删除的数据库名!");
	  form.dbname.select();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="175" height="109" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="175" height="109" border="0" align="center" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="62" height="25"><span class="STYLE1">数据库名：</span></td>
        <td width="113">&nbsp;<input type="text" name="dbname" size="15" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><div align="center"><input type="submit" value="删除" name="submit" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="25" colspan="2">&nbsp;</td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
  if($_POST[submit]!=""){
     $dbname=trim($_POST[dbname]);
	 $conn=mysql_connect("localhost","root","root");
     if(@mysql_query("drop database $dbname",$conn)){
	   echo "<script>alert('数据库删除成功!');</script>";
	 }else{
	  echo "<script>alert('数据库删除失败!');</script>";
	 }
  }

?>
</body>
</html>
