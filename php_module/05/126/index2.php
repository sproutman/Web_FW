<?php session_start();
if($user=="mr" && $pass=="mrsoft"){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>使用脚本语言实现页面跳转 </title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="434" height="223" border="0" cellpadding="0" cellspacing="0" background="images/129.JPG">
  <tr>
    <td height="35" align="right"> <span class="style1">使用脚本语言实现页面跳转 </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }else{ echo "<script> alert('对不起,您没有正确登录,请返回首页重新登录,谢谢!!'); window.location.href='index.php';</script>";

}?>