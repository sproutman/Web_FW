<?php  session_start();
        $data=$_SESSION[database]="通过session来存储数据,这是一个比较简单的数据存储的方式，它可以存储很多数据，对于那些需要临时存储，但又没有必要存储到数据库中的数据，应用session来存储是一个比较好的方法。";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过session存储数据</title>
<style type="text/css">
<!--
.style2 {
	font-size: 12px;
	font-family: "宋体";
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="453" height="276" border="0" cellpadding="0" cellspacing="0" background="images/142ss.JPG">
  <tr>
    <td align="center">&nbsp;</td>
    <td width="261" align="center">&nbsp;</td>
    <td width="82" height="75" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="110">&nbsp;</td>
    <td align="center" valign="middle"><span class="style2">
      <?php echo "$data";?>
    </span></td>
    <td height="75"><span class="style2">&nbsp;&nbsp;
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td height="126">&nbsp;</td>
  </tr>
</table>

</body>
</html>
