<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ƕ�ײ�ѯ�ڲ�ѯͳ���е�Ӧ��</title>
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
    <td bgcolor="#0CA5FF"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php">
	  <tr>
        <td bgcolor="#3396E4"><div align="center">����
            <select name="tj">
              <option value=">">����</option>
              <option value="=">����</option>
              <option value="<">С��</option>
            </select>
            Ա��
            <input type="text" name="name" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" class="buttoncss" value="��ѯ"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
{
?>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0CA5FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="102" height="25" bgcolor="#3396E4"><div align="center" class="STYLE1">Ա�����</div></td>
        <td width="120" bgcolor="#3396E4"><div align="center" class="STYLE1">Ա������</div></td>
        <td width="100" bgcolor="#3396E4"><div align="center" class="STYLE1">��������</div></td>
        <td width="86" bgcolor="#3396E4"><div align="center" class="STYLE1">���</div></td>
        <td width="86" bgcolor="#3396E4"><div align="center" class="STYLE1">��������</div></td>
      </tr>
	   <?php
		 include_once("conn.php");
		 $sql=mysql_query("select * from tb_laborage where jbgz ".$_POST[tj]." any(select jbgz from tb_laborage where name='".$_POST[name]."')",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?> 
		<tr>
        <td height="25" colspan="6" bgcolor="#FFFFFF"><div align="center">û�в��ҵ����Ա����Ϣ!</div></td>
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
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[demp];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[lb];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[jbgz];?></div></td>
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
