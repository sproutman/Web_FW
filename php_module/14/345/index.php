<?php
		$im=imagecreatefromgif("images/bg.gif");
        $black = imagecolorallocate($im,0,0,0);       //ÉèÖÃÑÕÉ«Öµ

        imageline($im,16,20,16,232, $black );        //ÉèÖÃYÖá×Ý×ø±ê
        imageline($im,16,232,385,232, $black );     //ÉèÖÃXÖá×Ý×ø±ê
        imagestring($im,3,14,5,"Y",$black);         //Êä³ö×Ö·ûY
        imagestring($im,3,388,222,"X",$black);     //Êä³ö×Ö·ûX
		
        imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //ÊÍ·ÅÍ¼Ïñ×ÊÔ´
?>

