<?php include("conn/conn.php"); if ($page=="") {$page=1;};if ($ljjl=="") {$ljjl=0;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ҳ����ת��ָ��ҳ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>
<body>
<table width="500" border="1" cellpadding="0" cellspacing="0" bgcolor="#CEFFCE">
  <tr>
    <td width="100" height="25" align="center"><span class="STYLE1">����</span></td>
    <td width="100" align="center"><span class="STYLE1">���</span></td>
    <td width="125" align="center"><span class="STYLE1">�绰</span></td>
    <td width="175" align="center"><span class="STYLE1">��ַ</span></td>
  </tr>
  <?php 
   if($page){
    $page_size=1;
    $query="select count(*) as total from tb_insert where id";
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");
    $page_count=ceil($message_count/$page_size);	
    $offset=($page-1)*$page_size;			 
    $query="select * from tb_insert where id order by id desc limit $offset, $page_size";			
	$result=mysql_query($query);
	while ($myrow=mysql_fetch_array($result)){
	?>
  <tr>
    <td height="25" align="center" class="STYLE1"><?php echo $myrow[name];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow[number];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow[tel];?></td>
    <td align="center" class="STYLE1"><?php echo $myrow[address];?></td>
  </tr>
  <?php }}?>
</table>
<table width="500" border="1" cellpadding="0" cellspacing="0" bgcolor="#CEFFCE">
              <tr> 
                <td width="45%" height="22" align="center"><span class="STYLE2">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
                /<?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
                <td width="45%" align="center"><span class="STYLE2"> ��ҳ�� 
                <?php
       	        $xsoudh="id=$id";
				$next=$ljjl*10;
				$n=$ljjl-1;
				$m=$ljjl+1;	
                $prev_page=$page-10;						
					if ($ljjl==0){
                    echo "<img src=\"images/02.jpg\" width=\"8\" height=\"9\" title=\"��ҳ\">";					
					}else
					{
                     echo "<a href='$PATH_INFO?vv=0&ljjl=0&page=1&$xsoudh'><img src=\"images/02.jpg\" width=\"8\" height=\"9\" border=\"0\" title=\"��ҳ\"></a>&nbsp;";
					 $ccc=$vv-10;
                     echo "<a href='$PATH_INFO?vv=$ccc&ljjl=$n&page=$prev_page&$xsoudh'><img src=\"images/01.jpg\" width=\"8\" height=\"9\" title=\"��ʮҳ\"></a>";
					}?>
                <?php	
 		        for ($j=1;$j<=$page_count;$j++) {
				       $pnext=$next+$j;
				       if ($mm==10){
					       break;
					   }
						if ($mm>$page_count){
							break;
						}
						if ($page_count-$vv<10){
	  						if ($mm>=$page_count-$vv){
								break;
							}									
						}
						?>
                <?php
                        echo "<a href='$PATH_INFO?vv=$vv&ljjl=$ljjl&page=$pnext&$xsoudh'> $pnext </a>";											
              	        $mm=$mm+1;						
	     	     }
				 ?>			    
                </span></td>
				 <td width="10%" align="center">
                   <span class="STYLE2">
                   <?php
				$vv=$vv+$mm;
				       if ($page_count-$vv<=0){
	                       echo "<img src=\"images/03.jpg\" width=\"8\" height=\"9\" title=\"βҳ\">";					
					   }else{
	                       echo "<a href='$PATH_INFO?vv=$vv&ljjl=$m&page=$pnext&$xsoudh'><img src=\"images/03.jpg\" width=\"8\" height=\"9\" title=\"��ʮҳ\"></a>";														
					   }
                if ($message_count==0){
					     echo "û�м�¼!";
				}
?>
                  </span> </td>
              </tr>
</table>
</body>
</html>
