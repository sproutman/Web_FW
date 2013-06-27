<?php
session_start();
include "conn/conn.php";
if($_POST["submit"]=="提交"){
	$_Session[file_id]=$_POST[htxt_fileid];
	$content=$_POST[txt_content];
	$username=$_POST[username];
	$datetime=date("Y-m-d h:m:s");
	$INS="Insert Into tb_filecomment (fileid,username,content,datetime) Values ($_Session[file_id],'$username','$content','$datetime')";
	$info=mysql_query($INS);
	if($info){
		echo "<script> alert('成功发表评论！');</script>";
		echo "<script> window.location.href='comment.php?file_id=$_Session[file_id]';</script>";
	}
	else{
		echo "<script> alert('评论发表操作失败！');</script>";
		echo "<script> window.location='comment.php';</script>";
	}
}
?>
