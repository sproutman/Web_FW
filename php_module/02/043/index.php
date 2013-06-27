<?php include("Conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>设置文本框的只读属性</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/hhh.JPG">
<?php 
$query=mysql_query("select * from tb_stock");
$myrow=mysql_fetch_array($query);
?>
<form name="form1" method="post" action="">
  <tr>
    <td height="22" colspan="4" align="center" class="style2">设置文本框的只读属性</td>
    </tr>
  <tr>
    <td width="67" height="22" align="center"><span class="style1">商品编号:</span></td>
    <td colspan="3">
	<input name="commodity_id" type="text" id="commodity_id" value="<?php echo $myrow[commodity_id];?>" disabled  size="22" maxlength="50">
	</td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">商品名称:</td>
    <td colspan="3"><input name="commodity_name" type="text" id="commodity_name" value="<?php echo $myrow[commodity_name];?>" size="22" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">库存数量:</td>
    <td colspan="3">
     <input name="stock_count" type="text" id="stock_count" value="<?php echo $myrow[stock_count];?>" readonly onClick="alert('此文本框为只读属性,库存数量不能更改!')" size="22" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">单价:</td>
    <td width="77">	
	<input name="price" type="text"class="text" id="price" value="<?php echo $myrow[price];?>" size="10" maxlength="50"></td>
    <td width="70" align="center" class="style1">库存金额:</td>
    <td width="76"><input name="stock_money" type="text" id="stock_money" value="<?php echo $myrow[stock_money];?>" size="10" maxlength="50"></td>
  </tr>
  </form>  
</table>
</body>
</html>
