<?php  if (!empty ($_COOKIE['example'] ))
             $example = ++$_COOKIE['example'] ;
		else $example = 1 ;  
			setcookie("example",$example,time()+54000);
             	    ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�򵥵�COOKIE������</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "��������";
}
.style2 {
	font-size: 25px;
	font-family: "�����п�";
}
.style3 {
	font-size: 13px;
	font-family: "��������";
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
        <td height="25" align="center" class="style2">��ӭ����</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="top"><span class="style1">��ҳ�Ѿ�������:</span><span class="style2">&nbsp;<?php echo "$example";?>��</span></td>
      </tr>
      <tr>
        <td height="18" align="center" valign="top"><span class="style3">�򵥵�COOKIE������</span></td>
      </tr>
      <tr>
        <td height="30" align="center">&nbsp;</td>
      </tr>
    </table>    </td>
  </tr>
</table>
</body>
</html>
