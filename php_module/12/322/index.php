<?php session_start();
if($Submit==true){
$file=$_POST[files];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>判断文件是否被改动</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>
<body>
<?php 
if(file_exists($file)){
   $change_time=filectime($file);
   $time=date("Y-m-d h:i:s",$change_time);
   $last_time=filemtime($file);
   $times=date("Y-m-d h:i:s",$last_time);
   }else{echo "该文件不存在!!";}
?>
<table width="450" height="240" border="0" cellpadding="0" cellspacing="0" background="images/331.jpg">
   <form name="form1" method="post" action="index.php">
  <tr>
    <td>&nbsp;</td>
    <td width="57" height="78">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="58">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="28" colspan="3"><input name="files" type="file" id="files" size="18">      &nbsp;
      <input type="submit" name="Submit" value="提交"></td>
    </tr>
  <tr>
    <td width="135">&nbsp;</td>
    <td height="32" colspan="3"><span class="style1"><?php echo $file;?></span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td><span class="style1"><?php echo $times;?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td class="style1"><?php echo $time;?></td>
    <td class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;    </td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>
