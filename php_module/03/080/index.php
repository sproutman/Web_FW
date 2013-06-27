<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>状态栏中的跑马灯文字</title>
</head>
<body onLoad="scrollit(100);">
<SCRIPT language="JavaScript">
function scrollit(s) 
{
var text= "    您好！欢迎访问明日科技图书网站。客服热线：0431-84978981"
var printtext = " ";
var i = 1;
if (s > 210) 
{
	s--;
	var out="scrollit("+s+")";
	var timerTwo=window.setTimeout(out,200);
}
	else if (s <= 210 && s > 0) 
	{
		for (i=0;i<s;i++) 
		{
		printtext+=" ";
		}
		printtext+=text;
		s--;
		window.status=printtext;
		out="scrollit("+s+")";
		timerTwo=window.setTimeout(out,200);
	}
	else if (s <= 0) 
	{
		if (-s < text.length) 
		{
		printtext+=text.substring(-s,text.length);
		s--;
		window.status=printtext;
		out="scrollit("+s+")";
		timerTwo=window.setTimeout(out,200);
		}
		else
		{
			window.status=" ";
			timerTwo=window.setTimeout("scrollit(100)",200);
		}
	}
}
</SCRIPT>
<table width="778" height="256" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="961" background="images/image_01.JPG">&nbsp;</td>
  </tr>
</table>
</body>
</html>
