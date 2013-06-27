<?php  if (!empty ($_COOKIE['example'] ))
             $example = ++$_COOKIE['example'] ;
		else $example = 1 ;  
			setcookie("example",$example,time()+54000);
             	    ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>简单的COOKIE计数器</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "华文琥珀";
}
.style2 {
	font-size: 25px;
	font-family: "华文行楷";
}
.style3 {
	font-size: 13px;
	font-family: "华文琥珀";
}
-->
</style>
</head>

<body>
<table width="350" height="208" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/136.JPG"><table width="240" height="208" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" class="style2">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="center" class="style2">欢迎光临</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="top"><span class="style1">本页已经被访问:</span><span class="style2">&nbsp;<?php echo "$example";?>次</span></td>
      </tr>
      <tr>
        <td height="18" align="center" valign="top"><span class="style3">简单的COOKIE计数器</span></td>
      </tr>
      <tr>
        <td height="30" align="center">&nbsp;</td>
      </tr>
    </table>    </td>
  </tr>
</table>
</body>
</html>
