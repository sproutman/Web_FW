<html>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	font-family: "����";
}
body {
	margin-left: 00px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFF3FF;
}
-->
</style>
<script language="javascript">
   function checklogin(){   
       if((myform.user.value!="")&&(myform.pass.value!=""))
	      return true;
		else{
		   alert("�û����ƻ����벻��Ϊ��!");
		   return false;
		}  
   }
</script>
<title>ʹ��crypt()�������м���</title>
<body>
<table width="346" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin1.gif">
  <tr>
    <td height="65">&nbsp;</td>
  </tr>
</table>
<table width="346" height="75" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin2.gif">
 <form action="check_login.php" method="post" name="myform" onSubmit="return checklogin()">
  <tr>
    <td width="130" height="29">&nbsp;</td>
    <td width="216" valign="bottom"><span class="style1">
      <input name="user" type="text" id="user" size="22">
    </span></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td valign="bottom"><span class="style1">
      <input name="pass" type="text" id="pass" size="22">
    </span></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input name="submit" type="image" src="images/dl.gif" width="45" height="19" border="0"></td>
  </tr>
  </form>
</table>
<table width="346" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin3.gif">
  <tr>
    <td height="13">&nbsp;</td>
  </tr>
</table>
</body>
</html>
