<?php session_start(); include("conn/conn.php");
     if($lmbs==true){
        $sid=$_POST[sid];
        $query=mysql_query("update tb_insert set name='$name',number='$number',tel='$tel',address='$address' where id='$lmbs'");
        if($query==true){ echo "<script>alert('员工资料更新成功!!');window.location.href='index.php';</script>";
        }else{echo "更新失败!!";}
}
?>