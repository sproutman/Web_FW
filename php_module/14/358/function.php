<?php  session_start();include("conn/conn.php");
	         $query=mysql_query("select * from tb_department where id=1");
	         $myrow=mysql_fetch_array($query);
		     $department_count1=$myrow[department_count];	
	 
	         $query=mysql_query("select * from tb_department where id=2");
	         $myrow2=mysql_fetch_array($query);
			 $department_count2=$myrow2[department_count];
	
	         $query=mysql_query("select * from tb_department where id=3");
	         $myrow3=mysql_fetch_array($query);
			 $department_count3=$myrow3[department_count];
	
	
	         $query=mysql_query("select * from tb_department where id=4");
	         $myrow4=mysql_fetch_array($query);
			 $department_count4=$myrow4[department_count];
	
	 $department_counts=$department_count1+$department_count2+$department_count3+$department_count4;

	  $department_counts1=number_format($department_counts1=$department_count1/$department_counts,2)*100;
	  $department_counts2=number_format($department_counts2=$department_count2/$department_counts,2)*100;
	  $department_counts3=number_format($department_counts3=$department_count3/$department_counts,2)*100;
	  $department_counts4=number_format($department_counts4=$department_count4/$department_counts,2)*100;
?>