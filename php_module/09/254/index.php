<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通用商品信息检索</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="600" border="00" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="48" bgcolor="#0033FF"><table width="600" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="45" bgcolor="#FFFFFF"><img src="images/banner.gif" width="600" height="70" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="602" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#A2D4F4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <script language=JavaScript>
   today=new Date();
   function initArray(){
   this.length=initArray.arguments.length
   for(var i=0;i<this.length;i++)
   this[i+1]=initArray.arguments[i]  }
   var d=new initArray(
     "星期日",
     "星期一",
     "星期二",
     "星期三",
     "星期四",
     "星期五",
     "星期六");
document.write(
     "<font color=#000000 style='font-size:9pt;font-family: 宋体'> ",
	 "今天是&nbsp;",
     today.getYear(),"年",
     today.getMonth()+1,"月",
     today.getDate(),"日",
	  "&nbsp;&nbsp;",
     d[today.getDay()+1],
	"</font>" ); 
</script></td>
  </tr>
</table>
<table width="600" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="601" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr><form name="form1" method="post" action="index.php" >
        <td bgcolor="#FFFFFF"><div align="center">请输入商品名称：<input type="text" name="name" size="30" class="inputcss">&nbsp;&nbsp;<input type="submit" name="submit" value="查找" class="buttoncss" ></div></td></form>
      </tr>
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
 {
   include_once("conn.php");
   $name=$_POST[name];
   $sql=$conn->query("select * from tb_goods where name  like '%".$name."%'");
   $info=$sql->fetch_array(MYSQLI_ASSOC);
   if($info==NULL)
    {
	 echo "<div align=center>没有查找到该商品!</div>";
	}
  else
	{
?>
<table width="600" height="15" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="600" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="600" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="156" height="25" bgcolor="#A2D4F4"><div align="center">商品名称</div></td>
        <td width="134" bgcolor="#A2D4F4"><div align="center">商品价格</div></td>
        <td width="141" bgcolor="#A2D4F4"><div align="center">商品数量</div></td>
        <td width="164" bgcolor="#A2D4F4"><div align="center">进货日期 </div></td>
      </tr>
	  <?php
	   do
	    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[price];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shuliang];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
      </tr>
	  <?php
	    }
	   while($info=$sql->fetch_array(MYSQLI_ASSOC));
	  ?>
    </table></td>
  </tr>
</table>

<?php
  }
}
?>

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
