<?php  session_start();
    if($_COOKIE['cookie1']!=''){	  
  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="refresh" content="5;url=138.php">
<title>使用COOKIE限制用户访问网站的时间</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 25px;
	font-family: "华文行楷";
}
-->
</style></head>

<body>
<table width="392" height="257" border="1" cellpadding="0" cellspacing="0" background="images/138sss.jpg">
  <tr>
    <td><p class="style1">&nbsp;&nbsp;本实例主要应用COOKIE实现对网站访问时间的限制,当浏览者在网站中停留的时间超过网站规定的访问时间时,将自动跳转到登录页面.只有重新登录才可以访问</p>
    <p class="style1">第二步</p></td>
  </tr>
</table>
</body>
</html>
<?php   }else{ 
echo "第三步<br>";
echo "您在本网站停留的时间已经超过我们限制的时间,系统将在3秒钟后退出登录!!谢谢";
echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">3秒钟退出登录,请稍等......";
}?>