<?php session_start(); include("conn/conn.php");
if($Submit=="����"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_update set operation='����' where id='".$name."'");          
    if($result==true){
	    echo "<script>alert('Ȩ�޼���ɹ�!'); window.location.href='index.php';</script>";}}
}
if($Submit2=="����"){
 while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_update set operation='����' where id='".$name."'");          
    if($result==true){
	    echo "<script>alert('Ȩ���Ѷ���!'); window.location.href='index.php';</script>";} }
}
?>