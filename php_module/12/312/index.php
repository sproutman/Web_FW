<?php  session_start();include "conn/conn.php";  if ($page=="") {$page=1;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>上传多图片到服务器并分页显示</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>
<body>
<table width="450" height="259" border="0" cellpadding="0" cellspacing="0" background="images/320.jpg">
  <tr>
    <td width="134" height="68">&nbsp;</td>
    <td width="204">&nbsp;</td>
    <td width="104">&nbsp;</td>
  </tr>
 <form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1">
  <tr>
    <td height="30">&nbsp;</td>
    <td><input name="file[]" type="file" size="18"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><input name="file[]" type="file" size="18"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><input name="file[]" type="file" size="18"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td align="center"><input name="Submit" type="submit" id="Submit" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
</form>
  <tr>
    <td height="60">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  <table width="450" border="0" cellspacing="0" cellpadding="0">        
		 <?php if ($page){
					    $page_size=4;
					    $query="select count(*) as total from tb_image2 where id";
						$result=mysql_query($query);
					    $message_count=@mysql_result($result,0,"total");
					    $page_count=ceil($message_count/$page_size);	
					    $offset=($page-1)*$page_size;			  
						for ($i=1; $i<=2; $i++) {
                         echo "<tr>";
				        ?>             
	 <?php if ($i==1) {
			  $query="select * from tb_image2 where id order by data desc limit $offset, $page_size";			
			  $result=mysql_query($query);}
						$j=1;					   
					    while ($myrow=mysql_fetch_array($result)){
			 if ($j<=2){  ?>
              <td height="150" colspan="2" align="center" valign="middle"> <table width="225" height="150" border="0" cellspacing="0">
                  <tr align="center" valign="middle"> 
                    <td width="225" height="125" align="center" valign="middle"><?php echo "<img src=\"$myrow[path]\" width=\"224\" height=\"120\">"?></td>
                  </tr>
                  <tr align="left" valign="top"> 
                    <td height="25" align="center" valign="middle">  <span class="style1"><?php echo $myrow[data];?></span>
                   </td>
                  </tr>
                </table></td>
              <?php  }
										++$j;
										if ($j==3){
										break;
										}}
                      echo "</tr>";	}
					?>
</table>
<table width="450" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="50%" class="style1">&nbsp;&nbsp;页次：<?php echo $page;?>
                  / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 
                  条&nbsp; </td>
                <td width="39%" class="style1"> 分页： 
                <?php			   
       	        $xsoudh="id=$id";
				$next=$ljjl*10;
				$n=$ljjl-1;
				$m=$ljjl+1;	
                $prev_page=$page-10;						
					if ($ljjl==0){ echo "";					
					}else{
                     echo "<a href='$PATH_INFO?vv=0&ljjl=0&page=1&$xsoudh'>首页</a>&nbsp;";
					 $ccc=$vv-10;
                     echo "<a href='$PATH_INFO?vv=$ccc&ljjl=$n&page=$prev_page&$xsoudh'>上十页</a>";
					}?>
                  <?php	
 		        for ($j=1;$j<=$page_count;$j++) {
				       $pnext=$next+$j;
				       if ($mm==10){  break; }
					   if ($mm>$page_count){ break;}
					   if ($page_count-$vv<10){
	  				   if ($mm>=$page_count-$vv){break;}									
					} ?>
                  <?php
                        echo "<a href='$PATH_INFO?vv=$vv&ljjl=$ljjl&page=$pnext&$xsoudh'> $pnext </a>";											
              	        $mm=$mm+1;						
	     	     }
				 ?>
			    </td>
				 <td width="11%" class="style1">
                  <?php  $vv=$vv+$mm;			   
				       if ($page_count-$vv<=0){ echo "";					
					   }else{
	                       echo "<a href='$PATH_INFO?vv=$vv&ljjl=$m&page=$pnext&$xsoudh'>下十页</a>";														
					   }
                if ($message_count==0){  echo "没有记录!";}
           }?>
                </td>
              </tr>
</table>
</body>
</html>

