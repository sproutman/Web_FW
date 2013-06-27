<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证字符串是否以指定字符串开头</title>
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
var first1=form1.first.value;
var first2=first1.substr(0,1);//获取文本框中的第一个字符
if(first2!="M"){
alert("您输入的字符串不是以M开头的!");form1.first.focus(); }
}
</script>
<body>
<table width="385" border="1" cellpadding="0" cellspacing="0" background="images/sssssss.JPG">
   <form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="23" colspan="2"><span class="style1">验证字符串是否以指定字符串开头</span></td>
    </tr>
  <tr>
    <td width="74" height="21" align="center" class="style1">用户名:
         </td>
    <td width="305"><input name="first" type="text" id="first" size="20" maxlength="50">
      <span class="style2">*用户名必须以“M”开头。</span></td>
  </tr>
  <tr>
    <td height="21" align="center" class="style1">密码:</td>
    <td><input name="password" type="password" id="password" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="21" align="center" class="style1">真实姓名:</td>
    <td><input name="truename" type="text" id="truename" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="21" align="center" class="style1">地址:</td>
    <td><input name="address" type="text" id="address" size="30" maxlength="80"></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交" onClick="check();">      
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
   </form>
</table>

</body>
</html>
