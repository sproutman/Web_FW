<?php
include "conn/conn.php"; 
if($_POST[submit]!=""){
$username=$_POST[username];
$password=$_POST[password];
$sql=mysql_query("select * from tb_user where username='$username' and password='$password'");
$info=mysql_fetch_array($sql);
if($info){
?>
<script language="javascript">
alert("��ϲ������¼�ɹ���");window.location.href="index.php";
</script>
<?php
}
else{
?>
<script language="javascript">
alert("�Բ�����������û������������");window.location.href="index.php";
</script>
<?php
}
}
?>