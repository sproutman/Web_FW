<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查询字符串</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="524" height="86" /></td>
  </tr>
</table>
<table width="524" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="524" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#E27A06"><table width="524" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="55" height="25" bgcolor="#FACE8E"><div align="center">ID</div></td>
        <td width="71" bgcolor="#FACE8E"><div align="center">编号</div></td>
        <td width="104" bgcolor="#FACE8E"><div align="center">用户名</div></td>
        <td width="63" bgcolor="#FACE8E"><div align="center">性别</div></td>
        <td width="137" bgcolor="#FACE8E"><div align="center">操作级别</div></td>
        <td width="87" bgcolor="#FACE8E"><div align="center">是否冻结</div></td>
      </tr>
	  <?php
	   include_once("conn.php");
	   $sql=mysql_query("select * from tb_worker where jb='PHP程序员' order by id desc",$conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false)
	   {
	     echo "没有查到该记录!";
	   }
	   else
	   {
	    do{
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[userid];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[jb];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dj];?></div></td>
      </tr>
	  <?php
	    }
	   while($info=mysql_fetch_array($sql));
	  }
	  ?>
    </table></td>
  </tr>
</table>
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
