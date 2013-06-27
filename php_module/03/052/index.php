<?php include "Conn/conn.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet" type="text/css">
<html>
<style type="text/css">
<!--
.style7 {color: #FF6600}
.affiche{
color:#FF0000;}
-->
</style>
<head>
<title>滚动的文字</title>
</head>
<body>
<table width="625" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" background="images/images_01.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="189" align="center" background="images/images_02.gif">
	 <table width="600" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td>
     <marquee direction="up" height="150" onMouseOut="this.start()" onMouseOver="this.stop()" scrollamount=1 scrolldelay="10">
		 <table width="600" border="0" cellspacing="0" cellpadding="0">
           <?php
		$sql=mysql_query("select * from tb_affiche");
		$info=mysql_fetch_array($sql);
		if($info){
		do{
	?>
           <tr>
             <td width="39" height="24" align="center" class="affiche">·</td>
             <td width="561" class="affiche"><?php echo substr($info[title],0,120);?></td>
             </tr>
           <?php 
		  }while($info=mysql_fetch_array($sql));
		  }
		?>
         </table>	
		  </marquee>
		 </td>
       </tr>
     </table> 
	</td>
  </tr>
  <tr>
    <td height="27" background="images/images_03.gif">&nbsp;</td>
  </tr>
</table>
</body>
</html>