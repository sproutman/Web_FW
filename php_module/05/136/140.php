<?php session_start();
if($_SESSION[user]=="mr" && $_SESSION[pass]=="mrsoft"){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过session判断用户的权限</title>
</head>
<body>
 您已经成功登录本网站,谢谢您的合作!!
</body>
</html>
<?php }else{
header("location:140_ok.php");
}
?>