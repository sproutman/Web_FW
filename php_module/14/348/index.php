<?php
    if ($_POST["Submit"]!=""){
        $data = array($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["T4"],$_POST["T5"],$_POST["T6"],$_POST["T7"],$_POST["T8"],$_POST["T9"],$_POST["T10"],$_POST["T11"],$_POST["T12"]);
        $month= array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
        $max = 0;
         for ($i=0;$i<12;$i++){
          $max=$max+$data[$i];       //所有商品销量的累加和
        }

        $im = imagecreate(520,350); 
        $green = imagecolorallocate($im,214,235,214); // 设置颜色值
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,10,5,10,230, $blue );        //设置Y轴纵坐标
        imageline($im,10,230,500,230, $blue );     //设置X轴纵坐标
        imagestring($im,3,8,1,"Y",$black);        //输出字符Y
        imagestring($im,3,502,222,"X",$black);    //输出字符X
		
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
        $x_width = 20;
        $y_ht = 0;
        for ($i=0;$i<12;$i++){
          $y_ht = ($data[$i]/$max)* 1000;     //设置商品销量所占千分比
          imagefilledrectangle($im,$x,$y,$x+$x_width,($y-$y_ht),$red);      //绘制并填充柱形图
          imagestring( $im,2,$x-1,$y+1,$month[$i],$black);
          imagestring( $im,2,$x-1,$y+15,$data[$i],$black);    //设置月份值与销售量之间的距离
          $x += ($x_width+20);   //设置两柱形图之间的宽度为20像素;
        }
        imagepng($im);
		imagedestroy($im);     //释放图像资源
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>单商品月销售量柱形图分析</title>
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
<form method="POST" name="myForm" action="<?php echo $PHP_SELF ;?>">
  <div align="left">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="423" height="305" background="images/bg.gif">
      <tr>
        <td height="77"colspan="4">
        <p align="left"><b><font face="Tahoma">　　</font></b></td>
      </tr>
      <tr>
        <td width="143">
        <p align="right"><font face="Tahoma" size="2">1月份商品总销量:</font></td>
        <td width="81" height="26" align="center"> <input type="text" name="T1" size="8"></td>
        <td width="104"><font face="Tahoma" size="2">7月份商品总销量:</font></td>
        <td width="95"><input name="T7" type="text" id="T7" size="8"></td>
      </tr>
      <tr>
        <td width="143">
        <p align="right"><font face="Tahoma" size="2">2月份商品总销量:</font></td>
        <td height="32" align="center"><input type="text" name="T2" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">8月份商品总销量:</font></td>
        <td height="32"><input name="T8" type="text" id="T8" size="8"></td>
      </tr>
      <tr>
        <td width="143" align="right">
          <font face="Tahoma" size="2">3月份商品总销量:</font></td>
        <td height="32" align="center"><input type="text" name="T3" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">9月份商品总销量:</font></td>
        <td height="32"><input name="T9" type="text" id="T9" size="8"></td>
      </tr>
      <tr>
        <td width="143"  align="right">
          <font face="Tahoma" size="2">4月份商品总销量:</font></td>
        <td height="32" align="center"><input type="text" name="T4" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">10月份商品总销量:</font></td>
        <td height="32"><input name="T10" type="text" id="T10" size="8"></td>
      </tr>
      <tr>
        <td width="143" align="right">
          <font face="Tahoma" size="2">5月份商品总销量:</font></td>
        <td height="30" align="center"><input type="text" name="T5" size="8"></td>
        <td height="30"><font face="Tahoma" size="2">11月份商品总销量:</font></td>
        <td height="30"><input name="T11" type="text" id="T11" size="8"></td>
      </tr>
	  <tr>
        <td width="143" align="right">
          <font face="Tahoma" size="2">6月份商品总销量:</font></td>
        <td height="30" align="center"><input type="text" name="T6" size="8"></td>
        <td height="30"><font face="Tahoma" size="2">12月份商品总销量:</font></td>
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
