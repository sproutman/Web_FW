<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用下拉列表选择所要联机的网站</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
<!--
function gethere(){
var thebox=document.form1
if(thebox.windowoption.checked){
if(!window.newwindow)
newwindow=window.open("")
newwindow.location=
thebox.web.options[thebox.web.selectedIndex].value }
else
window.location=
thebox.web.options[thebox.web.selectedIndex].value
}
//-->
</script>

<body>
<table width="310" border="1" cellpadding="0" cellspacing="0" background="images/kkk.JPG">
  
  <tr align="center">
    <td height="25" colspan="3"><span class="style1"> 应用下拉列表选择所要联机的网站  </span></td>
  </tr>
  <form name="form1" method="post">
    <tr>
      <td width="56" height="23" align="center">&nbsp;</td>
      <td width="74">
        <select name="web" size="1">
          <option value="http://www.163.com">网易</option>
          <option value="http://www.hao123.com">好123</option>
          <option value="http://www.sina.com">新浪</option>
        </select> 
      </td>
      <td width="172"><input type="button" onClick="gethere()" value="GO!">
	  <input type="checkbox" name="windowoption" value="on">
	  <span class="style1">新窗口访问</span> </td>
    </tr>
  </form>
</table>
</body>
</html>
