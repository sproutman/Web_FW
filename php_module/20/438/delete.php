<?php session_start(); include("../conn/conn.php"); $furl=getenv("http_referer");
include "hyyz.php";   //������ҳ�ķ���Ȩ��
if ($record==1) {
if($lmbs=="�û�����"){
//��ý���ɾ�����û�ID
$id=$_GET['id'];
//��Ҫɾ�����û���mr_user����ɾ��
$query="delete from tb_mruser where id='$id'";
$result=mysql_query($query);
if($result){
  echo "ɾ���ɹ�!!";
  echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
}else{echo "ɾ��ʧ��!";}
}
if($lmbs=="��Ŀ����"){
$id=$_GET['id'];
$query="delete from tb_zqfl where id='$id'";
$result=mysql_query($query);
  if($result){
     echo "<font color=\"#ff0000\">ɾ���ɹ�!!</font>";
     echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";}
}
if($lmbs=="��̳����"){
   $id=$_GET['id'];
   $query="delete from tb_zqlb where id='$id'";
   $result=mysql_query($query);
   if($result){
      echo "<font color=\"#ff0000\">ɾ���ɹ�!!</font>";
      echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; }
}
if($lmbs=="�ظ�����"){
   $id=$_GET['id'];
   $query="delete from tb_hflbwhere id='$id'";
   $result=mysql_query($query);
   if($result){
     echo "<font color=\"#ff0000\">ɾ���ɹ�!!</font>";
	 echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; }
} ?>
<?php }else{ include "yzdl.php"; } ?>