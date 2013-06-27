<title>在下拉菜单中显示数组中的元素</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 12px}
-->
</style>
<table width="240" border="1" cellpadding="0" cellspacing="0" background="images/ddd.JPG">
  <tr>
    <td height="25" align="center"><span class="style1"> 在下拉菜单中显示数组中的元素 </span></td>
  </tr>
  <tr>
    <td height="100" align="center" valign="top"><span class="style2">
      <select name="select" size="1">
	    <?php
$string="ASP部门,PHP部门,JSP部门,.NET部门,DEL部门";
$srtings=split(",",$string);
$count=count($srtings);
for($i=0;$i<$count;$i++){
$result=$srtings[$i];
echo "<option>$result</option>";}
      
?>
      </select>
    </span></td>
  </tr>
</table>


