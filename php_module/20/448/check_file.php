<?php
session_start();
include "conn/conn.php";
if($btn_tj<>""){
$title=$_POST[txt_title];
$author=$_POST[author];
$content=$_POST[file];
$now=date("Y-m-d h:i:s");
$sql="insert into tb_article (title,content,author,now) Values ('$title','$content','$author','$now')";
$result=mysql_query($sql);
if($result){
	echo "<script>alert('��ϲ����������·���ɹ�!!!');window.location.href='index.php';</script>";
}
else{
	echo "<script>alert('�Բ�����Ӳ���ʧ��!!!');window.location.href='index.php';</script>";
}
}
?>
