<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用HTML标记进行跳转</title>
<style type="text/css">
<!--
.style1 {
	font-size: 20px;
	font-family: "华文隶书";
	font-weight: bold;
}
.style2 {
	font-size: 13px;
	font-family: "宋体";
}
-->
</style>
</head>

<body>
<table width="300" height="100" border="1" cellpadding="0" cellspacing="0" background="images/129.JPG">
  <tr>
    <td height="75" align="center"><p class="style1">千锤万凿出深山,</p>
    <p class="style1">烈火焚烧若等闲.</p></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle" class="style2">&nbsp;&nbsp;
	<?php 
	echo "<meta http-equiv=\"refresh\" content=\"5;url=index2.php;\">未完,待续,5秒钟后转入下一页!!"
	?>
	
	    </td>
  </tr>
</table>
</body>
</html>
