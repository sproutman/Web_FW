<?php session_start(); include("conn/conn.php");
if($Submit==true){
     $result=mysql_query("delete from $lmbs");
	 if($result==true){echo "ɾ���ɹ�!";}else{echo "ɾ��ʧ��!!";}
}
?>