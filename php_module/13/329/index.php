<?php
session_start();
session_register("count_id");
 $countfile="./count.txt";
 if(!file_exists($countfile))
	{
	  exec("echo 0 > $countfile");
	}
  $fp=fopen($countfile,"rw");
  $num=fgets($fp,10);
  if($_SESSION["count_id"]=="")
	{
	  $num+=1;
	  $count_id="count_id";
    }

?>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 16px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
<div align="center">
  <p class="STYLE1">网站计数器</p>
  <p>

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
exec("rm -rf $countfile");
exec("echo $num > $countfile"); 
?>
    位访客 </p>
</div>
