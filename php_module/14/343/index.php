<?php
header("content-type:image/gif");       //�������Ϊͼ������
$im=imagecreatefromgif("images/bg.gif");
$textcolor=imagecolorallocate($im,0,155,255);
$fnt="c:/windows/fonts/simhei.ttf";      //��������
$motto=chr(0xEF).chr(0xBB).chr(0xBF)."2007".chr(0xE5).chr(0xB9).chr(0xB4).chr(0xE5).chr(0x95).chr(0x86).chr(0xE5).chr(0x93).chr(0x81).chr(0xE9).chr(0x94).chr(0x80).chr(0xE5).chr(0x94).chr(0xAE).chr(0xE6).chr(0x95).chr(0xB0).chr(0xE9).chr(0x87).chr(0x8F).chr(0xE5).chr(0x9B).chr(0xBE).chr(0xE8).chr(0xA1).chr(0xA8).chr(0xE5).chr(0x88).chr(0x86).chr(0xE6).chr(0x9E).chr(0x90);     //����������崮
imageTTFText($im,20,0,50,40,$textcolor,$fnt,$motto);      //дTTF���ֵ�ͼ��
imagegif($im);       //����gifͼ��
imageDestroy($im);    //����ͼ�Σ��ͷ��ڴ�ռ�
?>
