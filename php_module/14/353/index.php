<?php
    if ($_POST["Submit"]!=""){
		echo ("利用折线图分析商品:   ".$_POST["spname"]."    的价格走势");
		echo "<br>";
        $data = array($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["T4"],$_POST["T5"],$_POST["T6"],$_POST["T7"],$_POST["T8"],$_POST["T9"],$_POST["T10"],$_POST["T11"],$_POST["T12"]);
        $month= array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
        $max = 0;
        for ($i=0;$i<12;$i++){
          $max=$max+$data[$i];          //所有商品销量的累加和
        }
        $im = imagecreate(520,300);     //创建画布 
        $green = imagecolorallocate($im,214,235,214); // 设置颜色值
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,10,230,500,230, $blue );     //设置X轴横坐标
		imageline($im,10,5,10,230, $blue );       //设置Y轴纵坐标
        imagestring($im,3,502,222,"X",$black);    //输出字符X
		imagestring($im,3,8,1,"Y",$black);        //输出字符Y
		       
		$l=190;
		$k1=10;
		$k2=490; 
	    for($j=0;$j<12;$j++){
		  imageline($im,$k1,$l,$k2,$l,$black);      //设置X轴网格线横坐标
		  $l=$l-40;		
		}

		$f=50; 
		$z1=10;
		$z2=228;
	     for($j=0;$j<12;$j++){
		  imageline($im,$f,$z1,$f,$z2,$black);     //设置Y轴网格线纵坐标
		  $f=$f+40;	
		 }		
		
	    $x = 20;
        $y = 230;
        for ($i=1;$i<12;$i++){
		$y_lt = 230-(($data[$i-1]/$max)* 1000);      //设置商品价格所占千分比
		$y_ht = 230-(($data[$i]/$max)* 1000);        //设置商品价格所占千分比
        imageline($im,$x*($i*2-1)+10,$y_lt,$x*(($i+1)*2-1)+10,$y_ht,$red);     //绘制折线图
		}  
		 
		for ($i=1;$i<13;$i++){ 
          imagestring( $im,2,$x*($i-1)*2+20,$y+11,$month[$i-1],$black);    //输出月份的值
          imagestring( $im,2,$x*($i-1)*2+20,$y+25,$data[$i-1],$black);    //输出商品价格的值
        }
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //释放图像资源
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>商品的价格走势分析</title>
<style type="text/css">
<!--
 input{
	height:18px;
}
body {
	background-color: #D6EBD6;
}
-->
</style></head>
<body>
<form method="POST" name="myForm" action="">
  <div align="left">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="423" height="305" background="images/bg.gif">
      <tr align="center">
        <td height="77"colspan="4">
        <p align="left"><b><font face="Tahoma">　　</font></b>        
        <p align="center">　　　　　　　　　　　　　　商品名称：
          <input name="spname" type="text" id="spname" size="18">
        </td>
      </tr>
      <tr>
        <td width="134">
        <p align="right"><font face="Tahoma" size="2">1月份商品价格:</font></td>
        <td width="95" height="26" align="center"> <input type="text" name="T1" size="8"></td>
        <td width="102"><font face="Tahoma" size="2">7月份商品价格:</font></td>
        <td width="92"><input name="T7" type="text" id="T7" size="8"></td>
      </tr>
      <tr>
        <td width="134">
        <p align="right"><font face="Tahoma" size="2">2月份商品价格:</font></td>
        <td height="32" align="center"><input type="text" name="T2" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">8月份商品价格:</font></td>
        <td height="32"><input name="T8" type="text" id="T8" size="8"></td>
      </tr>
      <tr>
        <td width="134" align="right">
          <font face="Tahoma" size="2">3月份商品价格:</font></td>
        <td height="32" align="center"><input type="text" name="T3" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">9月份商品价格:</font></td>
        <td height="32"><input name="T9" type="text" id="T9" size="8"></td>
      </tr>
      <tr>
        <td width="134"  align="right">
          <font face="Tahoma" size="2">4月份商品价格:</font></td>
        <td height="32" align="center"><input type="text" name="T4" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">10月份商品价格:</font></td>
        <td height="32"><input name="T10" type="text" id="T10" size="8"></td>
      </tr>
      <tr>
        <td width="134" align="right">
          <font face="Tahoma" size="2">5月份商品价格:</font></td>
        <td height="30" align="center"><input type="text" name="T5" size="8"></td>
        <td height="30"><font face="Tahoma" size="2">11月份商品价格:</font></td>
        <td height="30"><input name="T11" type="text" id="T11" size="8"></td>
      </tr>
	  <tr>
        <td width="134" align="right">
          <font face="Tahoma" size="2">6月份商品价格:</font></td>
        <td height="30" align="center"><input type="text" name="T6" size="8"></td>
        <td height="30"><font face="Tahoma" size="2">12月份商品价格:</font></td>
        <td height="30"><input name="T12" type="text" id="T12" size="8"></td>
	  </tr>
      <tr align="center">
        <td colspan="4">        <p align="center"><font face="Tahoma">
        <input type="submit" value="提交" name="Submit"></font></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
