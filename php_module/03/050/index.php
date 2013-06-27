<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>逐个闪烁的文字</title>
</head>
<body> 
<table width="586" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="193" height="165" valign="top" background="images/images_01.gif"><table width="193" height="143" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="66">&nbsp;</td>
      </tr>
      <tr>
        <td height="31" align="center">
          <span id=show style="font:21px 汉仪菱心体简"><span style="color:#DDDDDD" scroll="yellow">网上电子商城</span></span>
          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="393" background="images/images_02.gif">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<script>
var tags=show.all.tags("span");
for(i=0;i<tags.length;i++){
if(!tags[i].scroll)continue;
eval("var c"+i+"=0")
setInterval("var str=tags["+i+"].innerText;if(c"+i+"==str.length)c"+i+"=0;tags["+i+"].innerHTML=str.substring(0,c"+i+")+'<font color="+tags[i].scroll+">'+str.substr(c"+i+"++,1)+'</font>'+str.substr(c"+i+")",600)
}
</script>
