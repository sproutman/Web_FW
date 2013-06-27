<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="<?php echo $PHP_SELF;?>">
  <tr>
    <td colspan="2" bgcolor="#3399FF"><div align="center">求字符串的长度</div></td>
  </tr>
  <tr>
    <td width="77">字符串：</td>
    <td width="123">&nbsp;<input type="text" name="str" size="10"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" value="求长度"></div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#3399FF"><div align="center"></div></td>
  </tr>
  </form>
</table>
<br><br>
<?php
if($_POST[str]!="")
 {
  $str=$_POST[str];
  echo  "<div align=center>字符串 '".$str."' 的长度是 ".strlen($str)."</div>";
}
?>