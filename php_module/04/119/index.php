<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证合法的数据表名称</title>
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
function checkname(tb_name){
	var str=tb_name;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/(db_database\d{4})/; 	
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
<script language="javascript">
function check(){
var value=form1.tb_name.value;
if(form1.tb_name.value==""){
alert("请您输入数据表的名称！"); form1.tb_name.focus(); return;
}
if(form1.tb_name.value.length!=15 || isNaN(value.substr(11,4))){
alert("您输入的数据表名称格式不正确！"); form1.tb_name.focus(); return;
}
if(!checkname(form1.tb_name.value)){
alert("您输入的数据表名称格式不正确！"); form1.tb_name.focus();return;}
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sdd.JPG">
<form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">验证合法的数据表名称</span></td>
  </tr>
  <tr align="center" class="style1">
    <td height="24" colspan="2">创建数据表</td>
  </tr>
  <tr align="center" class="style1">
    <td width="99" height="20">数据表名称：</td>
    <td width="345" align="left"><input name="tb_name" type="text" id="tb_name" size="20" maxlength="60">
      <span class="style2">    * 数据表的格式db_database0001</span></td>
  </tr>
  <tr align="center" class="style1">
    <td height="20">字段数：</td>
    <td align="left"><input name="tb_count" type="text" id="tb_count" size="15" maxlength="12"></td>
  </tr>
  <tr align="center" class="style1">
    <td height="24" colspan="2"><input type="submit" name="Submit" value="提交" onClick="check();">
    &nbsp;&nbsp;      <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </form>
</table>
</body>
</html>
