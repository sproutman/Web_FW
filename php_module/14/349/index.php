<?php 
		include("conn/conn.php");
		$query=mysql_query("select sum(sl) as total from tb_mrbook  group by resume order by total desc limit 1");
	   	$result=mysql_fetch_array($query);
		$max=$result[total];   //取出图书销量的最大值

		$sql=mysql_query("select resume,sum(sl) as l_total from tb_mrbook group by resume");
        $info=mysql_fetch_array($sql);     //检索图书信息
		
		$im = imagecreate(550,260);     //创建画布 
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

		
		
		 
        $x = 80;
        $y = 230;
        $x_width = 20;
        $y_ht = 0;
		
        do{
		  $fnt="c:/windows/fonts/simhei.ttf";      //定义字体
		  $y_ht1 =230-floor((200/$big)*$info[l_total]);      //输出商品的坐标点
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y_ht1,$red);     //绘制并填充柱形图
		  imageTTFText($im,8,0,$x+2,$y+15,$black,$fnt,$info[resume]);      //写TTF文字到图中
		  imageTTFText($im,8,0,$x+2,$y+25,$black,$fnt,$info[l_total]);      //写TTF文字到图中
          $x +=($x_width+100);      //设置两柱形图之间的宽度为100像素;
	 }while($info=mysql_fetch_array($sql));
	 
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //释放图像资源
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4pt;>『&nbsp;2007年图书销售数据图表分析&nbsp;』</font>";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>将汇总数据利用图表分析</title>
</head>
<body>
</body>
</html>
