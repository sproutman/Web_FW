<?php session_start(); include("conn/conn.php");
 if($Submit==true){
      $mysql=mysql_query("create table $table (id int not null auto_increment,primary key(id))");
      echo mysql_error();
   if($mysql==true){
      echo "���ݱ����ɹ�!";
   }else{echo "����ʧ��!";}
}
?>