<?php
$str1=$_POST[str1];
$str2=$_POST[str2];
$array=explode($str2,$str1);
echo "该字符串分割结果为："."<br>";
while(list($name,$value)=each($array))
 {
  echo $value."<br>";
 }

?>
