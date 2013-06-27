<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>鼠标单击文字获得帮助效果</title>
<style type="text/css">
<!--
td{
	font-size:9pt;
}
-->
</style>
</head>
<OBJECT id=pophelp type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11">
<PARAM name="Command" value="HH Version">
</OBJECT>
<script language=javascript>
popstyle= "Verdana,10";         //弹出式帮助字体设定

function showPophelp(helpstr,w,h,Foreground,Background){
if (body.style.cursor=='help')
pophelp.TextPopup(helpstr,popstyle,w,h,Foreground,Background);
}

document.onclick=resetCursor
function resetCursor(){
if (!(event.srcElement.innerText=="?"))
body.style.cursor='default';
}
</script>
<body id=body style="cursor:default;font:menu">
<table width="777" height="149" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="143" valign="bottom" background="images/images_01.gif"><table width="777" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="105" colspan="8">&nbsp;</td>
        </tr>
      <tr>
        <td width="318">&nbsp;</td>
        <td width="81" align="center"><span onclick="showPophelp('欢迎您登录我的个人主页',18,20,0,180)">个人主页</span></td>
        <td width="79" align="center"><span onclick="showPophelp('我的个人写真集',18,20,0,180)">我的相册</span></td>
        <td width="80" align="center"><span onclick="showPophelp('有话对我说吧，给我留言啊！',18,20,0,180)">给我留言</span></td>
        <td width="77" align="center"><span onclick="showPophelp('mingrisoft@mingrisoft.com',18,20,0,180)">电子信箱</span></td>
        <td width="72" align="center"><span onclick="showPophelp('QQ：10031006*',18,20,0,180)">与我联系</span></td>
        <td width="35" align="center"><span onClick="javascript:body.style.cursor='help';" style="cursor:help; color: #FF0000; font-size: 16px;"><big><b>?</b></big></span></td>
        <td width="35" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="8">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
