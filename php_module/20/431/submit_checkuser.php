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
	echo ("[<font color=red>".$username."</font>]�ѱ�ע�ᣡ");
}
else{
	echo ("��ϲ��!�û���[<font color=green>".$username."</font>]����ע�ᣡ");
}
?>
<title>����û���</title>