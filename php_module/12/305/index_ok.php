<?php session_start();include("conn/conn.php");
       $data=date("Y-m-d");
       $file1="file_name1";
if($Submit==true){
    $query=mysql_query("insert into tb_file1 (file_name,file_text,data)values('$file1','$file','$data')");
if($query==true){
echo "�ļ��ϴ��ɹ�!!";
echo "<meta http-equiv=\"refresh\" content=\"3 url=index.php\">";
}else{
echo "�ϴ�ʧ��!!";
echo "<meta http-equiv=\"refresh\" content=\"3 url=index.php\">";}}
?>