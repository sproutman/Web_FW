<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѯָ��ʱ����ڵ�����</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
 function chkinput(form){
   if(form.from.value==""){
     alert("��������ʼ����!");
      form.from.select();
	  return(false);
   }
    if(form.to.value==""){
     alert("��������ֹ����!");
      form.to.select();
	  return(false);
   }
   return(true);
 }
</script>
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
    <td bgcolor="#3497E5"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)"> 
	  <tr>
        <td bgcolor="#3497E5"><div align="center" class="STYLE1">���������շ�Χ��<input type="text" name="from" class="inputcss" size="18">
          &nbsp;<input type="text" name="to" class="inputcss" size="18">
            &nbsp;<input type="submit" name="submit" value="����" class="buttoncss">(****-**-**)</div></td>
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
    <td bgcolor="#3497E5"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="98" height="25" bgcolor="#D3E1EC"><div align="center">ѧ��</div></td>
        <td width="102" bgcolor="#D3E1EC"><div align="center">����</div></td>
        <td width="94" bgcolor="#D3E1EC"><div align="center">�Ա�</div></td>
        <td width="98" bgcolor="#D3E1EC"><div align="center">����</div></td>
        <td width="102" bgcolor="#D3E1EC"><div align="center">�༶</div></td>
      </tr>
	 <?php
	 $from=$_POST[from];
	 $to=$_POST[to];
	 include_once("conn.php");
	 $sql=mysql_query("select * from tb_student where birthday between '$from' and '$to'",$conn);
	 $info=mysql_fetch_array($sql);
	 if($info==false)
	 {
	 ?>
	  <tr>
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">û�в��ҵ���Ҫ�ҵ�����!</div></td>
        </tr>
     <?php
	 }
	 else
	 {
	   do{
	 ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[userid];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[birthday];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[classname];?></div></td>
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
