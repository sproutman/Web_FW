<?php include("conn/conns.php");
  if($lmbs==true){
    $query=mysql_query("insert into tb_access (sno,sname,sclass,ssubject,sscore)values('$_POST[sno]','$_POST[sname]','$_POST[sclass]','$_POST[ssubject]','$_POST[sscore]')");
    if($query==true){
       echo "<script>alert('导入成功!!'); window.location.href='index.php';</script>";
  }}
  ?>