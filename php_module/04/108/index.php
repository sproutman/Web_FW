<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证表单元素是否为空</title>
<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	color: #FFFF86;
}
-->
</style>
</head>
<script language="javascript">
// 检查表单元素是否为空
function check(form1){
	for(i=0;i<form1.length;i++){  
		if(form1.elements[i].value == ""){         //form1的属性elements的首字e要小写
			alert(form1.elements[i].name + "不能为空!");
			form1.elements[i].focus();   //指定表单元素获得焦点
			return;
		}
	}
	form1.submit();
}
</script>

<body>
<table width="350" border="2" cellpadding="0" cellspacing="1" bordercolor="#6F0000" background="images/ssss.JPG">
  <form name="form1" method="post" action="">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">验证表单元素是否为空</span></td>
  </tr>
  <tr align="center">
    <td height="22" colspan="2" class="style1">博客文章评论</td>
  </tr>
  <tr>
    <td width="77" height="22" align="center" class="style1">评论主题:</td>
    <td width="267"><input name="text" type="text" id="text" size="25" maxlength="80"></td>
  </tr>
  <tr>
    <td align="center" class="style1">评论内容:</td>
    <td><textarea name="textarea" cols="31" rows="5"></textarea></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交" onClick="check(form1);">
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>

</body>
</html>
