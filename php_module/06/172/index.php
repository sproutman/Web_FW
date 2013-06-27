<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>MySQL数据库自身的导入导出</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 14px;
	font-weight: bold;
}
.STYLE2 {font-size: 13px}
-->
</style>
</head>
<body>
<table width="480" border="0" cellpadding="0" cellspacing="0" bgcolor="#81DDED">
  <tr>
    <td height="25" colspan="7" align="center"><span class="STYLE1">MySQL数据库自身的导入导出</span></td>
  </tr>
  <tr>
    <td width="70" align="center">id</td>
    <td width="70" height="22" align="center"><span class="STYLE2">学号</span></td>
    <td width="70" height="22" align="center"><span class="STYLE2">姓名</span></td>
    <td width="70" height="22" align="center"><span class="STYLE2">班级</span></td>
    <td width="80" height="22" align="center"><span class="STYLE2">科目</span></td>
    <td width="80" height="22" align="center"><span class="STYLE2">成绩</span></td>
    <td width="60">&nbsp;</td>
  </tr>
  <form name="form1" method="post" action="index_ok.php">
  <?php include("conn/conn.php");
         $query=mysql_query("select * from tb_access");
         if($query==true){
         $k=0;
         while($myrow=mysql_fetch_row($query)){
   ?>
  <tr>
  <?php 
	$j=0;
	for($i=0;$i<count($myrow);$i++){
   ?>	
      <td height="21" align="center" class="STYLE2"><input name="<?php echo $k."@".$j;?>" type="text" value="<?php echo $myrow[$i];?>" size="8"></td>
   <?php  $j++; }  ?>	  
  </tr>
    <?php  $k++; } }?>
  <tr>
    <td height="25" colspan="4" align="right" valign="top" class="STYLE2">数据表名
      <input name="table_name" type="text" id="table_name" size="15" value="tb_access"></td>
    <td colspan="3" valign="top" class="STYLE2">&nbsp;&nbsp;&nbsp;
      <input type="submit" name="Submit" value="导入"></td>
    </tr>	
	</form>  
</table>

<form name="form2" method="post" action="index_ok1.php">
<table width="480" height="195" border="0" cellpadding="0" cellspacing="0" bgcolor="#C1E3EA">
  <tr>
    <td height="25" align="center" class="STYLE1">创建一个数据表</td>
  </tr>
  <tr>
    <td height="145" align="center" valign="middle"><p>
      <textarea name="table" cols="55" rows="10" id="table">
   
  CREATE TABLE `tb_access` (
  `id` int(11) NOT NULL auto_increment,
  `sno` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sclass` varchar(30) NOT NULL,
  `sscore` int(11) NOT NULL,
  `ssubject` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;
      </textarea>
      </p>
     </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle"><span class="STYLE2">输入创建表的名称:
        <input name="table_name2" type="text" id="table_name2" size="20" value="tb_access">
        <input type="submit" name="Submit2" value="提交">
    </span></td>
  </tr>
</table>
</form>
</body>
</html>
