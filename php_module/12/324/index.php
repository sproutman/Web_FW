<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>删除目录</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "华文琥珀";
	color: #FF0000;
}
-->
</style>
</head>

<body>
<table width="511" height="297" border="0" cellpadding="0" cellspacing="0" background="images/337.jpg">
  <tr>
    <td width="218" height="85">&nbsp;</td>
    <td width="157">&nbsp;</td>
    <td width="136">&nbsp;</td>
  </tr>
    <form name="form1" method="post" action="index.php">
  <tr>
    <td height="31">&nbsp;</td>
    <td><input name="file_dir" type="text" id="file_dir" size="20"></td>
    <td><input type="submit" name="Submit" value="提交">
    
      </td>
  </tr>
  </form>
    <tr>
      <td height="35">&nbsp;</td>
      <td><span class="style1">
      <?php 
if($Submit==true){
$file_dir=$_POST[file_dir];
if(is_dir($file_dir)){
rmdir($file_dir);
echo "删除目录成功!!";
}else{
echo "删除目录失败!!";
}}
?>
      </span></td>
      <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="146">&nbsp;</td>
    <td>&nbsp;
</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
