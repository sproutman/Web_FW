<?php
$str1=$_POST[str1];
$str2=$_POST[str2];
$array=explode($str2,$str1);
echo "���ַ����ָ���Ϊ��"."<br>";
while(list($name,$value)=each($array))
 {
  echo $value."<br>";
 }

?>
