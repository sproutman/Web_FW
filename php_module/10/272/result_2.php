<?php
$str1[0]=$_POST[str11];
$str1[1]=$_POST[str12];
$str1[2]=$_POST[str13];
$str2=$_POST[str2];
$str=implode($str2,$str1);
echo "该字符串合并结果为："."<br>";
echo $str;
?>
