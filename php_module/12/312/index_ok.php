<?php  session_start();include "conn/conn.php"; ?>
<?php
if($_POST["Submit"]!=""){
	if(!is_dir("./upfile")){
		mkdir("./upfile");}
	for($i=0;$i<count($file);$i++){
		$path="upfile/".date("Ymdhis").$_FILES["file"]["name"][$i];
		move_uploaded_file($_FILES["file"]["tmp_name"][$i],$path);
		$data=date("Y-m-d H:m:s");
		$query="insert into tb_image2 (path,data) values ('$path','$data')";  //创建插入图片数据的sql语句
		$result=mysql_query($query);}
	echo "图片上传成功，请稍等...";
	echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";}
?>
