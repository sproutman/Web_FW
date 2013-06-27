<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查询统计结果中的前n条记录</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form){
   if(form.num.value==""){
     alert("请输入要查询的记录个数!");
	 form.num.select();
     return(false);
   }
   if(isNaN(form.num.value)==true){
     alert("个数只能为数字!");
	 form.num.select();
	 return(false);
   }
   return(true);
 }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="75" /></td>
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
     <form  name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#66CCFF"><div align="center">请输入记录个数：<input type="text" name="num" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" value="查找" class="buttoncss"></div></td>
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
    <td bgcolor="#0CA5FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="97" height="25" bgcolor="#66CCFF"><div align="center">姓名</div></td>
        <td width="99" bgcolor="#66CCFF"><div align="center">学号</div></td>
        <td width="67" bgcolor="#66CCFF"><div align="center">语文</div></td>
        <td width="70" bgcolor="#66CCFF"><div align="center">外语</div></td>
        <td width="68" bgcolor="#66CCFF"><div align="center">数学</div></td>
        <td width="92" bgcolor="#66CCFF"><div align="center">总成绩</div></td>
      </tr>
	   <?php
	     $num=$_POST[num];
		 include_once("conn.php");
		 $sql=mysql_query("select *,(yw+sx+wy) as total from tb_score order by (yw+sx+wy) desc limit 0,$num ",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?> 
		<tr>
        <td height="25" colspan="6" bgcolor="#FFFFFF"><div align="center"></div></td>
        </tr>
		<?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[wy];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[total];?></div></td>
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
       版权所有&nbsp;<a href="http://www.mingrisoft.com" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
