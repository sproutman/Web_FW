<?php         
	include "conn/conn.php";
    $sql="delete from tb_tpsc where id=".$pic_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('��ͼƬ�ѱ��ɹ�ɾ��!');window.location='query_pic.php';</script>";
	}
	else{	
		echo "<script>alert('ͼƬɾ������ʧ��!');window.location='query_pic.php';</script>";
	}	
?> 



