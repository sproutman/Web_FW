<?php
		$im=imagecreatefromgif("images/bg.gif");
        $black = imagecolorallocate($im,0,0,0);       //������ɫֵ

        imageline($im,16,20,16,232, $black );        //����Y��������
        imageline($im,16,232,385,232, $black );     //����X��������
        imagestring($im,3,14,5,"Y",$black);         //����ַ�Y
        imagestring($im,3,388,222,"X",$black);     //����ַ�X
		
        imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
?>

