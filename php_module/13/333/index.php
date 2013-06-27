<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>获取图片的大小和尺寸</title>
<link rel="stylesheet" type="text/css" href="font.css">
</head>
<?php
$array=getimagesize("./mingrisoft.jpg");
?>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#006699"><table width="200" height="163" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="199" height="140" bgcolor="#FFFFFF"><img src="mingrisoft.jpg" width="200" height="150" /></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $array[3];?></div></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
