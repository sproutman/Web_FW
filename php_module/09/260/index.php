<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ѧ���ɼ�����ϵͳ</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="570" height="86" /></td>
  </tr>
</table>
<table width="570" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="570" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#034BA2"><table width="570" height="40" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="111" height="20" bgcolor="#FF9933"><div align="center">ѧ��</div></td>
        <td width="113" bgcolor="#FF9933"><div align="center">����</div></td>
        <td width="112" bgcolor="#FF9933"><div align="center">���ĳɼ�</div></td>
        <td width="112" bgcolor="#FF9933"><div align="center">����ɼ�</div></td>
        <td width="116" bgcolor="#FF9933"><div align="center">��ѧ�ɼ�</div></td>
      </tr>
      <?php
	  include_once("conn.php");
	  $sql=$conn->query("select * from scoreinfo");
	  $info=$sql->fetch_array(MYSQLI_ASSOC);
	  if($info==NULL)
	   {
	    echo "����ѧ����Ϣ";
	   }
	   else
	   {
	    do
		 {
	  ?>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[wy];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
      </tr>
	  <?php
	     }
	   while(  $info=$sql->fetch_array(MYSQLI_ASSOC));
	  }
	  
	  ?>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
