<?php session_start();include("conn/conn.php"); if ($page=="") {$page=1;};if ($ljjl=="") {$ljjl=0;};?>
<title>分类、分栏和分页的综合应用</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
<table width="400" border="1" cellspacing="0" cellpadding="0">
	 <?php 
		 if($page){
			$page_size=8;
			$query="select count(*) as total from tb_picture where sort='1'";
			$result=mysql_query($query);
		    $message_count=mysql_result($result,0,"total");
			$page_count=ceil($message_count/$page_size);	
			$offset=($page-1)*$page_size;		
					    
		  $query="select * from tb_picture where sort='1' limit $offset, $page_size";			
		  $result=mysql_query($query);
		  $row=mysql_fetch_array($result);
		  if($row[sort]==1){
		  for($i=1; $i<=2; $i++) {
              echo "<tr>";	  
			if($i==1) {
			   $query="select * from tb_picture where sort='1' limit $offset, $page_size";			
			   $result=mysql_query($query); }
			$j=1;					   
			 while($myrow=mysql_fetch_array($result)){											
				  $id=$myrow[id];																		
				if ($j<=4){
		?>
        <td height="50" align="center" valign="top" class="STYLE1"> 
	<table width="50" border="0" cellspacing="0">
      <tr align="center" valign="middle"> 
         <td width="50" height="50" align="center" valign="middle" background="images/beijing.jpg"><?php echo $myrow[id];?><img src="image_1.php?recid=<?php echo $myrow[id];?>"></td>
       </tr>      
    </table></td>
        <?php  }
	        ++$j;
          if($j==5){  break;  }
			}							
		 echo "</tr>";	  }}	?>							
	    <?php	  
		    for($i=1; $i<=2; $i++) {
            echo "<tr>";
	     ?>
         <?php if($i==1){
				   $query="select * from tb_picture where sort='2' limit $offset, $page_size";			
				   $result=mysql_query($query);	}
			$j=1;									   
			while($myrow=mysql_fetch_array($result)){			    
				$id=$myrow[id];										
		     if($j<=4){																													
		?>
        <td height="50" align="center" valign="top" class="STYLE1"> <table width="50" border="0" cellspacing="0">
           <tr align="center" valign="middle"> 
              <td width="50" height="50" align="center" valign="middle" background="images/beijing.jpg"><?php echo $myrow[id];?><img src="image_1.php?recid=<?php echo $myrow[id];?>"></td>
            </tr>  </table></td>
              <?php  }
					++$j;			 
					if ($j==5){	break;	}	}		
				 echo "</tr>";	}		
			  ?>							
</table>
     <table width="400" border="1" cellspacing="0" cellpadding="0">
       <tr> 
         <td width="50%" height="22" class="hongse01 STYLE1">&nbsp;&nbsp;页次：<font class="huise01"><?php echo $page;?></font> 
                  / <font class="huise01"><?php echo $page_count;?> </font>页 记录：<font class="huise01"><?php echo $message_count;?> 
                  </font>条&nbsp; </td>
                <td width="39%" height="22" class="hongse01 STYLE1"> 分页： 
      <?php $xsoudh="id=$id";			
			 $next=$ljjl*10;
			 $n=$ljjl-1;
			 $m=$ljjl+1;	
			 $prev_page=$page-10; 						
		if ($ljjl==0){	
            echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" title=\"首页\">";					
		}else{
            echo "<a href='$PATH_INFO?vv=0&ljjl=0&page=1&$xsoudh'><img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"首页\"></a>&nbsp;";
		$ccc=$vv-10;	
            echo "<a href='$PATH_INFO?vv=$ccc&ljjl=$n&page=$prev_page&$xsoudh'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" title=\"上十页\"></a>";
		}?>
      <?php	 for($j=1;$j<=$page_count;$j++){
 		         $pnext=$next+$j;
				    if($mm==10){ break; }
				    if($mm>$page_count){ break; }
					if($page_count-$vv<10){     
					  if ($mm>=$page_count-$vv){ break; }	
    	}?>
	   <?php
             echo "<a href='$PATH_INFO?vv=$vv&ljjl=$ljjl&page=$pnext&$xsoudh'> $pnext </a>";											
            $mm=$mm+1;						
	  } ?> </td>
	 <td width="11%"> <span class="STYLE1">              
        <?php  $vv=$vv+$mm;
				if($page_count-$vv<=0){
				    echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" title=\"尾页\">";	
	             }else{
	                echo "<a href='$PATH_INFO?vv=$vv&ljjl=$m&page=$pnext&$xsoudh'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" title=\"下十页\"></a>";														
					   }
                if ($message_count==0){ echo "没有记录!"; }
          }?>					    
				</span></td></tr>
</table>
