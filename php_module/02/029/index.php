
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取跳转菜单的值</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/ddd.JPG">
<form name="form1">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">获取跳转菜单的值</span></td></tr>
  <tr>
    <td width="122" height="20" align="center"><span class="style2">选择要跳转的位置:</span></td>
    <td width="172" class="style2">	<select name="menu1" size="1" onChange="MM_jumpMenu('parent',this,0)">
      <option value="http://127.0.0.1/phpMyAdmin">phpMyAdmin</option>
      <option value="../031/index.php">范例31</option>
    </select></td></tr>
</form>
</table>
 </body>
</html>
