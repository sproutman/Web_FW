<?php         
	include "conn/conn.php";
    $sql="delete from tb_article where id=".$file_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('���Ĳ��������ѱ�ɾ��!');window.location='query.php';</script>";
	}
	else{	
		echo "<script>alert('��������ɾ������ʧ��!');window.location='query.php';</script>";
	}	
?> 



