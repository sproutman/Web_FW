<?php session_start();  include("conn/conn.php");
  if($Submit==true){
   
  $query=mysql_query("select * from tb_mysql where username='$username'");
     if(mysql_num_rows($query)>0){ echo "���û��Ѿ�����!!";
       }else{
       $querys="insert into tb_mysql (username,password,address)values('$username','$password','$address')";
       $result=mysql_query($querys);
          if($result==true){
             echo "����Աע��ɹ�!!";
             }else{ echo "�û�ע��ʧ��!!"; }
      }
  }
?>