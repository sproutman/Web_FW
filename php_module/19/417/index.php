<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>PHP解压RAR文件</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
function chkinput(form){
   if(form.sourcefile.value==""){
      alert("请选择要解压的文件地址!");
      form.sourcefile.select();
	  return(false);
    }
	 if(form.objfile.value==""){
      alert("请输入解压文件存储地址!");
      form.objfile.select();
	  return(false);
    }
	return(true);
}

</script>
<body>
<table width="300" height="166" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="300" border="0" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="50" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="100" height="25"><div align="right">RAR文件地址：</div></td>
        <td width="200">&nbsp;<input type="file" name="sourcefile" size="18" class="inputcss"> </td>
      </tr>
      <tr>
        <td height="25"><div align="right">解压后存储目录：</div></td>
        <td height="25">&nbsp;<input type="text" name="objfile" size="18" class="inputcss">
        (c:\目录名)</td>
      </tr>
      <tr>
        <td height="20" colspan="2"><div align="center" class="STYLE1">注意：解压文件的路径不应有空格</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="submit" value="解压" class="buttoncss" />
        </div></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!=""){
 $sourcefile=$_POST[sourcefile];
$objfile=$_POST[objfile];
 $sourcefile=str_replace(chr(32),"&nbsp;",$sourcefile);
$obj=new com("wscript.shell");
$obj->run("WinRAR x-r-o ".$sourcefile." ".$objfile."",1,true);
echo "<script>alert('文件解压完成!');</script>";
}
?>

</body>
</html>
