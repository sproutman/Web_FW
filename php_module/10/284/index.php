<?php
$small="hello word";
$big="HELLO WORD";
$small=substr($small,0,1);
$big=substr($big,0,1);
echo "hello word首字母变大写的结果：";
echo chr(ord($small)-32);
echo "<br>";
echo "HELLO WORD首字母变小写的结果：";
echo chr(ord($big)+32);
?> 