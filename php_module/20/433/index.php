<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css/style.css">
<title>�����Է�������Ա�</title>
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
	 <table width="586" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#65C7EF">
	  <tr align="center" bgcolor="#69C7EF">
        <td width="578">�������</td>
      </tr>
	<?php
	$sql=mysql_query("select distinct resume from tb_leaveword order by createtime desc");
	$info=mysql_fetch_array($sql);
	if($info){	
	do{
	?>
	  <tr bgcolor="#F9FCE9">
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="default.php?resume=<?php echo $info[resume];?>"><?php echo $info[resume];?></a></td>
	    </tr>
	  <?php
	  }while($info=mysql_fetch_array($sql));
	  }else{
	  ?>
	  <tr bgcolor="#F9FCE9">
	  <td colspan="3"><?php echo "�������Է�����Ϣ��";?></td>
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
