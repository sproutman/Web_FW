<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="�ύ"){
$data=date("Y-m-d");
$filesize=$_FILES['images']['size'];
if($filesize>1000000){echo "<script> alert('�Բ���,�������ͼƬ̫��,�����ϴ�!!'); history.back();</script>";}else{
$path = 'upfiles/'. $_FILES['images']['name'];
if (move_uploaded_file($_FILES['images']['tmp_name'],$path)) { 
	$query1="insert into tb_image2(path,data,image_name)values('$path','$data','$images')";
	$result1=mysql_query($query1);
	if($result1=true){ 
	echo "�ϴ��ɹ�!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">"; 
	}else{echo "�ļ��ϴ�ʧ��!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">";}
}}}
?>