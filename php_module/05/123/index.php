<?php session_start();
      $ss=$_SESSION[user]="SESSION方法实现页面间数据的传递!!";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过SESSION方法实现页面间的数据传递</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #000000;
}
-->
</style>
</head>

<body>
<table width="300" border="0" cellpadding="0" cellspacing="0" background="images/127.JPG">
 <form name="form1"  method="post" action="index_ok.php">
   <tr align="center" valign="bottom">
      <td height="25" colspan="2" class="style1">通过SESSION方法实现页面间的数据传递</td>
    </tr>
    <tr align="left">
      <td height="50" colspan="2" class="style2">&nbsp;&nbsp; 这里通过$_SESSION传递的数据是&quot;SESSION方法实现页面间数据的传递!!&quot;</td>
    </tr>
    <tr>
      <td width="90" align="center">&nbsp;</td>
      <td width="204" height="25"><input type="submit" name="Submit" value="提交">          </td>
    </tr>
	</form>
</table>
</body>
</html>
