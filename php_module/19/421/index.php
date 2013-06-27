<?php
session_start();
session_register("count_id");
 $countfile="./count.txt";
 $fp=fopen($countfile,"r");
  $num=fgets($fp,10);
  if($_SESSION["count_id"]=="")
	{  
	  $num+=1;
	  $_SESSION["count_id"]="count_id";
    }
?>
<style type="text/css">
<!--
.STYLE1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>

	<table width="400" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center" class="STYLE1">图形计数器</div></td>
  </tr>
</table>

	<div align="center">
	  您是本站的第
	<?php 
		 
      $imagenum=intval($num);
	 for($i=0;$i<8-strlen($imagenum);$i++)
	  {
	    echo "<img src=images/count/0.gif>";
	  }
	 for($i=0;$i<strlen($imagenum);$i++)
	  {
	     echo "<img src=images/count/".substr($imagenum,$i,1).".gif>"; 
	  }
	 $fp1=fopen($countfile,"w"); 
	 fputs($fp1,$num);
	  ?>位访客</div>
