<?php
session_start();
include_once("conn/conn.php");
$usernc=trim($_POST[usernc]);
$sql=mysql_query("select * from tb_puser where usernc='".$usernc."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false)
 {
  echo "<script language='javascript'>alert('对不起，该昵称已被其他用户使用!');history.back();</script>"; 
  exit; 
 }
else
{
  $logintime=date("Y-m-j H:i:s");
  $userhead=$_POST[userhead];
  $online=1;
  $ip=getenv("REMOTE_ADDR");
  $email=trim($_POST[email]);
  $mark=0;
  $nowtime=time();
  mysql_query("insert into tb_puser(usernc,logintime,ip,email,mark,userhead,online,nowtime) values ('$usernc','$logintime','$ip','$email','$mark','$userhead','$online','$nowtime')",$conn);
  session_register("nc");
  $_SESSION["nc"]=$usernc;
  echo "<script>window.location.href='chat.php';</script>";
}
?>