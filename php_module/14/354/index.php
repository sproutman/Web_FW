<?php
    if ($_POST["submit"]!=""){
		echo "折线图表分析人口出生率";
		echo "<br>";
        $data = array($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["T4"],$_POST["T5"],$_POST["T6"],$_POST["T7"],$_POST["T8"],$_POST["T9"],$_POST["T10"],$_POST["T11"],$_POST["T12"]);
        $month= array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
		
		$max = 0;
        for ($i=0;$i<12;$i++){
          $max=$max+$data[$i];          //所有出生人口的累加和
        }
		
        $im = imagecreate(550,300);     //创建画布 
        $green = imagecolorallocate($im,214,235,214);    //设置颜色值
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,30,230,520,230, $blue );    //设置X轴横坐标
		imageline($im,30,5,30,230, $blue );       //设置Y轴纵坐标
        imagestring($im,3,520,222,"X",$black);    //输出字符X
		imagestring($im,3,16,1,"Y",$black);       //输出字符Y
		       
		$l=190;
		$k1=30;
		$k2=510; 
	    for($j=0;$j<12;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //设置X轴网格线横坐标
		   $l=$l-40;		
		}

		$f=70; 
		$z1=20;
		$z2=228;
	    for($j=0;$j<12;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //设置Y轴网格线纵坐标
		   $f=$f+40;	
		 }	
		
		//输出Y轴坐标值
		$l=185;
	    for($j=1;$j<6;$j++){
   	        imagestring($im,2,2,$l,20*$j."%",$red);
		    $l=$l-40;		
		 }	
		 
	    $x = 20;
        $y = 230;
        for ($i=1;$i<12;$i++){
			$y_lt = $y-(($data[$i-1]/$max)* 200);      //设置出生人口的纵坐标值
			$y_ht = $y-(($data[$i]/$max)* 200);        //获取每月出生人口数的纵坐标值
       		imageline($im,$x*($i*2-1)+30,$y_lt,$x*(($i+1)*2-1)+30,$y_ht,$red);     //绘制出生人口折线图
		}  
		 
		for ($i=1;$i<13;$i++){ 
			$r1=round((($data[$i-1])/$max)*100,2);
            imagestring( $im,2,$x*($i-1)*2+40,$y+11,$month[$i-1],$black);   //输出月份的值
            imagestring( $im,2,$x*($i-1)*2+36,$y+25,$r1."%",$red);      //输出出生人口的百分比
        }
		

		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //释放图像资源
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>折线图表分析人口出生率</title>
<style type="text/css">
<!--
 input{
	height:18px;
}
td{
font-size:9pt;
}
body {
	background-color: #D6EBD6;
}
-->
</style>
</head>
<body>
<form method="POST" name="myform" action="">
  <div align="left">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="423" height="304" background="images/bg.gif">
      <tr align="center">
        <td height="69">&nbsp;</td>
      </tr>
      <tr>
        <td width="212">
        <p align="right"><font face="Tahoma" size="2">1月人口出生数
            <input type="text" name="T1" size="8">
        </font></td>
        <td width="211"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;7月人口出生数&nbsp;&nbsp;          
          <input name="T7" type="text" id="T7" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212">
        <p align="right"><font face="Tahoma" size="2">2月人口出生数
            <input name="T2" type="text" id="T2" size="8">
</font></td>
        <td height="32"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;8月人口出生数&nbsp;&nbsp;
          <input name="T8" type="text" id="T8" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">3月人口出生数
          <input name="T3" type="text" id="T3" size="8">
        </font> </td>
        <td height="32"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;9月人口出生数&nbsp;&nbsp;          
          <input name="T9" type="text" id="T9" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">4月人口出生数
          <input name="T4" type="text" id="T4" size="8">
        </font></td>
        <td height="32"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;10月人口出生数
          <input name="T10" type="text" id="T10" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">5月人口出生数
          <input name="T5" type="text" id="T5" size="8">
        </font></td>
        <td height="30"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;11月人口出生数
          <input name="T11" type="text" id="T11" size="8">
        </font></td>
      </tr>
	  <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">6月人口出生数
          <input name="T6" type="text" id="T6" size="8">
        </font></td>
        <td height="26"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;12月人口出生数
          <input name="T12" type="text" id="T12" size="8">
        </font></td>
	  </tr>
      <tr align="center">
        <td colspan="4"><p align="center"><font face="Tahoma">
        <input type="submit" value="提交" name="submit"></font></td>		
      </tr>
    </table>
  </div>
</form>
</body>
</html>
