<?php session_start(); 
if(mysql_connect("localhost","root","root")==true){
   if($Submit==true){
      $mysql="create database $database ";
      $result=mysql_query($mysql);
       echo mysql_error();
      if($result==true){
         echo "���ݿⴴ���ɹ�!";
      }else{echo "���ݿⴴ��ʧ��!";}
  }else{echo "����ʧ��"; }}
?>