<?php
session_start();
 class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include "conn/conn.php";
     $sql=mysql_query("select * from tb_admin where name='".$this->name."'");
     $info=mysql_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
          exit;
       }
      else{
          if($info[pwd]==$this->pwd){
			 $_SESSION[admin_name]=$info[name];
             echo "<script language='javascript'>alert('恭喜您，登录成功！');window.location.href='index.php';</script>";
            }
          else{
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }
      }    
   }
 }

    $obj=new chkinput(trim($_POST[name]),trim(md5($_POST[pwd])));
    $obj->checkinput();
?>