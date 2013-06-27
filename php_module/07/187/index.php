<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户信息</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<?php
include_once("conn.php");
?>
<body>
<table width="300" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0099CC"><table width="300" height="50" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" colspan="2" bgcolor="#0099CC"><div align="center" class="STYLE1">用户信息</div></td>
      </tr>
      <tr>
        <td width="149" height="25" bgcolor="#FFFFFF"><div align="center">用户名</div></td>
        <td width="148" bgcolor="#FFFFFF"><div align="center">密码</div></td>
      </tr>
	  <?php
	   $sql=mssql_query("select * from tb_user",$conn);
	   $info=mssql_fetch_array($sql);
	   if($info==false)
	    {
		  echo "暂无用户信息";
		}
		else
		{
		 do
		  {
	  ?>
	  <tr>
        <td width="149" height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td width="148" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pwd];?></div></td>
      </tr>
	  <?php
	         }
	      while($info=mssql_fetch_array($sql));
	     } 
	  ?>
    </table></td>
  </tr>
</table>
</body>
</html>
