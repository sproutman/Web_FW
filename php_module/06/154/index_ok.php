<?php session_start();include("Conn/conn.php");$furl=getenv("HTTP_REFERER");
if($ljid==true){
$ljid=$_GET['ljid'];
$query="delete from tb_delete where id='$ljid'";
$result=mysql_query($query);
if($result==true){
  echo "ɾ���ɹ�!!";
  echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
}else{echo "ɾ��ʧ��!";}}
?>
