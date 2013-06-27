<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>文件上传</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="300" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0099CC"><table width="300" height="80" border="0" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="upfile.php" enctype="multipart/form-data">
	  <tr>
        <td height="25" colspan="2" bgcolor="#0099CC"><div align="center" class="STYLE1">文件上传</div></td>
      </tr>
      <tr>
        <td width="85" height="25" bgcolor="#FFFFFF"><div align="center">文件名：</div></td>
        <td width="212" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="file" name="filename" class="inputcss" size="20">
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="上传" class="buttoncss"></div></td>
      </tr></form>
    </table></td>
  </tr>
</table>
</body>
</html>
