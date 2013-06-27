<?php
echo "字符串转变为数字";
echo "<hr color=red>";
$str="123";
echo "转换前的类型为：".gettype($str);
echo "<br>";
$str=intval($str);
echo "转换后的类型为：".gettype($str);
echo "<br>";
echo "<hr color=red>";
echo "数字转变为字符串";
echo "<br>";
$str1=123;
echo "转换前的类型为：".gettype($str1);
echo "<br>";
$str1=strval($str1);
echo "转换后的类型为：".gettype($str1);
?>