<?php         
	include "conn/conn.php";
    $sql="delete from tb_tpsc where id=".$pic_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('¸ÃÍ¼Æ¬ÒÑ±»³É¹¦É¾³ý!');window.location='query_pic.php';</script>";
	}
	else{	
		echo "<script>alert('Í¼Æ¬É¾³ý²Ù×÷Ê§°Ü!');window.location='query_pic.php';</script>";
	}	
?> 



