<?php  session_start();
        $data=$_SESSION[database]="ͨ��session���洢����,����һ���Ƚϼ򵥵����ݴ洢�ķ�ʽ�������Դ洢�ܶ����ݣ�������Щ��Ҫ��ʱ�洢������û�б�Ҫ�洢�����ݿ��е����ݣ�Ӧ��session���洢��һ���ȽϺõķ�����";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ͨ��session�洢����</title>
<style type="text/css">
<!--
.style2 {
	font-size: 12px;
	font-family: "����";
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
