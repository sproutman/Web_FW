<?php 
		include("conn/conn.php");
		$query=mysql_query("select max(market) as total from tb_book");
        $info=mysql_fetch_array($query);
		$max=$info[total];   //ȡ��ͼ�����������ֵ

		$sql=mysql_query("select * from tb_book where date='2006'");
        $result_2006=mysql_fetch_array($sql);     //����2006��ͼ����Ϣ
		
		$sql1=mysql_query("select * from tb_book where date='2007'");
        $result_2007=mysql_fetch_array($sql1);     //����2007ͼ����Ϣ

		$im = imagecreate(550,350);     //�������� 
        $green = imagecolorallocate($im,214,235,214);    //������ɫֵ
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,30,230,530,230, $blue );    //����X�������
		imageline($im,30,5,30,230, $blue );       //����Y��������
        imagestring($im,3,535,222,"X",$black);    //����ַ�X
		imagestring($im,3,16,1,"Y",$black);       //����ַ�Y
		       
		$l=190;
		$k1=30;
		$k2=530; 
	    for($j=0;$j<5;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //����X�������ߺ�����
		   $l=$l-40;		
		}

		$f=150; 
		$z1=20;
		$z2=228;
	    for($j=0;$j<4;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //����Y��������������
		   $f=$f+120;	
		 }	
		 
		 
		 
	     $len=strlen($max);
		 $str="1";
		 for($z=1;$z<$len;$z++){
		 $str=$str."0";
		 }

		//���Y������ֵ
		$l=185;
	    for($j=1;$j<6;$j++){
			$big=ceil(($max/$str))*$str;
   	        imagestring($im,2,2,$l,$j*$big/5,$red);
		    $l=$l-40;		
		 }	

		
		
		 
        $x = 60;
        $y = 230;
        $x_width = 20;
        $y_ht = 0;
		
        $x_2007 = 100;
        $y_2007= 230;
        $x_width2007 = 20;
        $y_ht2007 = 0;
        do{
		if($result_2006[season]=="��һ����"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE4).chr(0xB8).chr(0x80).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6);     //����������崮
		}
		if($result_2006[season]=="�ڶ�����"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE4).chr(0xBA).chr(0x8C).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6); 
		}
		if($result_2006[season]=="��������"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE4).chr(0xB8).chr(0x89).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6);
		}
		if($result_2006[season]=="���ļ���"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE5).chr(0x9B).chr(0x9B).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6); 
		}

		  $fnt="c:/windows/fonts/simhei.ttf";      //��������
		  $y_ht1 =230-floor((200/$big)*$result_2006[market]);      //�����Ʒ�������
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y_ht1,$red);     //���Ʋ��������ͼ
		  imageTTFText($im,8,0,$x+2,$y+15,$black,$fnt,$comment);      //дTTF���ֵ�ͼ��
          imagestring($im,2,$x-1,$y+20,$result_2006[market],$red);      //����ͼ��������ռ�ٷֱ�
          $x +=($x_width+100);      //����������ͼ֮��Ŀ��Ϊ100����;

		  $y_ht2 =230-floor((200/$big)*$result_2007[market]);      //�����Ʒ�������
          imagefilledrectangle($im,$x_2007,$y_2007,$x_2007+$x_width2007,$y_ht2,$blue);     //���Ʋ��������ͼ
          imagestring($im,2,$x_2007-1,$y_2007+20,$result_2007[market],$blue);      //����ͼ��������ռ�ٷֱ�
          $x_2007 +=($x_width2007+100);      //����������ͼ֮��Ŀ��Ϊ100����;
		  $result_2007=mysql_fetch_array($sql1);
	 }while($result_2006=mysql_fetch_array($sql));
	 


		$year2006="2006".chr(0xE5).chr(0xB9).chr(0xB4).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6).chr(0xE9).chr(0x94).chr(0x80).chr(0xE5).chr(0x94).chr(0xAE).chr(0xE6).chr(0x95).chr(0xB0).chr(0xE6).chr(0x8D).chr(0xAE);
		$year2007="2007".chr(0xE5).chr(0xB9).chr(0xB4).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6).chr(0xE9).chr(0x94).chr(0x80).chr(0xE5).chr(0x94).chr(0xAE).chr(0xE6).chr(0x95).chr(0xB0).chr(0xE6).chr(0x8D).chr(0xAE);
	    imagefilledrectangle($im,200,310,230,290,$red);      //���Ʋ��������ͼ
	    imagefilledrectangle($im,200,340,230,320,$blue);     //���Ʋ��������ͼ
		imageTTFText($im,10,0,240,305,$black,$fnt,$year2006);      //дTTF���ֵ�ͼ��
		imageTTFText($im,10,0,240,335,$black,$fnt,$year2007);      //дTTF���ֵ�ͼ��
		
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4pt;>��&nbsp;PHP���ݿ�ϵͳ������ȫ�ֲ�&nbsp;��������������</font>";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�Ա�����ͼ�����</title>
</head>
<body>
</body>
</html>
