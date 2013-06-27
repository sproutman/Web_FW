<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用子查询作派生的表</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.png" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0CA5FF"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php">
	  <tr>
        <td bgcolor="#3B9FD3"><div align="center">&nbsp;
          <input type="submit" name="submit" value="显示学生成绩" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
{
?>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#67B8E6"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="145" height="25" bgcolor="#3B9FD3"><div align="center" class="STYLE1">学号</div></td>
        <td width="123" bgcolor="#3B9FD3"><div align="center" class="STYLE1">语文成绩</div></td>
        <td width="121" bgcolor="#3B9FD3"><div align="center" class="STYLE1">数学成绩</div></td>
        <td width="106" bgcolor="#3B9FD3"><div align="center" class="STYLE1">外语成绩</div></td>
        
      </tr>
      <?php
		 include_once("conn.php");
		 $sql=mysql_query("select s.sno,s.yw,s.wy,s.sx from (select sno,yw,wy,sx from tb_score) as s",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?>
      <tr>
        <td height="25" colspan="6" bgcolor="#FFFFFF"><div align="center">没有查找到相关信息!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[wy];?></div></td>
        
      </tr>
      <?php
	    }while($info=mysql_fetch_array($sql));
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
