<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>限制上传图片的格式</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "华文行楷";
}
.style4 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="406" height="129" border="0" align="center" cellpadding="0" cellspacing="0" background="images/319-1.jpg">
  <tr>
    <td width="106" height="40">&nbsp;</td>
    <td width="196">&nbsp;</td>
    <td width="31">&nbsp;</td>
  </tr>
<form name="form1" method="post" action="index_ok.php" enctype="multipart/form-data">
  <tr>
    <td height="32" align="right"><span class="style1">图片路径</span>:</td>
    <td valign="middle"><input name="images" type="file" id="images2" size="15">
	 <input type="hidden" name="MAX_FILE_SIZE" value="30000">	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="44" align="right" valign="middle"><span class="style4">图片的格式</span>:</td>
    <td valign="middle"><span class="style4">(.jpg)</span>      <input type="submit" name="Submit" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
 </form>
  <tr>
    <td height="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
