<?php
session_start();
include_once("conn/conn.php");
$fromuser=trim($_SESSION["nc"]);
$sql=mysql_query("select * from tb_puser where usernc='".$fromuser."'",$conn);
$info=mysql_fetch_array($sql);
 if($info==false){
  echo "<script>alert('对不起,等待时间过长，请重新登录!');window.location.href='logout.php';</script>";
  exit;
 }
$touser=$_POST[touser1];
if($touser=="所有人"){
 $touser="all";
}
$content=$_POST[bbs_content];
$pubtime=date("Y-m-j H:i:s");
$nowtime=time();
mysql_query("insert into tb_message(touser,fromuser,content,pubtime,nowtime) values ('$touser','$fromuser','$content','$pubtime','$nowtime')",$conn);
echo "<script>window.location.href='chat.php';</script>";
?>