<?php
$small="hello word";
$big="HELLO WORD";
$small=substr($small,0,1);
$big=substr($big,0,1);
echo "hello word����ĸ���д�Ľ����";
echo chr(ord($small)-32);
echo "<br>";
echo "HELLO WORD����ĸ��Сд�Ľ����";
echo chr(ord($big)+32);
?> 