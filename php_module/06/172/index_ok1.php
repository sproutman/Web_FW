<?php include_once("conn/conns.php");
   $table=$_POST[table];
    if(mysql_query($table,$id)){
    echo "³É¹¦!";

  }else{
    echo "Ê§°Ü!";
}

?>