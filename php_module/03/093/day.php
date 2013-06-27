<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>日期选择器</title>
<style type="text/css">
<!--
body {
	background-color: #826650;
}
-->
</style></head>
<script language="javascript">
function close_day()
{
  window.returnValue=document.form2.n1.value+"-"+document.form2.y1.value+"-"+document.form2.r1.value;
  window.close();
}


</script>

<body>
<br>
<table width="250" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="form2">
  <tr bgcolor="#826650">
    <td width="13"><div align="center"><a href="#" onClick="addday()"></a></div></td>
    <td width="80">
	<select name="n1">
	<?php
	 for($i=2005;$i<=2050;$i++)
	  {
	?>
      <option value=<?php echo $i;?>><?php echo $i;?></option>
	<?php
	  }
	?>  
    </select>
    年</td>
    <td width="64"><select name="y1">
	<?php
	 for($i=1;$i<=12;$i++)
	  {
	?>
      <option value=<?php echo $i;?>><?php echo $i;?></option>
	  <?php
	  }
	?> 
    </select>
    月</td>
    <td width="77"><select name="r1">
	<?php
	 for($i=1;$i<=31;$i++)
	  {
	?>
      <option value=<?php echo $i;?>><?php echo $i;?></option>
	 <?php
	  }
	?> 
    </select>
    日</td>
    <td width="16"><div align="center"><a href="#" onClick="subday()"></a></div></td>
  </tr>
  </form>
</table>
<table width="250" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#826650"><div align="center"><input type="button" onClick="close_day()" class="buttoncss" value="确定"></div></td>
  </tr>
</table>
</body>
</html>
