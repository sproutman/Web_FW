<?php session_start(); include("conn/conn.php");
if($Submit==true){
  $null=$_POST[null];
  $mysql=mysql_query("alter table $table add $field $type($length) $null");
    echo mysql_error();
  if($mysql==true){
    echo "�ֶ���ӳɹ�!";
  }else{echo "���ʧ��!";}
}
?>