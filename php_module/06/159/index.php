<?php include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>清空指定数据表中的所有数据</title>
<style type="text/css">
<!--
.STYLE2 {font-size: 13px}
.STYLE3 {font-size: 12px}
-->
</style>
</head>
<script language="javascript" type="text/javascript">
function deletes(){
  if (window.confirm('确定要删除该记录??')==true){
  return true;
  }else{ return false;}
}
</script>
<body>
<form action="index.php" method="post" name="form1" id="form1">
<table width="614" height="90" border="0" cellpadding="0" cellspacing="0" background="images/bg01.jpg">
  <tr>
    <td width="20" height="53">&nbsp;</td>
    <td width="219">&nbsp;</td>
    <td width="355">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td align="right"><select name="select">
	<?php 
         $result = mysql_list_tables ("db_database06");
         $i = 0;
         while ($i < mysql_num_rows ($result)) {
         $tb_names = mysql_tablename ($result, $i);  
     ?>  
       <option value="<?php echo $tb_names;?>"><?php echo $tb_names;?></option>
	<?php  $i++; }?>	 
    </select>&nbsp;</td>
    <td><input type="submit" name="Submit2" value="提交" /></td>
    <td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="5">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="614" height="25" border="0" cellpadding="0" cellspacing="0" background="images/bg03.jpg">
  <tr>
    <td width="20">&nbsp;</td>
    <td width="569"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/bg2.jpg">
  <?php 
  if($Submit2=="提交"){
  $query1=mysql_query("select * from $select");
  $query2=mysql_query("select * from $select");   
  $myrow=mysql_fetch_row($query2);?>
   <tr>
<?php for($i=0;$i<count($myrow);$i++){?>
      <td align="center"><span class="STYLE2">&nbsp;<?php echo mysql_field_name($query2,$i);?></span></td>
<?php } ?>	  
    </tr> 
<?php 	while($myrow=mysql_fetch_row($query1)){    ?>  
    <tr>
<?php for($i=0;$i<count($myrow);$i++){?>
      <td align="center"><span class="STYLE3">&nbsp;<?php echo $myrow[$i];?></span></td>
<?php } ?>	  
    </tr>
<?php  } } ?>
</table></td>
    <td width="20">&nbsp;</td>
  </tr>
</table>
</form>
<form action="index_ok.php?lmbs=<?php echo $select;?>" method="post" name="form2" id="form2" onSubmit="return deletes();">
<table width="614" height="28" border="0" cellpadding="0" cellspacing="0" background="images/bg04.jpg">
  <tr>
    <td align="center"><input type="submit" name="Submit" value="删除数据"></td>
  </tr>
</table>
</form>
</body>
</html>
