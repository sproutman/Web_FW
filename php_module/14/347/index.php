<object id="Wb" classid="ClSID:8856F961-340A-11D0-A96B-00C04Fd705A2" width="0" height="0">
</object>
<?php
        $data = array(46,52,88,130,99,89,78,46);
        $month= array("Java","JSP","ASP","NET","VB","PHP","VC","Delphi");

        $im = imagecreatefromgif("images/bg.gif"); 
        $black = imagecolorallocate($im,0,0,0);     //设置一个黑色的颜色值

        imageline($im,16,20,16,210, $black );        //设置Y轴纵坐标
        imageline($im,16,210,350,210, $black );     //设置X轴纵坐标
        imagestring($im,3,14,3,"Y",$black);         //输出字符Y
        imagestring($im,3,355,210,"X",$black);     //输出字符X
      
	    $x = 37;
        $y = 209;
        $x_width = 20;
        $y_ht = 0;
		
        for ($i=0;$i<8;$i++){
          imagestring($im,2,$x-1,$y+1,$month[$i],$black);      //设置语言与X轴之间的距离
          imagestring($im,2,$x-1,$y+15,$data[$i],$black);      //设置语言与数量之间的距离
          $x += ($x_width+20);       //设置语言与语言、数量与数量之间的宽度为20像素
        }

        imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //释放图像资源
		echo "<br>";
		echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' onClick='document.all.Wb.Execwb(6,1)'>打印</a>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' onClick='document.all.Wb.Execwb(7,1)'>打印预览</a>";
?>


