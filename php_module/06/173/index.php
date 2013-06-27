<?php 
 //连接SQL server数据库
	$conn=mssql_connect("localhost","sa","");        //服务器名称,用户名,密码
	mssql_select_db("db_database06",$conn);             //连接table_book数据库
    //连接mysql数据库
	$id=mysql_connect("localhost","root","root");    //本地服务器localhost,用户名root,密码root
	mysql_select_db("db_database06",$id);  
	mysql_query("set names gb2312");              //连接shop_book数据库
	//从SQL server数据库中查询数据表book的所有内容
?>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 13px; font-weight: bold; }
.STYLE3 {font-size: 12px}
-->
</style>
<title>SQL Server数据导入到MySQL数据库</title>
<form name="form2" method="post" action="index.php">
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#B4EEF1">
  <tr>
    <td width="121" height="25" align="right" class="STYLE1"><span class="STYLE1">请选择数据表</span></td>
    <td width="186" align="center" class="STYLE1"><input name="db_database" type="text" id="db_database"></td>
    <td width="135" class="STYLE1"><input type="submit" name="Submit" value="导出"></td>
  </tr>
</table>

</form>

<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#B4EEF1">
  <tr>
    <td height="25" colspan="3" align="center" class="STYLE2">导出SQLserver数据表的内容</td>
  </tr>
  <tr>
    <td align="center">name</td>
    <td align="center">author</td>
    <td height="23" align="center">bookconcern</td>
  </tr>
 <?php if($Submit==true){
    $ms_query=mssql_query("select * from $db_database",$conn);   
	while($msrow=mssql_fetch_array($ms_query)){
	$name=$msrow[name];                              //为输出的内容设置一个变量
	$author=$msrow[author];
	$bookconcern=$msrow[bookconcern];
	?>
	<form name="form1" method="post" action="index.php">
  <tr>
    <td align="center">
    <input name="name" type="text" id="name" value="<?php echo $name;?>" size="15"></td>
    <td align="center">
    <input name="author" type="text" id="author" value="<?php echo $author;?>" size="15"></td>
    <td height="21" align="center">
      <input name="bookconcern" type="text" id="bookconcern" value="<?php echo $bookconcern;?>" size="15"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><input type="submit" name="Submit2" value="导入"></td>
    <td>&nbsp;</td>
  </tr></form>
  <?php }}?>
</table>
<p>
  <?php
   
	if($Submit2==true){
	$query=mysql_query("insert into tb_book(name,author,bookconcern)
values('$name','$author','$bookconcern')",$id); 		
	}	
	if($query==true){
	echo "导入成功!!";
	}else{echo "导入失败!!";}
?>
</p>
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#D2FDED">
  <tr>
    <td height="25" colspan="3" align="center" class="STYLE2">成功导入的数据</td>
  </tr>
  <tr>
    <td width="195" align="center"><span class="STYLE3">name</span></td>
    <td width="115" height="23" align="center"><span class="STYLE3">author</span></td>
    <td width="132" align="center"><span class="STYLE3">bookconcern</span></td>
  </tr>
  <?php 
  $query=mysql_query("select * from tb_book");
  if($query==true){
  while($myrow=mysql_fetch_array($query)){  
  ?>
  <tr>
    <td align="center" class="STYLE3"><?php echo $myrow[name];?></td>
    <td align="center" class="STYLE3"><?php echo $myrow[author];?></td>
    <td height="21" align="center" class="STYLE3"><?php echo $myrow[bookconcern];?></td>
  </tr>
  <?php }}?>
</table>
