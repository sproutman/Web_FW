<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ͼ����</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="703" height="147" /></td>
  </tr>
</table>
<table width="703" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#EF5E0F" ><table width="703" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="right">|&nbsp;<a href="index.php">���ͼ����Ϣ</a>&nbsp;|&nbsp;<a href="addbook.php">���ͼ����Ϣ</a>&nbsp;|&nbsp;</div></td>
      </tr>
      <tr>
        <td width="166" height="25" bgcolor="#F39A40"><div align="center">����</div></td>
        <td width="121" bgcolor="#F39A40"><div align="center">����</div></td>
        <td width="205" bgcolor="#F39A40"><div align="center">������</div></td>
        <td width="206" bgcolor="#F39A40"><div align="center">����ʱ��</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mssql_query("select * from tb_book order by pubtime desc",$conn);
	  $info=mssql_fetch_array($sql);
	   if($info==false)
	    {
		  echo "����ͼ����Ϣ��";
		}
		else
		{   
		  do
		   {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bookname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[auto];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pub];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pubtime];?></div></td>
      </tr>
	  <?php
	      }while($info=mssql_fetch_array($sql));  
		}
	  
	  ?>
    </table></td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60"><div align="center"> ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ��</div></td>
  </tr>
</table>
</body>
</html>
