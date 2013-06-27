<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>动态的标题栏</title>
<style>
<!--
td{font-size:14pt;}
body{margin-top:0;}
-->
</style>
</head>
<body>
<table width="702" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#0065D6" bgcolor="#FFFFFF">
  <tr>
    <td width="504" height="91" background="images/images_01.JPG">&nbsp;</td>
  </tr>
  <tr>
    <td height="83" align="center">请看上面的标题栏的效果！</td>
  </tr>
</table>
<script language="JavaScript">
step=0
function flash_title()
    {
      step++
      if (step==3) {step=1}
      if (step==1) {document.title='☆★动态的标题栏★☆'}
      if (step==2) {document.title='★☆动态的标题栏☆★'}
      setTimeout("flash_title()",380);
    }
	
flash_title()
</script></body>
</html>
