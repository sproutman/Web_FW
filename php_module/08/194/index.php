<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴���ݿ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
    if(form.hostname.value==""){
	  alert("������MySQL���ݿ�������ĵ�ַ!");
       form.hostname.select();
	   return(false);
    }	 
  
     if(form.name.value==""){
	  alert("�������û���!");
       form.name.select();
	   return(false);
    }
	  if(form.pwd.value==""){
	  alert("�������û�����!");
       form.pwd.select();
	   return(false);
    }
   return(true);
  }

</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="400" height="50" /></td>
  </tr>
</table>
<table width="400" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="400" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#45B0FF"><table width="400" height="20" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td width="101" bgcolor="#FFFFFF">��ַ��<input type="text" name="hostname" class="inputcss" size="7"></td>
        <td width="115" bgcolor="#FFFFFF">�û�����<input type="text" name="name" class="inputcss" size="7"></td>
        <td width="115" bgcolor="#FFFFFF">���룺<input type="password" name="pwd" class="inputcss" size="7"></td>
        <td width="64" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" value="�鿴" name="submit" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="400" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php 
 if($_POST[submit]!="")
  {
?>
<table width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#4AB1FF"><table width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" bgcolor="#99CCFF">MySQL���ݿ�������е��������ݿ������б����£�</td>
      </tr>
	  <?php
		 $hostname=$_POST[hostname];
		 $name=$_POST[name];
		 $pwd=$_POST[pwd];
		 $conn=mysql_connect($hostname,$name,$pwd);
		 $sql=mysql_query("show databases",$conn);
		 while($info=mysql_fetch_array($sql))
		 {
		 
		?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><?php  print_r($info[0]);?></td>
      </tr>
	  <?php
	    }
	  ?>
    </table></td>
  </tr>
</table>
<?php
 }
?>

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
