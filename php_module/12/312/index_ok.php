<?php  session_start();include "conn/conn.php"; ?>
<?php
if($_POST["Submit"]!=""){
	if(!is_dir("./upfile")){
		mkdir("./upfile");}
	for($i=0;$i<count($file);$i++){
		$path="upfile/".date("Ymdhis").$_FILES["file"]["name"][$i];
		move_uploaded_file($_FILES["file"]["tmp_name"][$i],$path);
		$data=date("Y-m-d H:m:s");
		$query="insert into tb_image2 (path,data) values ('$path','$data')";  //��������ͼƬ���ݵ�sql���
		$result=mysql_query($query);}
	echo "ͼƬ�ϴ��ɹ������Ե�...";
	echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";}
?>
