<?php
    if ($_POST["submit"]!=""){
        $data = array($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["T4"],$_POST["T5"],$_POST["T6"],$_POST["T7"],$_POST["T8"],$_POST["T9"],$_POST["T10"],$_POST["T11"],$_POST["T12"]);
        $month= array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
        $rdata = array($_POST["R1"],$_POST["R2"],$_POST["R3"],$_POST["R4"],$_POST["R5"],$_POST["R6"],$_POST["R7"],$_POST["R8"],$_POST["R9"],$_POST["R10"],$_POST["R11"],$_POST["R12"]);
		
        $max=max($data);         //��ȡ���۶�����ֵ
        $rmax=max($rdata);       //��ȡ��������ֵ
		
        $im = imagecreate(550,300);     //�������� 
        $green = imagecolorallocate($im,214,235,214);    //������ɫֵ
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,20,230,520,230, $blue );    //����X�������
		imageline($im,20,5,20,230, $blue );       //����Y��������
        imagestring($im,3,520,222,"X",$black);    //����ַ�X
		imagestring($im,3,16,1,"Y",$black);       //����ַ�Y
		       
		$l=190;
		$k1=20;
		$k2=500; 
	    for($j=0;$j<12;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //����X�������ߺ�����
		   $l=$l-40;		
		}

		$f=60; 
		$z1=10;
		$z2=228;
	    for($j=0;$j<12;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //����Y��������������
		   $f=$f+40;	
		 }	
		
		//���Y������ֵ
		$a=max($data);
		$b=max($rdata);
		$c=$a>$b?$a:$b;
		$l=185;
	    for($j=0;$j<5;$j++){
   	        imagestring($im,2,2,$l,floor($c/5*($j+1)),$red);
		    $l=$l-40;		
		 }	
		 
	    $x = 20;
        $y = 230;
        for ($i=1;$i<12;$i++){
			$y_lt = 230-(($data[$i-1]/$max)*200);       //������Ʒ���۶����ڵ�������ֵ
			$y_ht = 230-(($data[$i]/$max)* 200);        //������Ʒ���۶����ڵ�������ֵ
       		imageline($im,$x*($i*2-1)+20,$y_lt,$x*(($i+1)*2-1)+20,$y_ht,$red);     //�������۶�����ͼ
		}  
		 
		for ($i=1;$i<13;$i++){ 
            imagestring( $im,2,$x*($i-1)*2+30,$y+11,$month[$i-1],$black);   //����·ݵ�ֵ
            imagestring( $im,2,$x*($i-1)*2+30,$y+25,$data[$i-1],$red);      //�����Ʒ���۶��ֵ
			imagestring( $im,2,$x*($i-1)*2+30,$y+40,$rdata[$i-1],$blue);    //������������ֵ
        }
		
	    $x1 = 20;
        $y1 = 230;
        for ($r=1;$r<12;$r++){
			$y_lt1 = 230-(($rdata[$r-1]/$max)* 200);      //������Ʒ�����������ڵ�������ֵ
			$y_ht1 = 230-(($rdata[$r]/$max)*200);         //������Ʒ�����������ڵ�������ֵ
       	    imageline($im,$x1*($r*2-1)+20,$y_lt1,$x*(($r+1)*2-1)+20,$y_ht1,$blue);     //����������������ͼ
		}  

		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����۶����ͼ�����</title>
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
        <td height="73">&nbsp;</td>
      </tr>
      <tr>
        <td width="147">
        <p align="right"><font face="Tahoma" size="2">1�����۶�
          <input type="text" name="T1" size="5">
        </font></td>
        <td width="77" height="26" align="center">����<font face="Tahoma" size="2">
        <input name="R1" type="text" id="R1" size="5">
</font> </td>
        <td width="113"><font face="Tahoma" size="2">7�����۶�
            <input name="T7" type="text" id="T7" size="5">
        </font></td>
        <td width="86">����<font face="Tahoma" size="2">
        <input name="R7" type="text" id="R7" size="5">
        </font> </td>
      </tr>
      <tr>
        <td width="147">
        <p align="right"><font face="Tahoma" size="2">2�����۶�
          <input name="T2" type="text" id="T2" size="5">
</font></td>
        <td height="32" align="center">����<font face="Tahoma" size="2">
        <input name="R2" type="text" id="R2" size="5">
        </font></td>
        <td height="32"><font face="Tahoma" size="2">8�����۶�
            <input name="T8" type="text" id="T8" size="5">
        </font></td>
        <td height="32">����<font face="Tahoma" size="2">
        <input name="R8" type="text" id="R8" size="5">
        </font> </td>
      </tr>
      <tr>
        <td width="147"><p align="right"><font face="Tahoma" size="2">3�����۶�
              <input name="T3" type="text" id="T3" size="5">
        </font> </td>
        <td height="32" align="center">����<font face="Tahoma" size="2">
        <input name="R3" type="text" id="R3" size="5">
        </font></td>
        <td height="32"><font face="Tahoma" size="2">9�����۶�
            <input name="T9" type="text" id="T9" size="5">
        </font></td>
        <td height="32">����<font face="Tahoma" size="2">
        <input name="R9" type="text" id="R9" size="5">
        </font> </td>
      </tr>
      <tr>
        <td width="147"><p align="right"><font face="Tahoma" size="2">4�����۶�
              <input name="T4" type="text" id="T4" size="5">
        </font></td>
        <td height="32" align="center">����<font face="Tahoma" size="2">
        <input name="R4" type="text" id="R4" size="5">
        </font></td>
        <td height="32"><font face="Tahoma" size="2">10�����۶�
            <input name="T10" type="text" id="T10" size="5">
        </font></td>
        <td height="32">����<font face="Tahoma" size="2">
        <input name="R10" type="text" id="R10" size="5">
        </font> </td>
      </tr>
      <tr>
        <td width="147"><p align="right"><font face="Tahoma" size="2">5�����۶�
              <input name="T5" type="text" id="T5" size="5">
        </font></td>
        <td height="30" align="center">����<font face="Tahoma" size="2">
        <input name="R5" type="text" id="R5" size="5">
        </font></td>
        <td height="30"><font face="Tahoma" size="2">11�����۶�
            <input name="T11" type="text" id="T11" size="5">
        </font></td>
        <td height="30">����<font face="Tahoma" size="2">
        <input name="R11" type="text" id="R11" size="5">
        </font> </td>
      </tr>
	  <tr>
        <td width="147"><p align="right"><font face="Tahoma" size="2">6�����۶�
        <input name="T6" type="text" id="T6" size="5">
        </font></td>
        <td height="26" align="center">����<font face="Tahoma" size="2">
        <input name="R6" type="text" id="R6" size="5">
        </font></td>
        <td height="26"><font face="Tahoma" size="2">12�����۶�
        <input name="T12" type="text" id="T12" size="5">
        </font></td>
        <td height="26">����<font face="Tahoma" size="2">
        <input name="R12" type="text" id="R12" size="5">
        </font> </td>
	  </tr>
      <tr align="center">
        <td colspan="4"><p align="center"><font face="Tahoma">
        <input type="submit" value="�ύ" name="submit"></font></td>		
      </tr>
    </table>
  </div>
</form>
</body>
</html>
