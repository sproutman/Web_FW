<?php session_start(); include("conn/conn.php");
if($Submit=="�ύ"){
$query=mysql_query("insert into tb_insert (name,number,tel,address)values('$name','$number','$tel','$address')");}
if($query==true){
echo "������ӳɹ�!!";
}else{echo "���ݲ���ʧ��!!";};
?>