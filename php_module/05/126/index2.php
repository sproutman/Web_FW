<?php session_start();
if($user=="mr" && $pass=="mrsoft"){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ʹ�ýű�����ʵ��ҳ����ת </title>
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
    <td height="35" align="right"> <span class="style1">ʹ�ýű�����ʵ��ҳ����ת </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }else{ echo "<script> alert('�Բ���,��û����ȷ��¼,�뷵����ҳ���µ�¼,лл!!'); window.location.href='index.php';</script>";

}?>