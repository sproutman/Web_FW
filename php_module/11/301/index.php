<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ҵ��Ϣ����</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="524" height="86" /></td>
  </tr>
</table>
<table width="524" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="524" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#E27A06"><table width="524" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="104" height="25" bgcolor="#FACA86"><div align="center">�ʲ�����</div></td>
        <td width="102" bgcolor="#FACA86"><div align="center">��������</div></td>
        <td width="94" bgcolor="#FACA86"><div align="center">�۸�</div></td>
        <td width="142" bgcolor="#FACA86"><div align="center">����ʱ��</div></td>
        <td width="76" bgcolor="#FACA86"><div align="center">����</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_zc order by addtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	     echo "�����ʲ���Ϣ!";
	   }
	   else
	   {
	     do
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bm];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[price];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="delete.php?id=<?php echo $info[id];?>" class="a1">ɾ��</a></div></td>
      </tr>
	  <?php
	       }
	    while($info=mysql_fetch_array($sql));
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
