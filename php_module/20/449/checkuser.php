<?php
session_start();
include "conn/conn.php";
$name=$_POST[txt_user];
$pwd=$_POST[txt_pwd];
$_SESSION[username]=$name;
$sql=mysql_query("select * from tb_client where regname='".$name."' and regpwd='".$pwd."'");
$result=mysql_fetch_array($sql);
if($result!=""){
$_SESSION[fig]=$result[fig];
?>
<script language="javascript">
	alert("登录成功");window.location.href="browseclient.php";
</script>
<?php
}else{
?>
<script language="javascript">
	alert("对不起，您输入的用户名、密码不正确，请重新输入!");window.location.href="index.php";
</script>	
<?php
	}
?>