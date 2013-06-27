<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>使用框架嵌套技术居中显示框架页</title>
</head>
<frameset rows="*" cols="*,630,*" frameborder="no" framespacing="0" border="0">
   <frame src="blank.php" name="BLFrame" scrolling="no" noresize>
       <frameset rows="55,*" cols="*" frameborder="no" border="0" framespacing="0">
	<frame src="software_top.php" name="topFrame" scrolling="no" noresize>
	<frameset rows="*" cols="160,*" framespacing="0">
	   <frame src="software_left.php" name="leftFrame" scrolling="auto" noresize>
	   <frame src="software_main.php" name="mainFrame" frameborder="no" scrolling="auto"> 
	</frameset>
	   </frameset>
	<frame src="blank.php" name="BRFrame" scrolling="no" noresize>
</frameset>
<noframes>
<body>
该浏览器不支持框架，无法正常显示！！
</body>
</noframes>
</html>
