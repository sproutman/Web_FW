<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看数据库</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
    if(form.hostname.value==""){
	  alert("请输入MySQL数据库服务器的地址!");
       form.hostname.select();
	   return(false);
    }	 
  
     if(form.name.value==""){
	  alert("请输入用户名!");
       form.name.select();
	   return(false);
    }
	  if(form.pwd.value==""){
	  alert("请输入用户密码!");
       form.pwd.select();
	   return(false);
    }
   return(true);
  }

</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="400" height="50" /></td>
  </tr>
</table>
<table width="400" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="400" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#45B0FF"><table width="400" height="20" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td width="101" bgcolor="#FFFFFF">地址：<input type="text" name="hostname" class="inputcss" size="7"></td>
        <td width="115" bgcolor="#FFFFFF">用户名：<input type="text" name="name" class="inputcss" size="7"></td>
        <td width="115" bgcolor="#FFFFFF">密码：<input type="password" name="pwd" class="inputcss" size="7"></td>
        <td width="64" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" value="查看" name="submit" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="400" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php 
 if($_POST[submit]!="")
  {
?>
<table width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#4AB1FF"><table width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" bgcolor="#99CCFF">MySQL数据库服务器中的所有数据库名称列表如下：</td>
      </tr>
	  <?php
		 $hostname=$_POST[hostname];
		 $name=$_POST[name];
		 $pwd=$_POST[pwd];
		 $conn=mysql_connect($hostname,$name,$pwd);
		 $sql=mysql_query("show databases",$conn);
		 while($info=mysql_fetch_array($sql))
		 {
		 
		?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><?php  print_r($info[0]);?></td>
      </tr>
	  <?php
	    }
	  ?>
    </table></td>
  </tr>
</table>
<?php
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
