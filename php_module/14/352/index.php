<?php 
		include("conn/conn.php");
		$query=mysql_query("select sum(ticket) as total from tb_comment");
        $info=mysql_fetch_array($query);
		$max =$info[total];     //����ͶƱ���ۼӺ�
		
		$sql=mysql_query("select * from tb_comment");
        $result=mysql_fetch_array($sql);     //����������Ϣ
		
		$im = imagecreate(350,280);     //�������� 
        $green = imagecolorallocate($im,214,235,214);    //������ɫֵ
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,30,230,290,230, $blue );    //����X�������
		imageline($im,30,5,30,230, $blue );       //����Y��������
        imagestring($im,3,295,222,"X",$black);    //����ַ�X
		imagestring($im,3,16,1,"Y",$black);       //����ַ�Y
		       
		$l=190;
		$k1=30;
		$k2=280; 
	    for($j=0;$j<5;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //����X�������ߺ�����
		   $l=$l-40;		
		}

		$f=80; 
		$z1=20;
		$z2=228;
	    for($j=0;$j<4;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //����Y��������������
		   $f=$f+50;	
		 }	
		
		//���Y������ֵ
		$l=185;
	    for($j=1;$j<6;$j++){
   	        imagestring($im,2,2,$l,20*$j."%",$red);
		    $l=$l-40;		
		 }	

        $x = 45;
        $y = 230;
        $x_width = 20;
        $y_ht = 0;
        do{
		if($result[comment]=="��"){
		    $comment=chr(0xE5).chr(0xA5).chr(0xBD);     //����������崮
		}
		if($result[comment]=="����"){
		    $comment=chr(0xE8).chr(0x89).chr(0xAF).chr(0xE5).chr(0xA5).chr(0xBD);
		}
		if($result[comment]=="һ��"){
		    $comment=chr(0xE4).chr(0xB8).chr(0x80).chr(0xE8).chr(0x88).chr(0xAC);
		}
		if($result[comment]=="��"){
		    $comment=chr(0xE5).chr(0xB7).chr(0xAE);     //����������崮
		}
		  $fnt="c:/windows/fonts/simhei.ttf";      //��������
          $y_ht = round(($result[ticket]/$max)*200,2);      //����ͶƱ�����ռ�ٷֱ�
		  $y_ht1 = round(($result[ticket]/$max)*100,2);      //����ͶƱ�����ռ�ٷֱ�
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y-$y_ht,$red);     //���Ʋ��������ͼ
		  imageTTFText($im,9,0,$x+2,$y+15,$black,$fnt,$comment);      //дTTF���ֵ�ͼ��
          imagestring( $im,2,$x-1,$y+20,$y_ht1."%",$black);      //����ͶƱ�����ռ�ٷֱ�
          $x +=($x_width+30);      //����������ͼ֮��Ŀ��Ϊ30����;
        }while($result=mysql_fetch_array($sql));
		
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;PHP���ݿ�ϵͳ������ȫ�ֲ�&nbsp;��ͶƱ���";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ͼ�����ͶƱ���</title>
</head>
<body>
</body>
</html>
