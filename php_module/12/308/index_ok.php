<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="提交"){
$data=date("Y-m-d");
$file_name="files";  //给上传文件命名
$name=$_FILES['file4']['name']; //获取客户端机器原文件的名称
$type=strstr($name,"."); //获取从"."到最后的字符
if($type!=".txt"){
echo "对不起,您上传文件的格式不正确!!";
echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">将在3秒钟后返回前页...";
}else{
	$query="insert into tb_file1(file_name,file_text,data)values('$file_name','$file4','$data')";
	$result=mysql_query($query);
	if($result=true){ 
	echo "上传成功!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">"; 
	}else{echo "文件上传失败!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=文件上传\">";}
}}
?>