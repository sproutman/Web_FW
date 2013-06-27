<?php 
		include("conn/conn.php");
		$query=mysql_query("select max(market) as total from tb_book");
        $info=mysql_fetch_array($query);
		$max=$info[total];   //取出图书销量的最大值

		$sql=mysql_query("select * from tb_book where date='2006'");
        $result_2006=mysql_fetch_array($sql);     //检索2006年图书信息
		
		$sql1=mysql_query("select * from tb_book where date='2007'");
        $result_2007=mysql_fetch_array($sql1);     //检索2007图书信息

		$im = imagecreate(550,350);     //创建画布 
        $green = imagecolorallocate($im,214,235,214);    //设置颜色值
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,30,230,530,230, $blue );    //设置X轴横坐标
		imageline($im,30,5,30,230, $blue );       //设置Y轴纵坐标
        imagestring($im,3,535,222,"X",$black);    //输出字符X
		imagestring($im,3,16,1,"Y",$black);       //输出字符Y
		       
		$l=190;
		$k1=30;
		$k2=530; 
	    for($j=0;$j<5;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //设置X轴网格线横坐标
		   $l=$l-40;		
		}

		$f=150; 
		$z1=20;
		$z2=228;
	    for($j=0;$j<4;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //设置Y轴网格线纵坐标
		   $f=$f+120;	
		 }	
		 
		 
		 
	     $len=strlen($max);
		 $str="1";
		 for($z=1;$z<$len;$z++){
		 $str=$str."0";
		 }

		//输出Y轴坐标值
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
		if($result_2006[season]=="第一季度"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE4).chr(0xB8).chr(0x80).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6);     //定义输出字体串
		}
		if($result_2006[season]=="第二季度"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE4).chr(0xBA).chr(0x8C).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6); 
		}
		if($result_2006[season]=="第三季度"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE4).chr(0xB8).chr(0x89).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6);
		}
		if($result_2006[season]=="第四季度"){
		    $comment=chr(0xE7).chr(0xAC).chr(0xAC).chr(0xE5).chr(0x9B).chr(0x9B).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6); 
		}

		  $fnt="c:/windows/fonts/simhei.ttf";      //定义字体
		  $y_ht1 =230-floor((200/$big)*$result_2006[market]);      //输出商品的坐标点
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y_ht1,$red);     //绘制并填充柱形图
		  imageTTFText($im,8,0,$x+2,$y+15,$black,$fnt,$comment);      //写TTF文字到图中
          imagestring($im,2,$x-1,$y+20,$result_2006[market],$red);      //设置图书销量所占百分比
          $x +=($x_width+100);      //设置两柱形图之间的宽度为100像素;

		  $y_ht2 =230-floor((200/$big)*$result_2007[market]);      //输出商品的坐标点
          imagefilledrectangle($im,$x_2007,$y_2007,$x_2007+$x_width2007,$y_ht2,$blue);     //绘制并填充柱形图
          imagestring($im,2,$x_2007-1,$y_2007+20,$result_2007[market],$blue);      //设置图书销量所占百分比
          $x_2007 +=($x_width2007+100);      //设置两柱形图之间的宽度为100像素;
		  $result_2007=mysql_fetch_array($sql1);
	 }while($result_2006=mysql_fetch_array($sql));
	 


		$year2006="2006".chr(0xE5).chr(0xB9).chr(0xB4).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6).chr(0xE9).chr(0x94).chr(0x80).chr(0xE5).chr(0x94).chr(0xAE).chr(0xE6).chr(0x95).chr(0xB0).chr(0xE6).chr(0x8D).chr(0xAE);
		$year2007="2007".chr(0xE5).chr(0xB9).chr(0xB4).chr(0xE5).chr(0xAD).chr(0xA3).chr(0xE5).chr(0xBA).chr(0xA6).chr(0xE9).chr(0x94).chr(0x80).chr(0xE5).chr(0x94).chr(0xAE).chr(0xE6).chr(0x95).chr(0xB0).chr(0xE6).chr(0x8D).chr(0xAE);
	    imagefilledrectangle($im,200,310,230,290,$red);      //绘制并填充柱形图
	    imagefilledrectangle($im,200,340,230,320,$blue);     //绘制并填充柱形图
		imageTTFText($im,10,0,240,305,$black,$fnt,$year2006);      //写TTF文字到图中
		imageTTFText($im,10,0,240,335,$black,$fnt,$year2007);      //写TTF文字到图中
		
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //释放图像资源
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4pt;>『&nbsp;PHP数据库系统开发完全手册&nbsp;』季度销售数据</font>";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>对比数据图表分析</title>
</head>
<body>
</body>
</html>
