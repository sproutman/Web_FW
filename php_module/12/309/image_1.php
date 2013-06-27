<?php  include("conn/conn.php");        
    $query="select * from tb_image1 where id=".$recid;
    $result=mysql_query($query);
    if(!$result) die("error: mysql query"); 
    $num=mysql_num_rows($result); 
    if($num<1) die("error: no this recorder");     
    $data = mysql_result($result,0,"image"); 
    mysql_close($id); 
    echo $data;
?> 



