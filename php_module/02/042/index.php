<?php include("Conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�Զ�������</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="JavaScript">
function stock(){
	if (form1.price.value==0)
    {alert("�����뵥�ۣ�");form1.price.focus();return;}
    if(isNaN(form1.price.value))
      {alert("������Ĳ�����Чֵ��������0-9֮���������");form1.price.focus();return;}
	form1.stock_money.value=form1.stock_count.value*form1.price.value;  //ʵ���Զ�������
}
</script>
<body>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/fff.JPG">
<?php 
$query=mysql_query("select * from tb_stock");
$myrow=mysql_fetch_array($query);
?>
<form name="form1" method="post" action="">

  <tr>
    <td height="22" colspan="4" align="center" class="style1">�Զ�������</td>
    </tr>
  <tr>
    <td width="79" height="22" align="center"><span class="style1">��Ʒ���:</span></td>
    <td colspan="3"><input name="commodity_id" type="text" id="commodity_id" value="<?php echo $myrow[commodity_id];?>" size="22" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">��Ʒ����:</td>
    <td colspan="3"><input name="commodity_name" type="text" id="commodity_name" value="<?php echo $myrow[commodity_name];?>" size="22" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">�������:</td>
    <td colspan="3">
     <input name="stock_count" type="text" id="stock_count" value="<?php echo $myrow[stock_count];?>" size="22" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">����:</td>
    <td width="65">	
	<input name="price" type="text"class="text" id="price"  onBlur="stock()" onKeyUp="if(event.keyCode==13){stock()}" value="<?php echo $myrow[price];?>" size="6" maxlength="50"></td>
    <td width="70" align="center" class="style1">�����:</td>
    <td width="76"><input name="stock_money" type="text" id="stock_money" size="6" maxlength="50"></td>
  </tr>
  </form>  
</table>

</body>
</html>
