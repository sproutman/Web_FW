<?php 
		include("conn/conn.php");
		$query=mysql_query("select sum(ticket) as total from tb_comment");
        $info=mysql_fetch_array($query);
		$max =$info[total];     //所有投票的累加和
		
		$sql=mysql_query("select * from tb_comment");
        $result=mysql_fetch_array($sql);     //检索数据信息
		
		$im = imagecreate(350,280);     //创建画布 
        $green = imagecolorallocate($im,214,235,214);    //设置颜色值
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,30,230,290,230, $blue );    //设置X轴横坐标
		imageline($im,30,5,30,230, $blue );       //设置Y轴纵坐标
        imagestring($im,3,295,222,"X",$black);    //输出字符X
		imagestring($im,3,16,1,"Y",$black);       //输出字符Y
		       
		$l=190;
		$k1=30;
		$k2=280; 
	    for($j=0;$j<5;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //设置X轴网格线横坐标
		   $l=$l-40;		
		}

		$f=80; 
		$z1=20;
		$z2=228;
	    for($j=0;$j<4;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //设置Y轴网格线纵坐标
		   $f=$f+50;	
		 }	
		
		//输出Y轴坐标值
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
		if($result[comment]=="好"){
		    $comment=chr(0xE5).chr(0xA5).chr(0xBD);     //定义输出字体串
		}
		if($result[comment]=="良好"){
		    $comment=chr(0xE8).chr(0x89).chr(0xAF).chr(0xE5).chr(0xA5).chr(0xBD);
		}
		if($result[comment]=="一般"){
		    $comment=chr(0xE4).chr(0xB8).chr(0x80).chr(0xE8).chr(0x88).chr(0xAC);
		}
		if($result[comment]=="差"){
		    $comment=chr(0xE5).chr(0xB7).chr(0xAE);     //定义输出字体串
		}
		  $fnt="c:/windows/fonts/simhei.ttf";      //定义字体
          $y_ht = round(($result[ticket]/$max)*200,2);      //设置投票结果所占百分比
		  $y_ht1 = round(($result[ticket]/$max)*100,2);      //设置投票结果所占百分比
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y-$y_ht,$red);     //绘制并填充柱形图
		  imageTTFText($im,9,0,$x+2,$y+15,$black,$fnt,$comment);      //写TTF文字到图中
          imagestring( $im,2,$x-1,$y+20,$y_ht1."%",$black);      //设置投票结果所占百分比
          $x +=($x_width+30);      //设置两柱形图之间的宽度为30像素;
        }while($result=mysql_fetch_array($sql));
		
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //释放图像资源
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;『&nbsp;PHP数据库系统开发完全手册&nbsp;』投票结果";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>图表分析投票结果</title>
</head>
<body>
</body>
</html>
