<style type="text/css">
<!--
body {
	background-color: #ECF2F1;
}
-->
</style>
<?php 
include "conn/conn.php";
$username=$_GET[x];
$sql=mysql_query("select * from tb_member where username = '$username'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo ("[<font color=red>".$username."</font>]已被注册！");
}
else{
	echo ("恭喜您!用户名[<font color=green>".$username."</font>]可以注册！");
}
?>
<title>检测用户名</title>