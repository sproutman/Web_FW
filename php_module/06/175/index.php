<?php include("conn/conn.php"); if ($page=="") {$page=1;};if ($ljjl=="") {$ljjl=0;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查询结果的分页显示</title>
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
    <td width="100" height="25" align="center" class="STYLE2">姓名</td>
    <td width="100" align="center" class="STYLE2">编号</td>
    <td width="125" align="center" class="STYLE2">电话</td>
    <td width="175" align="center" class="STYLE2">地址</td>
  </tr>
  <?php 
   if($page){
    $page_size=2;          //每页显示2条记录
    $query="select count(*) as total from tb_insert where id";  //从数据库中读取数据
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");  //获取总的记录数
    $page_count=ceil($message_count/$page_size);	 //获取总的页数
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
   <td width="45%" align="center"><span class="STYLE1">&nbsp;&nbsp;页次：<?php echo $page;?>
      / <?php echo $page_count;?> 页 记录：<?php echo $message_count;?> 条&nbsp; </span></td>
   <td width="55%" height="22" align="center"><span class="STYLE1"> 分页： 
      <?php
				  if($page!=1)
				   {
				     echo  "<a href=index.php?page=1>首页</a>&nbsp;";
					 echo "<a href=index.php?page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=index.php?page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=index.php?page=".$page_count.">尾页</a>";
				   }
				 
				?>	  
    </span></td>
  </tr>
</table>
</body>
</html>
