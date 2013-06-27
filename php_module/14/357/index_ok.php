<?php session_start(); include_once("conn/conn.php");
if($Submit==true){
   $query=mysql_query("update tb_data set product_count='$product_count' where id='$select'");
   if($query==true){
     echo "<script>alert('ÐÞ¸Ä³É¹¦'); window.location.href='index.php';</script>";
    }
}
?>