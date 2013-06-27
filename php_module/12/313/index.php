<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过链接方式下载</title>
<style type="text/css">
<!--
body {
	margin-left: 00px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<table width="385" height="185" border="0" cellpadding="0" cellspacing="0" background="images/315.gif">
  <tr>
    <td width="130" height="85">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="55">&nbsp;</td>
  </tr>
  <form name="form1" method="post" action="index_ok.php" enctype="multipart/form-data">
  <tr>
    <td height="40">&nbsp;</td>
    <td align="center" valign="middle"><input name="file2" type="file" id="file2" size="15" maxlength="150"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td align="center"><input type="submit" name="Submit" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="385" height="185" border="0" cellpadding="0" cellspacing="0" background="images/321.gif">
  <tr>
    <td width="55" height="85">&nbsp;</td>
    <td width="275">&nbsp;</td>
    <td width="55">&nbsp;</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
	
    <td width="275" height="40" align="left" valign="middle">
	  <table width="275" height="40" border="0">
        <tr>
		<?php $query=mysql_query("select * from tb_file2");
		if($query==true){
		while($myrow=mysql_fetch_array($query)){
		?>
          <td width="55" align="center"><a href="<?php echo $myrow[file_text];?>">下载</a></td>
        <?php }}?>
		</tr>
      </table>
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
