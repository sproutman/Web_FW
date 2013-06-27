<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>企业信息管理</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="524" height="86" /></td>
  </tr>
</table>
<table width="524" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="524" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#E27A06"><table width="524" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="104" height="25" bgcolor="#FACA86"><div align="center">资产名称</div></td>
        <td width="102" bgcolor="#FACA86"><div align="center">所属部门</div></td>
        <td width="94" bgcolor="#FACA86"><div align="center">价格</div></td>
        <td width="142" bgcolor="#FACA86"><div align="center">引进时间</div></td>
        <td width="76" bgcolor="#FACA86"><div align="center">操作</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_zc order by addtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	     echo "暂无资产信息!";
	   }
	   else
	   {
	     do
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bm];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[price];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="delete.php?id=<?php echo $info[id];?>" class="a1">删除</a></div></td>
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
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
