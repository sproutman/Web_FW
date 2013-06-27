<?php session_start(); include("conn/conn.php");
if($Submit==true){
      $query=mysqli_query($id,"update tb_mysql set  username='$username',password='$password',address='$address'");
	  if($query==true){ 
	  echo "修改成功!!";
	  }else{
	  echo "修改失败!!";
	  }
}
?>