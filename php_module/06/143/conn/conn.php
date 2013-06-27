<?php 
     $id=mysqli_connect("localhost","root","root","db_database06");
     if(!$id){
	     echo "连接数据库失败!!"; 
         echo mysqli_connect_error();
         exit(); }
      mysqli_query($id,"set names gb2312");
?>
