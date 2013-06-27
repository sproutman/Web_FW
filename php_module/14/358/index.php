<?php session_start(); include_once("conn/conn.php"); include("function.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>多饼形图分析企业各类员工的比例</title>
<style type="text/css">
<!--
.STYLE3 {font-size: 14px; font-weight: bold; }
.STYLE4 {font-size: 13px; }
.STYLE5 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="450" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="35" colspan="5" align="center"><span class="STYLE3">多饼形图分析企业各类员工的比例</span></td>
  </tr>
  <form name="form1" method="post" action="index_ok.php">
  <tr>
    <td width="90" height="25" align="right" class="STYLE4">职务:</td>
    <td width="90" align="left" class="STYLE1"><span class="STYLE4">
      <select name="select">
        <?php $query=mysql_query("select * from tb_department");
	       while($myrow=mysql_fetch_array($query)){
	?>
        <option value="<?php echo $myrow[id];?>"><?php echo $myrow[department];?></option>
        <?php }?>
        </select>
    </span> </td>
    <td width="60" align="right" class="STYLE4">人数:</td>
    <td width="120" align="left" class="STYLE1">
	  <input name="department_count" type="text" id="department_count" size="10">	</td>
    <td width="90" align="left" class="STYLE1">
      <input name="Submit" type="submit" value="提交"></td>
  </tr>
  </form>
  <tr>
    <td height="196" colspan="5" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
	  <?php 
	         $query=mysql_query("select * from tb_department where id=1");
	         $myrow1=mysql_fetch_array($query);
			 $department_count1=$myrow1[department_count];
		 ?>		
        <td height="120" colspan="3" align="center" valign="middle"><img src="caky_img.php?lmbs=<?php echo $myrow1[department_count];?>,<?php echo $department_counts;?>"/></td>
        <td colspan="3" align="center" valign="middle"><img src="caky_img.php?lmbs=<?php echo $myrow2[department_count];?>,<?php echo $department_counts;?>"/></td>
      </tr>
      <tr>
		<td width="4%" height="25" align="center"><span class="STYLE5"></span></td>
        <td align="center" bgcolor="#97BD00"><span class="STYLE5"><?php echo $myrow1[department];?>：</span><span class="STYLE5"><?php echo $department_counts1?>%</span></td>
        <td width="5%" align="center"><span class="STYLE5"></span></td>
        <td width="4%">&nbsp;</td>
        <td align="center" bgcolor="#97BD00" class="STYLE5"><?php echo $myrow2[department];?>：<?php echo $department_counts2?>%</td>
        <td width="5%">&nbsp;</td>
      </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle"><img src="caky_img.php?lmbs=<?php echo $myrow3[department_count];?>,<?php echo $department_counts;?>"/></td>
        <td colspan="3" align="center" valign="middle"><img src="caky_img.php?lmbs=<?php echo $myrow4[department_count];?>,<?php echo $department_counts;?>"/></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25" align="center" bgcolor="#97BD00" class="STYLE5"><?php echo $myrow3[department];?>：<?php echo $department_counts3?>%</td>
        <td height="25">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center" bgcolor="#97BD00" class="STYLE5"><?php echo $myrow4[department];?>：<?php echo $department_counts4?>%</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
