<?php session_start(); include("conn/conn.php");?>
<?php
 if($Submit=="�ύ"){
$data=date("Y-m-d");
$file_name="files";  //���ϴ��ļ�����
$name=$_FILES['file4']['name']; //��ȡ�ͻ��˻���ԭ�ļ�������
$type=strstr($name,"."); //��ȡ��"."�������ַ�
if($type!=".txt"){
echo "�Բ���,���ϴ��ļ��ĸ�ʽ����ȷ!!";
echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=�ļ��ϴ�\">����3���Ӻ󷵻�ǰҳ...";
}else{
	$query="insert into tb_file1(file_name,file_text,data)values('$file_name','$file4','$data')";
	$result=mysql_query($query);
	if($result=true){ 
	echo "�ϴ��ɹ�!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=�ļ��ϴ�\">"; 
	}else{echo "�ļ��ϴ�ʧ��!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php?lmbs=�ļ��ϴ�\">";}
}}
?>