<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");
  if($name==true && $mima ==true)
	   {  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����ҹ���</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 14px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>

<body>
<table width="550" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td height="25"><a href="index.php?lmbs=<?php echo urlencode(�û�����);?>" class="STYLE1">�û�����</a></td>
    <td><a href="index.php?lmbs=<?php echo urlencode(�����û�����);?>" class="STYLE1">�����û�����</a></td>
    <td><a href="index.php?lmbs=<?php echo urlencode(�����¼����);?>" class="STYLE1">�����¼����</a></td>
  </tr>
</table>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">	<?php switch($lmbs){
	    case "�û�����":
		    include "adminreguser.php";
		break;	
		case "�����û�����":
		    include "adminonlineuser.php";
		break;	
		case "�����¼����":
		    include "adminmessage.php";
		break;	
		case "":
		    include "adminmessage.php";
		break;	}
	?></td>
  </tr>
</table>
</body>
</html>
<?php }else{ echo "������ȷ��¼!";
echo "<meta http-equiv=\"Refresh\" content=\"20;url=adminlogin.php\">";} ?>