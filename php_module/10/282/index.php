<?php
$string="mingrisoft";
$key="1234567890";
$result1=$string^$key;
$result2=$result1^$key;
echo "加密结果:".$result1;
echo "<br>";
echo "解密结果:".$result2;
?>