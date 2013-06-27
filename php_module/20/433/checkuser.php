<?php
session_start();
include "conn/conn.php";
$name=$_POST["txt_user"];
$pwd=$_POST["txt_pwd"];
$_SESSION[username]=$name;
$sql=mysql_query("select * from tb_author where username='".$name."' and  pwd='".$pwd."'");
$result=mysql_fetch_array($sql);
if($result!=""){
?>
<script language="javascript">
	alert("登录成功");window.location.href="index.php";
</script>
<?php
}else{
?>
<script language="javascript">
	alert("对不起，您输入的用户名或密码不正确，请重新输入!");window.location.href="login.php";
</script>	
<?php
}
?>
