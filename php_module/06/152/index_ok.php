<?php session_start(); include("conn/conn.php");
if($Submit==true){
      $query=mysql_query("delete from tb_insert where id='$lmbs'");
	  if($query==true){ 
	  echo "<script>alert('ɾ���ɹ�!!'); window.location.href='index.php';</script>";
	  }else{
	  echo "<script>alert('ɾ��ʧ��!!'); window.location.href='index.php';</script>"; }
}
?>