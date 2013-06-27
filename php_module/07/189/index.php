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
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="514" height="140" /></td>
  </tr>
</table>
<table width="514" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#5096D4"><table width="514" height="25" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form){
	   if(form.goodsname.value=="")
	    {
		  alert('请输入商品名称');
		  form.goodsname.select();
		  return(false);
		}
	 return(true);
	}
	</script>
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td width="131" bgcolor="#FFFFFF"><div align="center">查找商品</div></td>
        <td width="245" bgcolor="#FFFFFF"><div align="center"><input type="text" name="goodsname" size="25"></div></td>
        <td width="134" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="查找" name="submit"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="514" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
<?php
	 if($_POST[submit]!="")
	  {
	    include_once("conn.php");
		$name=$_POST[goodsname];
		$sql=mssql_query("select * from tb_goods where name like '%".$name."%'",$conn);
		$info=mssql_fetch_array($sql);
		if($info==false) 
		 {
		   echo "对不起，没有查到该商品信息!";
		   exit;
		 }
		else
		 { 
	?>
<table width="514" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" bgcolor="#5096D4">
	
	<table width="514" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="125" height="25" bgcolor="#92AAC6"><div align="center" class="STYLE1">商品名称</div></td>
        <td width="129" bgcolor="#92AAC6"><div align="center" class="STYLE1">进货时间</div></td>
        <td width="127" bgcolor="#92AAC6"><div align="center" class="STYLE1">商品数量</div></td>
        <td width="128" bgcolor="#92AAC6"><div align="center" class="STYLE1">商品价格</div></td>
      </tr>
	  <?php
	   do
	    {
	  ?> 
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[shuliang];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[price];?></div></td>
      </tr>
	  <?php
	     }
		while($info=mssql_fetch_array($sql));
	  ?>
    </table>
     </td>
  </tr>
</table>
<?php
	      }
	   }
	?>
</body>
</html>
