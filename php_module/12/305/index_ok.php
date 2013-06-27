<?php session_start();include("conn/conn.php");
       $data=date("Y-m-d");
       $file1="file_name1";
if($Submit==true){
    $query=mysql_query("insert into tb_file1 (file_name,file_text,data)values('$file1','$file','$data')");
if($query==true){
echo "文件上传成功!!";
echo "<meta http-equiv=\"refresh\" content=\"3 url=index.php\">";
}else{
echo "上传失败!!";
echo "<meta http-equiv=\"refresh\" content=\"3 url=index.php\">";}}
?>