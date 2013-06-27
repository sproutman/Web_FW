<html>
<head>
<title>应用JavaScript实现指定尺寸的无边框窗口</title>
<link href="Css/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
body {
	background-image: url(images/bg.gif);
}
-->
</style></head>

<body>
<table width="777" height="406" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/images_01.gif" width="777" height="406" border="0" usemap="#Map"></td>
  </tr>
</table>
<script language="javascript">
	function manage(){
	var w=window.open('Login.php','','fullscreen=1,scrollbars=0');
	}
</script>
<map name="Map">
  <area shape="poly" coords="734,42,753,51,751,65" href="#" onClick="manage()">
</map>
</body>
</html>
