<form name="form1" method="post" action="<?php $PHP_SELF?>">
<input type="text" size="20" name="str"><br>
<input type="submit" name="submit1" value="转换为大写">&nbsp;
<input type="submit" name="submit2" value="转换为小写">
</form>
<?php
if($_POST[submit1]!="")
 {
  $str=$_POST[str];
  echo $str."全部转换为大写字母为".strtoupper($_POST[str]);
 }
if($_POST[submit2]!="")
 {
  $str=$_POST[str];
  echo $str."全部转换为写字母为".strtolower($_POST[str]);
 }


?>