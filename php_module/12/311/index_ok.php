<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="提交"){
$data=date("Y-m-d");
$filesize=$_FILES['images']['size'];
if($filesize>1000000){echo "<script> alert('对不起,您输入的图片太大,不能上传!!'); history.back();</script>";}else{
$path = 'upfiles/'. $_FILES['images']['name'];
if (move_uploaded_file($_FILES['images']['tmp_name'],$path)) { 
	$query1="insert into tb_image2(path,data,image_name)values('$path','$data','$images')";
	$result1=mysql_query($query1);
	if($result1=true){ 
	echo "上传成功!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">"; 
	}else{echo "文件上传失败!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">";}
}}}
?>