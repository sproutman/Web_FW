<?php session_start(); 
 if($Submit==true){
if(mysql_connect("localhost","root","root")==true){
      $mysql="create database $database ";
      $result=mysql_query($mysql);
       echo mysql_error();
      if($result==true){
         echo "<script> alert('数据库创建成功!'); window.location.href='index2.php?lmbs=$database';</script>";
      }else{echo "连接失败"; }
}else{echo "数据库创建失败!";}}


if($Submit2==true){
$id=mysql_connect("localhost","root","root") or die('连接失败:' . mysql_error());
if(mysql_select_db("$tables",$id)){   
      $mysql=mysql_query("create table $table (id int not null auto_increment,primary key(id))");
      echo mysql_error();
   if($mysql==true){
	   echo "<script> alert('数据表创建成功!'); window.location.href='index3.php?field=$tables';</script>";
   }else{echo "创建失败!";}
}else{echo "连接数据库失败!";}}

if($Submit3==true){
  $null=$_POST[null];
  $id=mysql_connect("localhost","root","root") or die('连接失败:' . mysql_error());
  if(mysql_select_db("$fields",$id)){   
  $mysql=mysql_query("alter table $table add $field $type($length) $null");
    echo mysql_error();
  if($mysql==true){
   echo "<script> alert('数据表字段添加成功!'); window.location.href='index.php';</script>";
  }else{echo "添加失败!";}
}else{echo ('数据库选择失败:' . mysql_error());}
}
mysql_query("set names gb2312");

?>