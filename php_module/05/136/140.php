<?php session_start();
if($_SESSION[user]=="mr" && $_SESSION[pass]=="mrsoft"){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ͨ��session�ж��û���Ȩ��</title>
</head>
<body>
 ���Ѿ��ɹ���¼����վ,лл���ĺ���!!
</body>
</html>
<?php }else{
header("location:140_ok.php");
}
?>