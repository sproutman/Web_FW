<?php include("conn/conn.php"); $furl=getenv("http_referer");
   $id=$_GET['id'];
   $query="delete from tb_zqlb where id='$id'";
   $result=mysql_query($query);
   if($result){
      echo "<font color=\"#ff0000\">ɾ���ɹ�!!</font>";
      echo "<script>history.back();</script>"; }
?>
