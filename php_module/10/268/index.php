<form name="form1" method="post" action="<?php $PHP_SELF?>">
<input type="text" size="20" name="str"><br>
<input type="submit" name="submit1" value="ת��Ϊ��д">&nbsp;
<input type="submit" name="submit2" value="ת��ΪСд">
</form>
<?php
if($_POST[submit1]!="")
 {
  $str=$_POST[str];
  echo $str."ȫ��ת��Ϊ��д��ĸΪ".strtoupper($_POST[str]);
 }
if($_POST[submit2]!="")
 {
  $str=$_POST[str];
  echo $str."ȫ��ת��Ϊд��ĸΪ".strtolower($_POST[str]);
 }


?>