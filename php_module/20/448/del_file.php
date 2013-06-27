<?php         
	include "conn/conn.php";
    $sql="delete from tb_article where id=".$file_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('您的博客文章已被删除!');window.location='query.php';</script>";
	}
	else{	
		echo "<script>alert('博客文章删除操作失败!');window.location='query.php';</script>";
	}	
?> 



