<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在状态栏中收缩显示文字</title>
</head>

<body>
<div align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="607" height="198">
    <param name="movie" value="flash/mrkj.swf">
    <param name="quality" value="high">
    <embed src="flash/mrkj.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="607" height="198"></embed>
  </object>
  <Script language=JavaScript> 
var text1="欢迎访问明日科技主页：www.mingrisoft.com";
comeback=0; 
cometo=0; 
function dis(){ 
window.status=text1.substring(0,cometo); 
if(comeback==1){ 
	cometo--; 
	if(cometo==0){comeback=0} 
}
else {cometo++;if(cometo==text1.length){comeback=1}} 
window.status=text1.substring(0,cometo)+"(客服热线：0431-84978981)";
if(cometo==text1.length){window.setTimeout("dis()",1000)}
else {window.setTimeout("dis()",50)} 
} 
dis(); 
</Script>
</div>
</body>
</html>
