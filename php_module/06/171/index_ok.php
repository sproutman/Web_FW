<?php session_start(); 
 if($Submit==true){
if(mysql_connect("localhost","root","root")==true){
      $mysql="create database $database ";
      $result=mysql_query($mysql);
       echo mysql_error();
      if($result==true){
         echo "<script> alert('���ݿⴴ���ɹ�!'); window.location.href='index2.php?lmbs=$database';</script>";
      }else{echo "����ʧ��"; }
}else{echo "���ݿⴴ��ʧ��!";}}


if($Submit2==true){
$id=mysql_connect("localhost","root","root") or die('����ʧ��:' . mysql_error());
if(mysql_select_db("$tables",$id)){   
      $mysql=mysql_query("create table $table (id int not null auto_increment,primary key(id))");
      echo mysql_error();
   if($mysql==true){
	   echo "<script> alert('���ݱ����ɹ�!'); window.location.href='index3.php?field=$tables';</script>";
   }else{echo "����ʧ��!";}
}else{echo "�������ݿ�ʧ��!";}}

if($Submit3==true){
  $null=$_POST[null];
  $id=mysql_connect("localhost","root","root") or die('����ʧ��:' . mysql_error());
  if(mysql_select_db("$fields",$id)){   
  $mysql=mysql_query("alter table $table add $field $type($length) $null");
    echo mysql_error();
  if($mysql==true){
   echo "<script> alert('���ݱ��ֶ���ӳɹ�!'); window.location.href='index.php';</script>";
  }else{echo "���ʧ��!";}
}else{echo ('���ݿ�ѡ��ʧ��:' . mysql_error());}
}
mysql_query("set names gb2312");

?>