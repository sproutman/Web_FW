<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>PHPѹ��zip�ļ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
function chkinput(form){
   if(form.sourcefile.value==""){
      alert("��ѡ��Ҫѹ�����ļ���ַ!");
      form.sourcefile.select();
	  return(false);
    }
	 if(form.objfile.value==""){
      alert("������ѹ���ļ��洢��ַ!");
      form.objfile.select();
	  return(false);
    }
	return(true);
}

</script>
<body>
<table width="267" height="137" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="267" height="137" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="40" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="85" height="25"><div align="center" class="STYLE1">Դ�ļ�λ�ã�</div></td>
        <td width="182">&nbsp;<input type="file" name="sourcefile" size="15" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">ZIP�ļ�λ�ã�</div></td>
        <td height="25">&nbsp;<input tabindex="text" name="objfile" size="15" class="inputcss"s>
        (c:\*.zip)</td>
      </tr>
      <tr>
        <td height="50" colspan="2"><div align="center"><input type="submit" name="submit" value="ѹ��" class="buttoncss"></div></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!=""){
$sourcefile=$_POST[sourcefile];
$objfile=$_POST[objfile];
$obj=new com("wscript.shell");
$obj->run("winrar a ".$objfile." ".$sourcefile."",1,false);
echo "<script>alert('�ļ�ѹ�����!');</script>";
}

?>
</body>
</html>
