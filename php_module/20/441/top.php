<?php
   session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ﳵ</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
 include("conn/conn.php");
 
?>
<script language="javascript">
  function chkscreen()
   {
     if(screen.width<1024)
	 {
	   alert("�������ô���1024*768�ķֱ��������վ!");
	 }
   }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" onLoad="chkscreen()">
<table width="792" height="165" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="72"><img src="images/logo.JPG" width="792" height="165" border="0" usemap="#Map"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="534,39,594,110" href="gouwu1.php">
  <area shape="rect" coords="219,37,286,110" href="index.php">
</map>
