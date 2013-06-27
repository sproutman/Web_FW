<?php
header("content-type:image/gif");       //定义输出为图像类型
$im=imagecreatefromgif("images/bg.gif");
$textcolor=imagecolorallocate($im,0,155,255);
$fnt="c:/windows/fonts/simhei.ttf";      //定义字体
$motto=chr(0xEF).chr(0xBB).chr(0xBF)."2007".chr(0xE5).chr(0xB9).chr(0xB4).chr(0xE5).chr(0x95).chr(0x86).chr(0xE5).chr(0x93).chr(0x81).chr(0xE9).chr(0x94).chr(0x80).chr(0xE5).chr(0x94).chr(0xAE).chr(0xE6).chr(0x95).chr(0xB0).chr(0xE9).chr(0x87).chr(0x8F).chr(0xE5).chr(0x9B).chr(0xBE).chr(0xE8).chr(0xA1).chr(0xA8).chr(0xE5).chr(0x88).chr(0x86).chr(0xE6).chr(0x9E).chr(0x90);     //定义输出字体串
imageTTFText($im,20,0,50,40,$textcolor,$fnt,$motto);      //写TTF文字到图中
imagegif($im);       //建立gif图形
imageDestroy($im);    //结束图形，释放内存空间
?>
