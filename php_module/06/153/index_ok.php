<?php session_start(); include("conn/conn.php");
if($Submit=="ɾ��"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("delete from tb_chartroom where id='".$name."'");          
    if($result==true){
	    echo "<script>alert('ɾ���ɹ�!'); window.location.href='index.php';</script>";
	}else{ 
	   echo "<script>alert('ʧ��!'); window.location.href='index.php';</script>";}
}}
?>