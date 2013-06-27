<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>对查询字符串进行url编码</title>
</head>
<body>
<table width="250" height="75" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0000FF"><table width="250" height="75" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#0066FF"><div align="center">查询字符串的url编码</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">当前页：<?php echo urldecode($_GET[page]);?></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"><a href=index.php?page=<?php echo urlencode("首页")?> class="a1">首页</a>&nbsp;<a href=index.php?page=<?php echo urlencode("前一页")?> class="a1">前一页</a>&nbsp;<a href=index.php?page=<?php echo urlencode("后一页")?> class="a1">后一页</a>&nbsp;<a href=index.php?page=<?php echo urlencode("尾页")?> class="a1">尾页</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
