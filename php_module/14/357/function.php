<?php  session_start();include("conn/conn.php");
	         $query=mysql_query("select * from tb_data where id=1");
	         $myrow=mysql_fetch_array($query);
		     $product_count1=$myrow[product_count];	
	 
	         $query=mysql_query("select * from tb_data where id=2");
	         $myrow2=mysql_fetch_array($query);
			 $product_count2=$myrow2[product_count];
	
	         $query=mysql_query("select * from tb_data where id=3");
	         $myrow3=mysql_fetch_array($query);
			 $product_count3=$myrow3[product_count];
	
	
	         $query=mysql_query("select * from tb_data where id=4");
	         $myrow4=mysql_fetch_array($query);
			 $product_count4=$myrow4[product_count];
	
	         $query=mysql_query("select * from tb_data where id=5");
	         $myrow5=mysql_fetch_array($query);
			 $product_count5=$myrow5[product_count];
			 
	 $product_counts=$product_count1+$product_count2+$product_count3+$product_count4+$product_count5;

	  $product_counts1=number_format($product_counts1=$product_count1/$product_counts,2)*100;
	  $product_counts2=number_format($product_counts2=$product_count2/$product_counts,2)*100;
	  $product_counts3=number_format($product_counts3=$product_count3/$product_counts,2)*100;
	  $product_counts4=number_format($product_counts4=$product_count4/$product_counts,2)*100;
	  $product_counts5=number_format($product_counts5=$product_count5/$product_counts,2)*100;
?>