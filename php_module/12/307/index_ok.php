<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="提交"){
$data=date("Y-m-d");
$file_name="files";
$filesize=$_FILES['file3']['size'];
if($filesize>2000000){
echo "对不起,您上传的文件超过了规定的大小!!";
echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">将在3秒钟后返回前页...";
}else{
$path = './upfiles/'. $_FILES['file3']['name'];
if (move_uploaded_file($_FILES['file3']['tmp_name'],$path)) { 
	$query="insert into tb_file2(file_name,file_text,data)values('$file_name','$path','$data')";
	$result=mysql_query($query);
	if($result=true){ 
	echo "上传成功!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">"; 
	}else{echo "文件上传失败!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">";}
}}}
?>