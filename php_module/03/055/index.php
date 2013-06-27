<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>带颜色变化的动态链接按钮</title>
<script language="javascript">
function change(color){
var el=event.srcElement;
if (el.tagName=="INPUT"&&el.type=="button")
event.srcElement.style.backgroundColor=color;
}

function mr_url(url){
window.location.href=url;
}
</script>
</head>
<body>
<table width="458" height="261" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="bottom" background="images/images_01.gif"><table width="458" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="33" align="center"><input type="button" name="mrkj" value="进入明日图书网站"  onMouseover="change('yellow')" onMouseout="change('lime')"  onClick="mr_url('http://www.mingrisoft.com')"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
