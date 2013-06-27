<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证车牌号码</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>
<script language="javascript">
function check(){
    var value=form1.carnumber.value;
	if(form1.carnumber.value==""){
		alert("请输入车牌号码!");form1.carnumber.focus();return;	
	}
	if(form1.carnumber.value.length!=8||isNaN(value.substr(3,4))){
		alert("您输入的车牌号码不正确!");form1.carnumber.focus();return;	
	}	
	if(!checkNo(form1.carnumber.value)){
		alert("您输入的车牌号码不正确!");form1.carnumber.focus();return;	
	}	
	form1.submit();
}
</script>
<script language="javascript">
function checkNo(str){
	var Expression=/^[\u4E00-\u9FA5]?[a-zA-Z]-\w{5}$/; 	
	var objExp=new RegExp(Expression);
	return objExp.test(str)
}
</script>
<body>
<table width="450"  border="1" cellpadding="0" cellspacing="0" background="images/sd.JPG">
<form name="form1" method="post" action="">
  <tr>
    <td height="25" colspan="2" align="center" class="style1">验证车牌号码</td>
    </tr>
  <tr>
    <td height="25" align="center"><span class="style1">车牌号码：</span></td>
    <td width="74%"><input name="carnumber" type="text" id="carnumber">
      <span class="style2">*(格式为：吉Z-00000)</span></td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">车辆类型：</td>
    <td class="style2"><input name="carType" type="text" id="carType">
      </td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">车辆品名：</td>
    <td class="style2"><input name="pm" type="text" id="pm">
      </td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">驾驶员姓名：</td>
    <td class="style2">
      <input name="jsy" type="text" id="jsy">
      </td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">驾驶证号码：</td>
    <td class="style2">
      <input name="cardNo" type="text" id="cardNo">
      </td>
  </tr>
  <tr>
    <td height="88" align="center" class="style1">备&nbsp;&nbsp;&nbsp;&nbsp;注：</td>
    <td><textarea name="bz" cols="35" rows="5" class="textarea" id="bz"></textarea></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" class="style1"><input name="Button" type="button"  value="提交" onClick="check(form1)">
&nbsp;
<input name="Submit2" type="button" class="btn_grey" value="返回" onClick="history.back(1);"></td>
    </tr>
  </form>
</table>
</body>
</html>
