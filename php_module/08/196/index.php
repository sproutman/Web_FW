<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>创建数据表</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
    if(form.sqlstr.value==""){
	  alert("请输入创建表的SQL语句!");
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
        <td height="20"><div align="center"><input type="submit" name="submit"  value="创建"></div></td>
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
     echo "<script>alert('数据表创建成功!');</script>";
   }else{
      echo "<script>alert('数据表创建失败!');</script>";
   }
}
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
