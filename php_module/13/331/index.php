<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片特效</title>
<link rel="stylesheet" type="text/css" href="font.css">
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>
<script language="javascript">
function change_img1(x)
 {
   x.width= x.width+10;
   x.height=x.height+10;
  if(x.width==1000||x.height==1000)
   {
    x.width=60;
	x.height=60;
   }

 }
 function change_img2(x)
 {
   x.width= x.width-10;
   x.height=x.height-10;
  if(x.width==0||x.height==0)
   {
    x.width=60;
	x.height=60;
   }
 }
</script>
<body>
<div align="center" class="STYLE1">通过鼠标改变图像大小</div>
<br>
<table width="60" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="60"><img id="img" src="images/image.gif" width="60" height="60" onmousewheel="change_img1(this)"/></td>
	 <td width="60"><img id="img" src="images/image.gif" width="60" height="60" onmousewheel="change_img2(this)"/></td>
  </tr>
</table>
<table width="120" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="60"><div align="center">变大</div></td>
    <td width="60"><div align="center">变小</div></td>
  </tr>
</table>
</body>
</html>
