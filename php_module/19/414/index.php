<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Excel�����ݵ�����MySQL���ݿ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
function chkinput(form){
  if(form.dbname.value==""){
    alert("���������ݿ�����!");
	form.dbname.select();
	return(false);  
  }
   if(form.tbname.value==""){
    alert("���������!");
	form.tbname.select();
	return(false);  
  }
  return(true);
}

</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="499" height="67" /></td>
  </tr>
</table>
<table width="499" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="499" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="34" bgcolor="#FBAD62"><table width="499" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="85" height="25" bgcolor="#FECC9B"><div align="center"><strong>ID</strong></div></td>
        <td width="190" bgcolor="#FECC9B"><div align="center"><strong>����&nbsp;</strong></div></td>
        <td width="123" bgcolor="#FECC9B"><div align="center"><strong>������</strong></div></td>
        <td width="96" bgcolor="#FECC9B"><div align="center"><strong>����</strong></div></td>
      </tr>
	  <?php
	  $conn=new com("adodb.connection");
      $connstr="Driver={Microsoft Excel Driver (*.xls)};DBQ=".realpath("excel/book.xls");
      $conn->open($connstr);
      $sql="select * from [Sheet1$]";
      $rs=$conn->execute($sql);
	  if($rs->eof || $rs->bof)
	   {
	     echo "<div align=center>����ͼ����Ϣ!</div>";
	   }
	   else
	   {
	    while(!$rs->eof)
         {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(id);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(bookname);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(pubname);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(writer);echo $fields->value;?></div></td>
      </tr>
	  <?php
	      $rs->movenext;
	     }
	    }
	  ?>
    </table></td>
  </tr>
</table>
<table width="499" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="499" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#E79A47"><table width="499" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="savetomysql.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#FFFFFF"><div align="center">���ݿ�����<input type="text" name="dbname" size="10">
        ������<input type="text" name="tbname" size="10">&nbsp;&nbsp;<input type="submit" value="����" class="buttoncss">
        </div></td>
      </tr>
	  </form>
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
