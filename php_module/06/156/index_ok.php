<?php  session_start(); include("conn/conn.php");
    if($Submit==true){
       $query=mysql_query("drop table $lmbs");
         if($query==true){
       echo "<script> alert ('É¾³ý³É¹¦!');window.location.href='index.php';</script>";
    }else{
       echo "<script> alert ('É¾³ý±íÊ§°Ü!!');window.location.href='index.php';</script>";}
    }
?>