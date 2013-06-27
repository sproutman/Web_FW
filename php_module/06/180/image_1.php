<?php         
    $id=mysql_connect('localhost','root','root');
    mysql_select_db('db_database06',$id);
    $query="select * from tb_picture where id=".$recid;
    $result=mysql_query($query);
    if(!$result) die("error: mysql query"); 
    $num=mysql_num_rows($result); 
    if($num<1) die("error: no this recorder");     
    $data = mysql_result($result,0,"xq"); 
    mysql_close($id); 
    echo $data;
?> 
