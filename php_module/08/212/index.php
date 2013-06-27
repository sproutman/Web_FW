<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查询大于指定条件的数据</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
 function chkinput(form){
   if(form.num.value==""){
      alert("请输入数量!");
      form.num.select();
	  return(false);
   }
    if(isNaN(form.num.value)==true){
      alert("只能为数字!");
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
    <td bgcolor="#3497E5"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)"> 
	  <tr>
        <td bgcolor="#3497E5"><div align="center" class="STYLE1">商品数量大于
          &nbsp;
          <input type="text" name="num" class="inputcss" size="18">
            &nbsp;<input type="submit" name="submit" value="查找" class="buttoncss">
            (**)</div></td>
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
    <td bgcolor="#3497E5"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="98" height="25" bgcolor="#D3E1EC"><div align="center">ID</div></td>
        <td width="102" bgcolor="#D3E1EC"><div align="center">商品名称</div></td>
        <td width="94" bgcolor="#D3E1EC"><div align="center">单位</div></td>
        <td width="98" bgcolor="#D3E1EC"><div align="center">单价</div></td>
        <td width="102" bgcolor="#D3E1EC"><div align="center">数量</div></td>
      </tr>
	 <?php
	 $num=$_POST[num];
	 include_once("conn.php");
	 $sql=mysql_query("select * from tb_goods where sl>$num",$conn);
	 $info=mysql_fetch_array($sql);
	 if($info==false)
	 {
	 ?>
	  <tr>
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">没有查找到您要找的内容!</div></td>
        </tr>
     <?php
	 }
	 else
	 {
	   do{
	 ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dw];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dj];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sl];?></div></td>
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
