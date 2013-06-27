<?php session_start();include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/style.css">
<title>具有版主回复的留言本</title>
</head>

<body>
<table width="805" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="157"><img src="images/images_01.gif" width="805" height="157" border="0" usemap="#Map"></td>
  </tr>
  <tr>
    <td height="34" background="images/images_02.gif">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top" background="images/images_03.gif"><br>
	 <table width="688" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#65C7EF">
	  <tr align="center" bgcolor="#69C7EF">
        <td width="114" height="22">留言人</td>
        <td width="399">主题</td>
        <td width="157">发布时间 </td>
      </tr>
	<?php
	$sql=mysql_query("select * from tb_leaveword order by createtime desc");
	$info=mysql_fetch_array($sql);
	if($info){	
	do{
	?>
	  <tr bgcolor="#F9FCE9">
        <td height="24">&nbsp;&nbsp;<?php echo $info[author];?></td>
        <td align="left">&nbsp;&nbsp;<a href="info.php?id=<?php echo $info[id];?>"><?php echo $info[topic];?></a></td>
        <td align="center"><?php echo $info[createtime];?></td>
	    </tr>
		<?php 
			$query=mysql_query("select * from tb_relapse  where id='$info[id]'order by createtime desc");
			$result=mysql_fetch_array($query);
   		do{
		?>
      <tr bgcolor="#EFEFEF">
        <td height="24">&nbsp;版主&nbsp;<font color="#CC0033"><?php echo $_SESSION[username];?></font>&nbsp;回复：&nbsp;</td>
        <td align="left">&nbsp;&nbsp;<a href="bzinfo.php?topic=<?php echo $result[topic];?>"><?php echo $result[topic];?></a></td>
        <td align="center"><?php echo $result[createtime];?></td>
      </tr>
	  <?php 
	  	  }while($result=mysql_fetch_array($query));
	  ?>
	  <?php
	  }while($info=mysql_fetch_array($sql));
	  }else{
	  ?>
	  <tr bgcolor="#F9FCE9">
	  <td colspan="3"><?php echo "暂无留言信息！";?></td>
	  </tr>
	 <?php
	  }
	 ?>
    </table>
    <br></td>
  </tr>
  <tr>
    <td height="22" background="images/images_05.gif">&nbsp;</td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="493,130,553,152" href="leaveword.php">
  <area shape="rect" coords="560,130,610,151" href="regedit.php">
  <area shape="rect" coords="616,130,661,152" href="login.php">
  <area shape="rect" coords="669,130,718,151" href="index.php">
  <area shape="rect" coords="726,130,777,153" href="safe.php">
</map>
</body>
</html>
