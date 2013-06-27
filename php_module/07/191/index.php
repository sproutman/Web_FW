<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过ADO方式实现指定时间段的信息检索</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666688"><table width="200" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td><img src="images/banner.gif" width="753" height="75" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="754" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="753" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666688"><table width="753" height="50" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="325" height="25" bgcolor="#CCCCD4"><div align="center">主题</div></td>
        <td width="188" bgcolor="#CCCCD4"><div align="center">发表时间</div></td>
        <td width="126" bgcolor="#CCCCD4"><div align="center">发表人</div></td>
        <td width="109" bgcolor="#CCCCD4"><div align="center">浏览次数</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mssql_query("select * from tb_bbs order by pubtime desc",$conn);
	  $sql1=mssql_query("select count(*) as total from tb_bbs",$conn);
	  $info1=mssql_fetch_array($sql1);
	  $total=$info1[total];
	  
	  if($_GET[page]==""|| is_numeric($_GET[page])==false)
	   {
	      $page=1;
	   }
	  else
	   {
	      $page=$_GET[page];
	   }
	  
	  $pagesize=5;	
	 if($total%$pagesize==0)
	  {
	    $totalpage=$total/$pagesize;
	  }
	 else
	  {
	    $totalpage=ceil($total/$pagesize);
	  }	  
	 
	  $i=1;
	  while($info=mssql_fetch_array($sql))
	   {
	      if($i>$pagesize*($page-1) && $i<=$pagesize*$page) 
		  { 
	 ?>
	 <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[title];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pubtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pubuser];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[click];?></div></td>
      </tr>
	 <?php
	      }
		  $i++;
	  }
	 ?> 
	  </table></td>
  </tr>
</table>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="338" height="25"><div align="left">共有主题<?php echo $total;?>个&nbsp;每页显示<?php echo $pagesize;?>个&nbsp;第<?php echo $page;?>页/共<?php echo $totalpage;?>页</div></td>
    <td width="346"><div align="right">
	<?php
	 for($i=1;$i<=$totalpage;$i++){
	 ?>
	 <a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a>
	 <?php
	 }
	?>
	</div></td>
    <td width="70">&nbsp;</td>
  </tr>
</table>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60"><div align="center"> 版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      建议您在大于1024*768的分辨率下使用</div></td>
  </tr>
</table>
</body>
</html>
