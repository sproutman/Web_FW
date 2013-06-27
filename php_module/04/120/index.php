<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证货币类型</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
function checkmoney(str){
var re=/^[\d.]*$/;
return re.test(str);
}
</script>

<script language="javascript">
function check(){
var value=form1.money.value;
if(form1.money.value==""){
alert("请输入单价的金额!"); form1.money.focus();return;
}
if(form1.money.value.indexOf(".")<0){
alert("您输入的金额的格式不对!"); form1.money.focus();return;
}
if(!checkmoney(form1.money.value) ||(form1.money.value.length-form1.money.value.indexOf("."))!=3){
alert("您输入的金额的格式不对!"); form1.money.focus();return;}
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sddd.JPG">
 <form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">验证货币类型</span></td>
  </tr>
  <tr>
    <td width="222" height="24" align="center"><span class="style1">编号:
      <input name="textfield2" type="text" size="20" maxlength="50">
    </span></td>
    <td width="222" align="center"><span class="style1">产地:
      <input name="textfield4" type="text" size="20" maxlength="60">
    </span></td>
  </tr>
  <tr>
    <td height="24" align="center"><span class="style1">单价:
      <input name="money" type="text" id="money" size="20" maxlength="50">
    </span></td>
    <td align="center"><span class="style1">数量:
      <input name="textfield3" type="text" size="20" maxlength="50">
    </span></td>
  </tr>
  <tr>
    <td height="24" align="center"><span class="style1">商品名称:
      <input name="textfield" type="text" size="20" maxlength="50">
    </span></td>
    <td align="center"><span class="style1">生产厂家:
      <input name="textfield5" type="text" size="20" maxlength="60">
    </span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">
      <input type="submit" name="Submit" value="提交" onClick="check();">
    &nbsp;</span></td>
    <td height="24"><span class="style1">&nbsp;
      <input type="reset" name="Submit2" value="重置">
    </span></td>
  </tr>
  </form>
</table>
</body>
</html>
