<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>防止用户直接输入地址访问PHP文件</title>
</head>
<script language="javascript">
	function check(form){
		if(form.txt_user.value==""){
			alert("请输入用户名");form.txt_user.focus();return false;		
		}
		if(form.txt_pwd.value==""){
			alert("请输入密码");form.txt_pwd.focus();return false;
		}
	}
</script>
<body>
<table width="384" height="248" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="bottom" background="images/image_01.gif">
	 <form name="form" method="post" action="checkuser.php">   
		<table width="384" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="13" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td width="55" height="129" rowspan="3" align="center" valign="middle">&nbsp;</td>
          <td width="265" height="34" align="center" valign="middle">用户名:
            <input  name="txt_user" size="20">
		</td>
          <td width="64" rowspan="3" align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="34" align="center" valign="middle">密码:
          <input  name="txt_pwd" type="txt_pwd" size="20"></td>
        </tr>
        <tr>
          <td height="42" align="center" valign="middle"><input type="submit" value="登录" name="submit" onClick="return check(form)"></td>
        </tr>
        <tr>
          <td height="13" colspan="3">&nbsp;</td>
        </tr>
      </table> 
	 </form>
    </td>
  </tr>
</table>
</body>
</html>

