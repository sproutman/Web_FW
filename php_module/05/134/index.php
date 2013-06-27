<?php  setcookie("cookie[用户名]",$_POST[user]);
        setcookie("cookie[密码]",$_POST[pass]);
        if (isset($_COOKIE['cookie'])){
		  echo '<span class="style2">COOKIE中保存的用户登录信息</span><br />';
           foreach ($_COOKIE['cookie'] as $name => $value){
           echo "<span class='style2'>$name : $value</span> <br />\n"; }  }  ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>使用COOKIE记录用户登录信息</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {
	font-size: 16px;
	font-family: "楷体_GB2312";
	font-weight: bold;
}
body {
	background-image: url();
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="350" height="235" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="209" background="images/137.jpg"><table width="350" height="235" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="117" height="85">&nbsp;</td>
        <td width="48">&nbsp;</td>
        <td width="87">&nbsp;</td>
        <td width="80">&nbsp;</td>
      </tr>
	  <form name="form1" method="post" action="index.php">
      <tr>
        <td height="36">       </td>
        <td align="center" valign="middle"><span class="style1">用户名</span>:</td>
        <td><input name="user" type="text" id="user" size="12"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="44">&nbsp;</td>
        <td align="center" valign="middle"><span class="style1">密码</span>:</td>
        <td><input name="pass" type="password" id="pass" size="12"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="right"><input name="imageField" type="image" src="images/137s.jpg" width="60" height="22" border="0"></td>
        <td align="center"><input name="imageField2" type="image" src="images/137ss.jpg" width="60" height="22" border="0"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="18" colspan="2" align="right">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
	   </form>
    </table></td>
  </tr>
</table>
</body>
</html>
