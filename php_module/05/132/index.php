<?php  if (isset ($_GET['corporation'])){        
         setcookie ("example_corporation",$_GET['corporation']) ;  //��ȡ��ǰ��ֵ
		 echo "��ǰѡ�����ҵ:<b>{$_GET['corporation']}</b><br/>" ; 
              }else{ echo "��û��ѡ���κ���ҵ.����ѡһ����ҵ.<br/>" ;  }  
       if (isset ($_COOKIE["example_corporation"])){ 
	     echo "COOKIE�б����ֵ: <b>{$_COOKIE['example_corporation']}</b><br/>";
   	    } ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ύ��COOKIE</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<body>
<table width="300" border="1" cellpadding="0" cellspacing="3" bordercolor="#B0FFFF" background="images/135.JPG">
<form action="<?php echo $_SERVER['../PHP_SELF']?>" method="get">
  <tr align="center">
    <td height="22" colspan="4" class="style1">ͨ��COOKIE������ύ��ֵ</td>
  </tr>
  <tr align="left">
    <td height="22" colspan="4" class="style1">&nbsp;<?php echo "��ǰѡ�����ҵ:<b>{$_GET['corporation']}</b><br/>" ; ?></td>
  </tr>
  <tr align="left">
    <td height="22" colspan="4" class="style1">&nbsp;<?php echo "COOKIE�б����ֵ: <b>{$_COOKIE['example_corporation']}</b><br/>"; ?></td>
    </tr>
  <tr align="center">
    <td width="48" align="right">
      <input type="radio" name="corporation" value="���տƼ�"/>    </td>
    <td width="103" height="22" align="left"><span class="style1">���տƼ�</span></td>
    <td width="38" align="right">
      <input type="radio" name="corporation" value="Ǯ��ˮҵ"/>   </td>
    <td width="101" align="left" class="style1">Ǯ��ˮҵ</td>
  </tr>
  <tr align="center">
    <td align="right">
      <input type="radio" name="corporation" value="�������� "/>    </td>
    <td height="22" align="left" class="style1">��������</td>
    <td align="right">
      <input type="radio" name="corporation" value="���ձ�ҵ"/>    </td>
    <td align="left" class="style1">���ձ�ҵ</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td height="22" align="right"><input name="submit" type="submit" value="�ύ"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>                      
</body>
</html>
