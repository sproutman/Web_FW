<?php session_start(); include_once("conn/conn.php");
if($Submit==true){
   $query=mysql_query("update tb_department set department_count='$department_count' where id='$select'");
   if($query==true){
     echo "<script>alert('�޸ĳɹ�'); window.location.href='index.php';</script>";
    }
}
?>