<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="提交"){
$data=date("Y-m-d");
$file_name="file2";
$path = './upfiles/'. $_FILES['file2']['name'];
if (move_uploaded_file($_FILES['file2']['tmp_name'],$path)) { 
	$query="insert into tb_file2(file_name,file_text,data)values('$file_name','$path','$data')";
	$result=mysql_query($query);
	if($result=true){ 
	echo "上传成功!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">"; 
	}else{echo "文件上传失败!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">";}
}}
?>