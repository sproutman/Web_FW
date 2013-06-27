
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>常用搜索</title>
</head>
<body>
  <table width="777" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FFCC">
	<tr>
      <td width="777" height="182" background="images/images_01.gif">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#FFFFFF"><table width="650" border="0" cellpadding="0" cellspacing="0">
        <?php
		include "conn/conn.php";
		$resume1=$_GET[resume];
		$sql=mysql_query("select * from tb_books where resume='$resume1' order by id desc");
		$info=mysql_fetch_array($sql);
		if($info){
		do{
		?>
        <tr>
          <td width="636" height="23"><font color="#CC0033">◎&nbsp;&nbsp;<?php echo $info[bookname];?></font></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $info[synopsis];?></td>
        </tr>
        <?php }while($info=mysql_fetch_array($sql));
		  }else{
		  ?>
        <tr>
          <td>暂无该类图书信息！</td>
        </tr>
        <?php
		  }
		  ?>
      </table></td>
    </tr>
  </table>
</body>
</html>
