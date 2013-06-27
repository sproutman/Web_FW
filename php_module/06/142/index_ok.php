<?php session_start();  include("conn/conn.php");
  if($Submit==true){
   
  $query=mysql_query("select * from tb_mysql where username='$username'");
     if(mysql_num_rows($query)>0){ echo "该用户已经存在!!";
       }else{
       $querys="insert into tb_mysql (username,password,address)values('$username','$password','$address')";
       $result=mysql_query($querys);
          if($result==true){
             echo "管理员注册成功!!";
             }else{ echo "用户注册失败!!"; }
      }
  }
?>