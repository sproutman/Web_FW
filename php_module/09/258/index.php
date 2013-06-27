<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>用户登录 </title>
</head>
<script language="javascript">
function chkinput(form){
 if(form.name.value==""){
  alert("请输入用户名!");
  form.name.select();
  return(false);
 }
 if(form.pwd.value==""){
  alert("请输入用户密码!");
  form.pwd.select();
  return(false);
 }
return(true);

}
</script>
<body>
<table width="392" height="257" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="392" height="250" border="0" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="40" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="20" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="144" height="25"><div align="center">用户名：</div></td>
        <td width="248"><div align="left"><input type="text" name="name" size="25" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="30"><div align="center">密 码：</div></td>
        <td height="30"><div align="left"><input type="password" name="pwd" size="25" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="80" colspan="2"><div align="center">
          <input type="submit" name="submit" value="进入" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重置" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>

<?php
if($_POST[submit]!="")
{
  include_once("conn.php");
  $name=$_POST[name];
  $pwd=$_POST[pwd];
  $sql=mysql_query("select * from chkadmin where name='".$name."' and pwd='".$pwd."'",$conn);
  $info=mysql_fetch_array($sql);
  if($info==false){
    echo "<script>alert('用户名或密码输入错误!');history.back();</script>";
    exit;
	
  }
  else
  {
    echo "<br><div align=center>登录成功!</div>";
  }
   


}

?>
</body>
</html>
