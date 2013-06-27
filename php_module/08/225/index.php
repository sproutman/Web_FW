<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用聚集函数MAX求月销售额完成最多的销售记录</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.yue.value==""){
	  alert("请输入月份!");
	  form.yue.select();
	  return(false);
	}
	 if(isNaN(form.yue.value)==true){
	  alert("月份只能为数字!");
	  form.yue.select();
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
        <td bgcolor="#5266E6"><div align="center" class="STYLE1">&nbsp;请输入月份：<input type="text" name="yue" size="20" class="inputcss">&nbsp;<input type="submit" name="submit" class="buttoncss" value="查询"></div></td>
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

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#3497E5"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="61" height="25" bgcolor="#5266E6"><div align="center" class="STYLE1">
          <div align="center">商品ID</div>
        </div></td>
        <td width="74" bgcolor="#5266E6"><div align="center" class="STYLE1">
          <div align="center">名称</div>
        </div></td>
        <td width="87" bgcolor="#5266E6"><div align="center" class="STYLE1">销售额</div></td>
        <td width="90" bgcolor="#5266E6"><div align="center" class="STYLE1">
          <div align="center">商店名称</div>
        </div></td>
        <td width="89" bgcolor="#5266E6"><div align="center" class="STYLE1">
          <div align="center">销售日期</div>
        </div></td>
        <td width="92" bgcolor="#5266E6"><div align="center" class="STYLE1"> 
          <div align="center">销售员</div>
        </div></td>
      </tr>
	 <?php
	 include_once("conn.php");
	 $sql=mysql_query("select * from tb_sale",$conn);  
	 $info=mysql_fetch_array($sql);
	 if($info==false)
	  {
	    echo "暂无商品信息!";
	  }
	 else
	  {
	   do
	    {	
	 ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[sale];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[shopname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[xdate];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[sellman];?></div></td>
	  </tr>
     <?php
	    }while($info=mysql_fetch_array($sql));
	  }
	  if($_POST[submit]!="")
	   {
	     $yue=$_POST[yue];
		 $sql=mysql_query("select * from tb_sale where sale in (select max(sale) from tb_sale where month(xdate)=$yue and year(xdate)=2005)",$conn);  
	     $info=mysql_fetch_array($sql);
		 if($info==false)
		 {
		   echo "不存在该月!";
		 }
		 else
		 {
	 ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[sale];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[shopname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[xdate];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[sellman];?></div></td>
	  </tr>
	 <?php
	     }
	    }
		mysql_close($conn);
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
