<?php  session_start(); include("conn/conn.php");
    if($Submit==true){
       $query=mysql_query("drop table $lmbs");
         if($query==true){
       echo "<script> alert ('ɾ���ɹ�!');window.location.href='index.php';</script>";
    }else{
       echo "<script> alert ('ɾ����ʧ��!!');window.location.href='index.php';</script>";}
    }
?>