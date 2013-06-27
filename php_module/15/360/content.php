<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>打印指定框架中的内容</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<table width="646" border="1" align="center" cellspacing="0" bordercolorlight="#FC8002" bordercolordark="#FFFFFF" bgcolor="#FFFFFF">
  <tr align="center" bgcolor="#FDA02F">
    <td width="154" height="30">客户名称</td>
    <td width="81">电话</td>
    <td width="56" >联系人</td>
    <td width="86">联系人电话</td>
    <td width="161">E-mail</td>
    <td width="82">所在地区</td>
  </tr>
  <?php
	 $sql=mysql_query("select * from tb_user");
	 $info=mysql_fetch_array($sql);
  do{?>
  <tr>
    <td height="30"><?php echo $info[username];?></td>
    <td><?php echo $info[tel];?></td>
    <td><?php echo $info[linker];?></td>
    <td><?php echo $info[linktel];?></td>
    <td><?php echo $info[email];?></td>
    <td><?php echo $info[address];?></td>
   </tr>
     <?php }while($info=mysql_fetch_array($sql))?>
 </table>
		</body>
</html>
