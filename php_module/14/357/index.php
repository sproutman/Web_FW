<?php session_start(); include_once("conn/conn.php"); include("function.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>饼形图分析软件图书市场占有率</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {
	font-size: 15px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="index_ok.php">
  <tr>
    <td height="30" colspan="5" align="center"><span class="STYLE2">饼形图分析软件图书市场占有率</span></td>
  </tr>
  
  <tr>
    <td width="90" height="25" align="center" class="STYLE1">产品名称:</td>
    <td width="90" align="left" class="STYLE1"><select name="select">
	<?php $query=mysql_query("select * from tb_data");
	       while($myrow=mysql_fetch_array($query)){
	?>
      <option value="<?php echo $myrow[id];?>"><?php echo $myrow[product_name];?></option>
	  <?php }?>
    </select>    </td>
    <td width="90" align="center" class="STYLE1">销量:</td>
    <td width="90" align="center" class="STYLE1">
	<input name="product_count" type="text" id="product_count" size="10">
	</td>
    <td width="90" align="center" class="STYLE1"><input type="submit" name="Submit" value="提交"></td>
  </tr>
  </form>
  <tr>
    <td colspan="5"><table width="100%" height="184" border="0">
      <tr>
        <td width="36%" height="180"><table width="100%" border="0">
            <?php 
	         $query=mysql_query("select * from tb_data where id=1");
	         $myrow=mysql_fetch_array($query);
		     $product_count1=$myrow[product_count];
		?>
            <tr>
              <td colspan="2" align="center" class="STYLE1">总的图书销量:<?php echo $product_counts;?>&nbsp;&nbsp;</td>
              </tr>
            <tr>
              <td width="65%" align="center" bgcolor="#97BD00"><span class="STYLE1"><?php echo $myrow[product_name];?></span></td>
              <td width="35%" align="center"><span class="STYLE1"><?php echo $product_counts1;?>%</span></td>
            </tr>
            <?php 
	         $query=mysql_query("select * from tb_data where id=2");
	         $myrow2=mysql_fetch_array($query);
			 $product_count2=$myrow2[product_count];
		?>
            <tr>
              <td width="65%" align="center" bgcolor="#009900"><span class="STYLE1"><?php echo $myrow2[product_name];?></span></td>
              <td width="35%" align="center"><span class="STYLE1"><?php echo $product_counts2;?>%</span></td>
            </tr>
            <?php 
	         $query=mysql_query("select * from tb_data where id=3");
	         $myrow3=mysql_fetch_array($query);
			 $product_count3=$myrow3[product_count];
		?>
            <tr>
              <td width="65%" align="center" bgcolor="#CC3300"><span class="STYLE1"><?php echo $myrow3[product_name];?></span></td>
              <td width="35%" align="center"><span class="STYLE1"><?php echo $product_counts3;?>%</span></td>
            </tr>
            <?php 
	         $query=mysql_query("select * from tb_data where id=4");
	         $myrow4=mysql_fetch_array($query);
			 $product_count4=$myrow4[product_count];
		?>
            <tr>
              <td width="65%" align="center" bgcolor="#FFCC00"><span class="STYLE1"><?php echo $myrow4[product_name];?></span></td>
              <td width="35%" align="center"><span class="STYLE1"><?php echo $product_counts4;?>%</span></td>
            </tr>
            <?php 
	         $query=mysql_query("select * from tb_data where id=5");
	         $myrow5=mysql_fetch_array($query);
			 $product_count5=$myrow5[product_count];
		?>
            <tr>
              <td width="65%" align="center" bgcolor="#3366CC"><span class="STYLE1"><?php echo $myrow5[product_name];?></span></td>
              <td width="35%" align="center"><span class="STYLE1"><?php echo $product_counts5;?>%</span></td>
            </tr>
        </table></td>
        <td width="64%"><img src="caky_img.php?lmbs=<?php echo $myrow[product_count];?>,<?php echo $myrow2[product_count];?>,<?php echo $myrow3[product_count];?>,<?php echo $myrow4[product_count];?>,<?php echo $myrow5[product_count];?>"/></td>
      </tr>
    </table></td>
  </tr>
  
</table>
</body>
</html>
