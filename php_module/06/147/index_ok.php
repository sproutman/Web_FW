<?php session_start();  include("conn/conn.php");
if($Submit==true){
$query=mysql_query("select * from tb_mysql where username='$username' and password='$password'");
if(mysql_num_rows($query)>0){
echo "<script> alert('ϵͳ��־:�û���:$username ��¼ʱ��:$data ���幤��:$work');window.location.href='index.php';</script>";
$result=mysql_query("insert into tb_log (user,data,work)values('$username','$data','$work')");
}else{echo "<script>alert('��������û���Ϣ����ȷ!!'); window.location.href='index.php';</script>";}
}
?>
