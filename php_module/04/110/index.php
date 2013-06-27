<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证数据是否为数值型</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px;
	color: #FF0000;
}
.style3 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function checkprice(){
if (form1.price.value==0 && form1.price.value==""){ 
	alert("请输入单价！");form1.price.focus();form1.price.select();return;}
    if(isNaN(form1.price.value)){
   		alert("您输入的单价不是有效值！");form1.price.focus();form1.price.select();return;
	}
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="" onSubmit="javascript:return checkprice();">
    <tr align="center">
      <td height="24" colspan="2" class="style1">验证数据是否为数值型</td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">商品名:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">编号:</td>
      <td class="style3">
        <input name="postalcode" type="text" id="postalcode2" size="20" maxlength="50">
        <span class="style2"> </span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">单价:</td>
      <td class="style3"><input name="price" type="text" id="pass2" size="20" maxlength="50">
          <span class="style2">*请输入准确的数字</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">数量:</td>
      <td class="style3"><input name="sl" type="text" id="sl" size="30" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="提交">
          <span class="style2"> (*为必填项目)</span>
          <input type="reset" name="Submit2" value="重置">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
