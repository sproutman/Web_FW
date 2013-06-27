<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线删除指定数据表中的索引</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function delconfirm(){
if(window.confirm('您确定删除该项吗?')==true){
  return true;
  }else{
  return false;}
}
</script>
<body>
<table width="456" height="347" border="0" cellpadding="00" cellspacing="00" background="images/bg.JPG">
  <tr>
    <td width="67" height="117">&nbsp;</td>
    <td width="337">&nbsp;</td>
    <td width="52">&nbsp;</td>
  </tr>
  <tr>
    <td height="150">&nbsp;</td>
    <td align="center" valign="top">
      
      <table width="300" border="0" cellpadding="0" cellspacing="0">
		 
	<?php 
         $result = mysql_list_tables ("db_drop");
         $i = 0;
         while ($i < mysql_num_rows ($result)) {
         $tb_names = mysql_tablename ($result, $i);  
     ?> 
	  <form name="form" method="post" action="index_ok.php" onSubmit="return delconfirm(); ">
        <tr>
          <td width="100" height="25" align="left">
		  <select name="indexs">
		  <?php $index=mysql_query("show index from $tb_names");
		  echo mysql_error();
		  		  while($myrow_index=mysql_fetch_array($index)){
		  ?>
		    <option value="<?php echo $myrow_index[Key_name];?>"><?php echo $myrow_index[Key_name];?></option>
		<?php }?>	
		    </select>
		  	  </td>
          <td width="140" align="center"><input name="name" type="text"  value="<?php echo $tb_names;?>" id="name" size="15"></td>
          <td width="60" align="left"><input type="submit" name="Submit" value="删除索引"></td>
        </tr>	
        </form> 
		  <?php  $i++; }?>	
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
