<?php session_start(); include("conn/conn.php");
if($Submit=="Ìá½»"){
   $query="insert into tb_admin (user,pass)value('$user','$pass')";
   $result=mysql_query($query);
   if($result==true){
      header("Location:indexs.php");}
  }
?>
