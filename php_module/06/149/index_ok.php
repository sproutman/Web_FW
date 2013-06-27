<?php session_start(); include("conn/conn.php");
if($Submit=="激活"){
    while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_update set operation='激活' where id='".$name."'");          
    if($result==true){
	    echo "<script>alert('权限激活成功!'); window.location.href='index.php';</script>";}}
}
if($Submit2=="冻结"){
 while(list($name,$value)=each($_POST)){    
         $result=mysql_query("update tb_update set operation='冻结' where id='".$name."'");          
    if($result==true){
	    echo "<script>alert('权限已冻结!'); window.location.href='index.php';</script>";} }
}
?>