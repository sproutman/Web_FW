<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>�Բ�ѯ�ַ�������url����</title>
</head>
<body>
<table width="250" height="75" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0000FF"><table width="250" height="75" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#0066FF"><div align="center">��ѯ�ַ�����url����</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">��ǰҳ��<?php echo urldecode($_GET[page]);?></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"><a href=index.php?page=<?php echo urlencode("��ҳ")?> class="a1">��ҳ</a>&nbsp;<a href=index.php?page=<?php echo urlencode("ǰһҳ")?> class="a1">ǰһҳ</a>&nbsp;<a href=index.php?page=<?php echo urlencode("��һҳ")?> class="a1">��һҳ</a>&nbsp;<a href=index.php?page=<?php echo urlencode("βҳ")?> class="a1">βҳ</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
