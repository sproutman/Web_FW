<?php include("conn/conn.php"); if ($page=="") {$page=1;};if ($ljjl=="") {$ljjl=0;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѯ����ķ�ҳ��ʾ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE2 {font-size: 13px}
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
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#4DB1FD">
  <tr>
    <td width="100" height="25" align="center" class="STYLE2">����</td>
    <td width="100" align="center" class="STYLE2">���</td>
    <td width="125" align="center" class="STYLE2">�绰</td>
    <td width="175" align="center" class="STYLE2">��ַ</td>
  </tr>
  <?php 
   if($page){
    $page_size=2;          //ÿҳ��ʾ2����¼
    $query="select count(*) as total from tb_insert where id";  //�����ݿ��ж�ȡ����
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //��ȡ�ܵļ�¼��
    $page_count=ceil($message_count/$page_size);	 //��ȡ�ܵ�ҳ��
    $offset=($page-1)*$page_size;			 
    $query="select * from tb_insert where id order by id desc limit $offset, $page_size";			
	$result=mysql_query($query);
	while ($myrow=@mysql_fetch_array($result)){
	?>
  <tr>
    <td height="25" align="center"><span class="STYLE2"><?php echo $myrow[name];?></span></td>
    <td align="center"><span class="STYLE2"><?php echo $myrow[number];?></span></td>
    <td align="center"><span class="STYLE2"><?php echo $myrow[tel];?></span></td>
    <td align="center"><span class="STYLE2"><?php echo $myrow[address];?></span></td>
  </tr>
  <?php }}?>
</table>
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#4DB1FD">
  <tr> 
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> ��&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> ��ҳ�� 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?page=".$page_count.">βҳ</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
</body>
</html>
