<?php
include "conn/conn.php";
$username=trim($_POST[user]);
$pass=trim($_POST[pass]);          //��ȡ���ύ������ֵ
$password=crypt($pass,"mr");       //��crypt()�������м���
$sql=mysql_query("select * from tb_gl where username='$username' and password='$password'");
$result=mysql_fetch_array($sql);
if($result==true){
	 echo "<script>alert('��ϲ����¼�ɹ�!');window.location.href='index.php';</script>"; 
}else{
	 echo "<script>alert('��������û��� $username �����ڻ����벻��ȷ!!'); window.location.href='index.php';</script>";
}
?>   
