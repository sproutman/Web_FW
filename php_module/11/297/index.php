<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û���Ϣ����</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="524" height="95" /></td>
  </tr>
</table>
<table width="524" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="524" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#E27904"><table width="524" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="154" height="25" bgcolor="#FFFFFF"><div align="center">�û��ǳ�</div></td>
        <td width="144" bgcolor="#FFFFFF"><div align="center">ע������</div></td>
        <td width="222" bgcolor="#FFFFFF"><div align="center">ע��ʱ��</div></td>
      </tr>
	  <?php
	   include("conn.php");
	   $conndb=new con("localhost","root","root","db_database11");
	   $conndb->getcon();
	   $sql=mysql_query("select * from tb_testconn",$conndb->conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false)
	    {
		 echo "����ע���û���Ϣ!";
		}
	   else
		{ 
		  do
		   {
	  ?>
	  
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name]?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pwd]?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[regtime]?></div></td>
      </tr>
	  <?php
	       }
		   while( $info=mysql_fetch_array($sql)); 
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
