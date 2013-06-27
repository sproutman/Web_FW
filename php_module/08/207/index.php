<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查询前N条记录</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.zw.value==""){
	  alert("请输入员工职务!");
	  form.zw.select();
	  return(false);
	}
	if(form.number.value==""){
	  alert("请输入要查询的记录个数!");
	  form.number.select();
	  return(false);
	}
	if(isNaN(form.number.value)==true){
	  alert("个数只能为数字!");
	  form.number.select();
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
    <td bgcolor="#2D5D2B"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#9ABADA"><div align="center">职务:
            <input type="text" name="zw" size="25" class="inputcss">记录个数:<input type="text" name="number" class="inputcss" size="10">&nbsp;<input type="submit" name="submit" value="查询" class="buttoncss"></div></td>
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
    <td bgcolor="#256B25"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="97" height="25" bgcolor="#9ABADA"><div align="center" class="STYLE1">员工编号</div></td>
        <td width="99" bgcolor="#9ABADA"><div align="center" class="STYLE1">姓名</div></td>
        <td width="98" bgcolor="#9ABADA"><div align="center" class="STYLE1">性别</div></td>
        <td width="98" bgcolor="#9ABADA"><div align="center" class="STYLE1">职务</div></td>
        <td width="102" bgcolor="#9ABADA"><div align="center" class="STYLE1">是否在职</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $number=$_POST[number];
	  $zw=$_POST[zw];
	  $sql=mysql_query("select * from tb_worker where jb like '%".$zw."%' order by userid desc limit 0,$number ",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	  ?>
	  <tr>
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">没有查找到任何记录!</div></td>
      </tr>
	<?php
      }
	  else
	  { 
	   do{
	?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[userid];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[jb];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dj];?></div></td>
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
