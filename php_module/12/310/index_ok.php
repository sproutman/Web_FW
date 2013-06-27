<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="提交"){
$data=date("Y-m-d");
$path = 'upfiles/'. $_FILES['images']['name'];
$type=strstr($path,'.');
if($type!=".jpg"){echo "<script> alert('对不起,您上传的图片的格式不对!!'); history.back();</script>";
}else{
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