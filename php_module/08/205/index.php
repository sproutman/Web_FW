<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ñ�����ѯ��ֵ������</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form){
   if(form.goodsid.value==""){
     alert("������Ҫ��ѯ��Ʒidֵ!");
     form.goodsid.select();l
	 return(false);
   }
  return(true);
 }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="60" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13"></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13" bgcolor="#3484DC"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#CCE4FC"><div align="center">��ƷID:<input type="text" name="goodsid" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" value="����" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13"></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
 {
   $id=$_POST[goodsid];
   
?>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13" bgcolor="#3484DC"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="95" height="25" bgcolor="#BBD4F4"><div align="center">��ƷID</div></td>
        <td width="101" bgcolor="#BBD4F4"><div align="center">����</div></td>
        <td width="98" bgcolor="#BBD4F4"><div align="center">��λ</div></td>
        <td width="98" bgcolor="#BBD4F4"><div align="center">����</div></td>
        <td width="102" bgcolor="#BBD4F4"><div align="center">����</div></td>
      </tr>
	  <?php
	   include_once("conn.php");
	   $sql=mysql_query("select * from tb_goods where id=".$id."",$conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false){	
	  ?>
	    <tr>
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">û�в��ҵ���Ҫ�ҵ�����!</div></td>
        </tr>
	  <?php
	   }else{
	    do{
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[dw];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[dj];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[sl];?></div></td>
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
