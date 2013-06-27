<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>上传单图片到服务器并显示</title>
</head>

<body>
<table width="355" height="240" border="0" align="center" cellpadding="0" cellspacing="0" background="images/319.jpg">
  <tr>
    <td width="106" height="100">&nbsp;</td>
    <td width="196">&nbsp;</td>
    <td width="31">&nbsp;</td>
  </tr>
<form name="form1" method="post" action="index_ok.php" enctype="multipart/form-data">
  <tr>
    <td height="30" align="center">&nbsp;</td>
    <td valign="middle"><input name="images" type="file" id="images2" size="15">
	 <input type="hidden" name="MAX_FILE_SIZE" value="30000">	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="55">&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
 </form>
  <tr>
    <td height="55">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="355" border="1" align="center" cellpadding="0" cellspacing="0">
 <?php $query="select * from tb_image2 where id order by data desc limit 2";
 $result=mysql_query($query);
 if($result==true){
 while($myrow=mysql_fetch_array($result)){ 
 ?><tr>
    <td width="100" align="center"><?php echo $myrow[data];?></td>
    <td width="255" align="center"><img src="<?php echo $myrow[path];?>" width="200" height="150"></td>
  </tr>
  <?php }}?>
</table>
</body>
</html>
