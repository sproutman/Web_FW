<?php
        $data = array(46,52,88,130,99,89,78,46);
        $month= array("Java","JSP","ASP","NET","VB","PHP","VC","Delphi");

        $im = imagecreatefromgif("images/bg.gif"); 
        $black = imagecolorallocate($im,0,0,0);     //����һ����ɫ����ɫֵ

        imageline($im,16,20,16,210, $black );        //����Y��������
        imageline($im,16,210,350,210, $black );     //����X��������
        imagestring($im,3,14,3,"Y",$black);         //����ַ�Y
        imagestring($im,3,355,210,"X",$black);     //����ַ�X
      
	    $x = 37;
        $y = 209;
        $x_width = 20;
        $y_ht = 0;
		
        for ($i=0;$i<8;$i++){
          imagestring($im,2,$x-1,$y+1,$month[$i],$black);      //����������X��֮��ľ���
          imagestring($im,2,$x-1,$y+15,$data[$i],$black);      //��������������֮��ľ���
          $x += ($x_width+20);       //�������������ԡ�����������֮��Ŀ��Ϊ20����
        }

        imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
?>

