<?php 
		include("conn/conn.php");
		$query=mysql_query("select sum(sl) as total from tb_mrbook  group by resume order by total desc limit 1");
	   	$result=mysql_fetch_array($query);
		$max=$result[total];   //ȡ��ͼ�����������ֵ

		$sql=mysql_query("select resume,sum(sl) as l_total from tb_mrbook group by resume");
        $info=mysql_fetch_array($sql);     //����ͼ����Ϣ
		
		$im = imagecreate(550,260);     //�������� 
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

		
		
		 
        $x = 80;
        $y = 230;
        $x_width = 20;
        $y_ht = 0;
		
        do{
		  $fnt="c:/windows/fonts/simhei.ttf";      //��������
		  $y_ht1 =230-floor((200/$big)*$info[l_total]);      //�����Ʒ�������
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y_ht1,$red);     //���Ʋ��������ͼ
		  imageTTFText($im,8,0,$x+2,$y+15,$black,$fnt,$info[resume]);      //дTTF���ֵ�ͼ��
		  imageTTFText($im,8,0,$x+2,$y+25,$black,$fnt,$info[l_total]);      //дTTF���ֵ�ͼ��
          $x +=($x_width+100);      //����������ͼ֮��Ŀ��Ϊ100����;
	 }while($info=mysql_fetch_array($sql));
	 
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4pt;>��&nbsp;2007��ͼ����������ͼ�����&nbsp;��</font>";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������������ͼ�����</title>
</head>
<body>
</body>
</html>
