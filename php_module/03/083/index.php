<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在首页右下角弹出渐显的广告窗口</title>
</head>
<body>
<table width="881" height="342" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/image_01.JPG">&nbsp;</td>
  </tr>
</table>
<script language="javascript">
var newformW=300;
var newformH=180;
function pp(){
	var T=window.screen.width-newformW;
	var L=window.screen.height+newformH;
	var name=window.open("advertise.htm","","width="+newformW+",height="+newformH+",top="+T+",left="+L);
}
pp();
</script>
</body>
</html>
