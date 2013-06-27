<?php include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>禁止用户输入字符串中的危险字符</title>
<script language="javascript">
function Mycheck(){
if (myform.name.value=="")
{alert("用户名不能为空！！");myform.name.focus();return false;}
if(myform.pwd.value=="")
{alert("用户密码不能为空！！");myform.pwd.focus();return false;}
//myform.submit();
}
</script>
<style type="text/css">
<!--
.style2 {
	font-size: 9pt;
	color: #000000;
}
.style5 {font-size: 9pt}
-->
</style>
</head>
<body>
<?php
if($_POST[submit]<>""){
$name1=trim($_POST[name]);
$pwd1=trim($_POST[pwd]);
for($i=0;$i<=strlen($name1);$i++){
	$name=substr($name1,$i,1);
	if($name=="%" or $name=="&" or $name=="<" or $name==">" or $name=="|" ){ 
       echo "<script>alert('您的用户名中含有非法字符，请重新输入！');window.history.back();</script>";
  }
}
for($i=0;$i<=strlen($pwd1);$i++){
	$pwd=substr($pwd1,$i,1);
   if($pwd=="%" or $pwd=="&" or $pwd=="<" or $pwd==">" or $pwd=="|"){ 
      echo "<script>alert('您的密码中含有非法字符，请重新输入！');window.history.back();</script>";
  }
}
$sql=mysql_query("select * from tb_manage where username='$name1' and password='$pwd1'");
$result=mysql_fetch_array($sql);
if($result){
    echo"<script>alert('登录成功！');window.location.href='index.php';</script>";
}
else{
    echo"<script>alert('对不起，您输入的用户名、密码有误，请重新输入！');window.location.href='index.php';</script>";
}
}
?>
<form name="myform" method="post" action="" onSubmit="return Mycheck()">
<table width="402" height="220" border="1" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#FFCCFF" bordercolordark="#99FFFF">
  <tr>
    <td width="398" valign="top" background="images/1.gif"><table width="391" height="137" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="214" height="81">&nbsp;</td>
        <td width="49" valign="bottom"><span class="style2">用户名：</span> </td>
        <td width="128" valign="bottom"><input name="name" type="text" id="name" size="16" ></td>
      </tr>
      <tr>
        <td height="15">&nbsp;</td>
        <td height="22" class="style2">密　码： </td>
        <td height="15" class="style2"><input name="pwd" type="password" id="pwd" size="16" ></td>
      </tr>
      <tr>
        <td height="11">&nbsp;</td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
        <td height="27" colspan="2" valign="top" class="style2"><div align="center">
          <input name="submit" type="submit" id="submit" value="登录" >
</div></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</form>
</body>
</html>
