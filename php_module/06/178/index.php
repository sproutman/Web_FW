<?php session_start(); if ($page=="") {$page=1;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����ı��ķ�ҳ��ʾ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE2 {font-size: 13px}
-->
</style>
</head>
<body>
<table width="500" border="1" cellpadding="0" cellspacing="0" bgcolor="#9AFAFC">
  <tr>
    <td height="27" align="center"><strong>�����ı��ķ�ҳ��ʾ</strong></td>
  </tr>
  <tr>
    <td height="90" align="left" valign="middle"><span class="STYLE2">&nbsp;&nbsp;
<?php 
  if($page){
	 $fp=fopen("file/file.txt","r");
	 $counter=fgets($fp);
     $length=strlen($counter);
     $page_count=ceil($length/200);
     $fp=fopen("file/file.txt","r");
   include("function.php");
     $c=msubstr($counter,0,($page-1)*200);
     $c1=msubstr($counter,0,$page*200);
		echo substr($c1,strlen($c),strlen($c1)-strlen($c)); 
  }?>
    </span></td>
  </tr>
</table>
<table width="500" border="1" cellpadding="0" cellspacing="0" bgcolor="#9AFAFC">
  <tr>
    <td width="42%" align="center" valign="middle"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?> / <?php echo $page_count;?> ҳ </span></td>
    <td width="58%" height="28" align="left" valign="middle"><span class="STYLE1"> &nbsp;��ҳ��
             <?php
	  		  if($page!=1){   
				     echo  "<a href=index.php?page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count){
				        echo "<a href=index.php?page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?page=".$page_count.">βҳ</a>";				
				   }				   
			  ?>     
    </span> </td>
  </tr>
</table>
</body>
</html>
