<?php
session_start();
if($_SESSION[username]==""){
	echo "<script>alert('��û�з���Ȩ�ޣ����ȵ�¼!');window.location.href='login.php';</script>";
}
?>
