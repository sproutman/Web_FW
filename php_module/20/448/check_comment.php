<?php
session_start();
include "conn/conn.php";
if($_POST["submit"]=="�ύ"){
	$_Session[file_id]=$_POST[htxt_fileid];
	$content=$_POST[txt_content];
	$username=$_POST[username];
	$datetime=date("Y-m-d h:m:s");
	$INS="Insert Into tb_filecomment (fileid,username,content,datetime) Values ($_Session[file_id],'$username','$content','$datetime')";
	$info=mysql_query($INS);
	if($info){
		echo "<script> alert('�ɹ��������ۣ�');</script>";
		echo "<script> window.location.href='comment.php?file_id=$_Session[file_id]';</script>";
	}
	else{
		echo "<script> alert('���۷������ʧ�ܣ�');</script>";
		echo "<script> window.location='comment.php';</script>";
	}
}
?>
