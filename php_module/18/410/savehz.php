<?php
include"conn/conn.php";
$name=$_POST[name];
$sex=$_POST[sex];
$tel=$_POST[tel];
$career=$_POST[career];
$culture=$_POST[culture];
$email=$_POST[email];
$yb=$_POST[yb];
$address=$_POST[address];
if($_POST[submit]!=""){
$sql="insert into tb_reader(name,sex,tel,career,culture,email,yb,address) values('$name','$sex','$tel','$career','$culture','$email',$yb,'$address')";
$info=mysql_query($sql);
if($info){
?>
<script language="javascript">
alert("��ϲ�������߻�ִ������ӳɹ���");window.location.href="StartExam.php";
</script>
<?php
}else{
?>
<script language="javascript">
alert("�Բ��𣬶��߻�ִ���ʧ�ܣ�");window.location.href="StartExam.php";
</script>
<?php
}
}
?>