<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>PHP中压缩RAR文件</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
.STYLE2 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
function chkinput(form){
   if(form.sourcefile.value==""){
      alert("请选择要压缩的文件地址!");
      form.sourcefile.select();
	  return(false);
    }
	 if(form.objfile.value==""){
      alert("请输入压缩文件存储地址!");
      form.objfile.select();
	  return(false);
    }
	return(true);
}

</script>
<body>
<table width="324" height="158" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/banner.gif"><table width="324" border="0" align="center" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)"> 
	  <tr>
        <td height="60" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="96" height="25"><div align="center" class="STYLE1">要压缩的文件：</div></td>
        <td width="228">&nbsp;<input type="file" name="sourcefile" size="20" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25"><div align="center" class="STYLE1">压缩后文件：</div></td>
        <td height="25">&nbsp;<input type="text" name="objfile" size="20" class="inputcss">
          (c:\*.rar)</td>
      </tr>
      <tr>
        <td height="25" colspan="2" valign="top"><div align="center">
          <input type="submit"  name="submit" value="压缩" class="buttoncss"></div></td>
      </tr>
      <tr>
        <td colspan="2" valign="top"><div align="center" class="STYLE2">要压缩的文件的路径不应有空格!</div></td>
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


echo "<script>alert('文件压缩完成!');</script>";
}


?>
</body>
</html>
