<?php include_once("conn/conns.php");
   $table=$_POST[table];
    if(mysql_query($table,$id)){
    echo "�ɹ�!";

  }else{
    echo "ʧ��!";
}

?>