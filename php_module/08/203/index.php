<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ʒ��Ϣ����</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="60" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" bgcolor="#3399CC"><table width="500" height="100" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#8BC7EA">
		
		<table border="0" align="center" cellpadding="0" cellspacing="0">
        
		  <tr>
		 <?php
		 include_once("conn.php");
		 $sql=mysql_query("select * from tb_spxx where address<>'' order by addtime desc ",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		 {
		   echo "������Ʒ��Ϣ!";
		 }
		 else
		 {
		  $i=0;
		 do
		  {
		    if($i%3!=0)
			 {
		  ?>
            <td width="50"><img src=<?php echo $info[address];?> width="100" height="100" /></td>
		    <td width="20" rowspan="2">&nbsp;</td>
		    <?php
		     }
			else
			 {
		 ?>	
		  <tr>
		    <td height="20">&nbsp;</td>
		    <tr>
		    <td width="50"><img src=<?php echo $info[address];?> width="100" height="100" /></td>
		    <td width="20" rowspan="2">&nbsp;</td>
		    <?php
		    }
			$i++;
		   }while($info=mysql_fetch_array($sql));
		  } 
		  ?>
		  </tr>
		    <tr>
		      <td height="20">&nbsp;</td>
		      </tr>
        </table>
		
		</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
