<?php session_start(); 
if(mysql_connect("localhost","root","root")==true){
   if($Submit==true){
      $mysql="create database $database ";
      $result=mysql_query($mysql);
       echo mysql_error();
      if($result==true){
         echo "数据库创建成功!";
      }else{echo "数据库创建失败!";}
  }else{echo "连接失败"; }}
?>