<?php session_start(); include("conn/conn.php");
if($Submit=="É¾³ý"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("delete from tb_chartroom where id='".$name."'");          
    if($result==true){
	    echo "<script>alert('É¾³ý³É¹¦!'); window.location.href='index.php';</script>";
	}else{ 
	   echo "<script>alert('Ê§°Ü!'); window.location.href='index.php';</script>";}
}}
?>