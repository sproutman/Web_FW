<?php
session_start();
if($_SESSION[username]==""){
	echo "<script>alert('�Բ��𣬱�������վ��Ҫ�����û���¼����֤������ʵ����!');window.location.href='index.php';</script>";
}
?>