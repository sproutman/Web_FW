<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="�ύ"){
$data=date("Y-m-d");
$file_name="files";
$filesize=$_FILES['file3']['size'];
if($filesize>2000000){
echo "�Բ���,���ϴ����ļ������˹涨�Ĵ�С!!";
echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=�ļ��ϴ�\">����3���Ӻ󷵻�ǰҳ...";
}else{
$path = './upfiles/'. $_FILES['file3']['name'];
if (move_uploaded_file($_FILES['file3']['tmp_name'],$path)) { 
	$query="insert into tb_file2(file_name,file_text,data)values('$file_name','$path','$data')";
	$result=mysql_query($query);
	if($result=true){ 
	echo "�ϴ��ɹ�!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=�ļ��ϴ�\">"; 
	}else{echo "�ļ��ϴ�ʧ��!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=�ļ��ϴ�\">";}
}}}
?>