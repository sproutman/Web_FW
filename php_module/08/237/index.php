<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������ϲ�ѯ</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php">
	  <tr>
        <td bgcolor="#A6C2DE"><div align="center">&nbsp;
          <input type="submit" name="submit" value="�ϲ�ѧ����Ϣ" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!=""){

?>

<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="79" height="25" bgcolor="#A6C2DE"><div align="center" class="STYLE1">ѧ��</div>          <div align="center" class="STYLE1"></div>          <div align="center" class="STYLE1"></div>          <div align="center" class="STYLE1"></div></td>
        <td width="80" bgcolor="#A6C2DE"><div align="center" class="STYLE1">����</div></td>
        <td width="63" bgcolor="#A6C2DE"><div align="center" class="STYLE1">�Ա�</div></td>
        <td width="50" bgcolor="#A6C2DE"><div align="center" class="STYLE1">����</div></td>
        <td width="103" bgcolor="#A6C2DE"><div align="center" class="STYLE1">סַ</div></td>
        <td width="118" bgcolor="#A6C2DE"><div align="center" class="STYLE1">����רҵ</div></td>
      </tr>
      <?php
		 include_once("conn.php");
		 $sql=mysql_query("select * from tb_1 union all select * from tb_2",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?>
      <tr>
        <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="center">û�в��ҵ������Ϣ!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[age];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[address];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[spec];?></div></td>
      </tr>
      <?php
	    }while($info=mysql_fetch_array($sql));
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
