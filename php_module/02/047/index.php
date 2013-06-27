<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>同一个页中的多表单提交</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
function check(){
if(form1.form1.value=="")
{alert("请输入表单的内容！！！");form1.form1.focus();return;}
form1.submit();
}
function check2(){
if(form2.form2.value=="")
{alert("请输入表单的内容！！！");form2.form2.focus();return;}
form2.submit();
}
function check3(){
if(form3.form3.value=="")
{alert("请输入表单的内容！！！");form3.form3.focus();return;}
form3.submit();
}
</script>
<body>
<table width="320" border="1" cellpadding="0" cellspacing="0" background="images/xxx.JPG">
  <tr align="center">
    <td height="23" colspan="3"><span class="style1">同一个页中的多表单提交</span></td>
  </tr>
  <form name="form1" method="post" action="index.php">
  <tr>
    <td width="76" height="20" align="right" class="style1">form1:</td>
    <td width="161" align="center"><input name="form1" type="text" id="form1" value="<?php echo $form1;?>" size="22"></td>
    <td width="105"><input type="submit" name="Submit" value="提交" onClick="check();"></td>
  </tr>
  </form>
  <form name="form2" method="post" action="index.php">
  <tr>
    <td height="20" align="right" class="style1">form2:</td>
    <td align="center"><input name="form2" type="text" id="form2" value="<?php echo $form2;?>" size="22"></td>
    <td><input type="submit" name="Submit2" value="提交" onClick="check2();"></td>
  </tr>
  </form>
  <form name="form3" method="post" action="index.php">
  <tr>
    <td height="20" align="right" class="style1">form3:</td>
    <td align="center"><input name="form3" type="text" id="form3" value="<?php echo $form3;?>" size="22"></td>
    <td><input type="submit" name="Submit3" value="提交" onClick="check3();"></td>
  </tr>
  </form>
  <tr align="center">
    <td height="23" colspan="3" class="style1">
	<?php 
if($Submit=="提交"){
echo "提交的是第一个表单.内容:".$form1;
}
if($Submit2=="提交"){
echo "提交的是第二个表单.内容:".$form2;
}
if($Submit3=="提交"){
echo "提交的是第三个表单.内容:".$form3;
}
?>
	</td>
  </tr>
</table>
</body>
</html>
