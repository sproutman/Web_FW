<html>
<head>
<title>�鿴�ǳ�</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="150" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="60">
	<div align="center">
	<?php
	 $nc=trim($_GET[nc]);
	 if($nc=="")
	  {
	   echo "�������û��ǳ�!";
	  }
	 else
	  { 
	   include_once("conn/conn.php");
	   $sql=mysql_query("select * from tb_puser where usernc='".$nc."'",$conn);
	   $info=mysql_fetch_array($sql);
       if($info==false)
	    {
		 echo "��ϲ��,���ǳ�δ��ռ��!";
		}
		else
		{
		 echo "�Բ���,���ǳ��ѱ�ռ��!";
		}
		mysql_close($conn);
	 }	
	?>
   </div></td>
  </tr>
  <tr>
    <td height="20"><div align="center"><input type="button" onClick="window.close()" value="�ر�" class="buttoncss"></div></td>
  </tr>
</table>
</body>
</html>
