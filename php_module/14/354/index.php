<?php
    if ($_POST["submit"]!=""){
		echo "����ͼ������˿ڳ�����";
		echo "<br>";
        $data = array($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["T4"],$_POST["T5"],$_POST["T6"],$_POST["T7"],$_POST["T8"],$_POST["T9"],$_POST["T10"],$_POST["T11"],$_POST["T12"]);
        $month= array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
		
		$max = 0;
        for ($i=0;$i<12;$i++){
          $max=$max+$data[$i];          //���г����˿ڵ��ۼӺ�
        }
		
        $im = imagecreate(550,300);     //�������� 
        $green = imagecolorallocate($im,214,235,214);    //������ɫֵ
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,30,230,520,230, $blue );    //����X�������
		imageline($im,30,5,30,230, $blue );       //����Y��������
        imagestring($im,3,520,222,"X",$black);    //����ַ�X
		imagestring($im,3,16,1,"Y",$black);       //����ַ�Y
		       
		$l=190;
		$k1=30;
		$k2=510; 
	    for($j=0;$j<12;$j++){
		   imageline($im,$k1,$l,$k2,$l,$black);     //����X�������ߺ�����
		   $l=$l-40;		
		}

		$f=70; 
		$z1=20;
		$z2=228;
	    for($j=0;$j<12;$j++){
		   imageline($im,$f,$z1,$f,$z2,$black);     //����Y��������������
		   $f=$f+40;	
		 }	
		
		//���Y������ֵ
		$l=185;
	    for($j=1;$j<6;$j++){
   	        imagestring($im,2,2,$l,20*$j."%",$red);
		    $l=$l-40;		
		 }	
		 
	    $x = 20;
        $y = 230;
        for ($i=1;$i<12;$i++){
			$y_lt = $y-(($data[$i-1]/$max)* 200);      //���ó����˿ڵ�������ֵ
			$y_ht = $y-(($data[$i]/$max)* 200);        //��ȡÿ�³����˿�����������ֵ
       		imageline($im,$x*($i*2-1)+30,$y_lt,$x*(($i+1)*2-1)+30,$y_ht,$red);     //���Ƴ����˿�����ͼ
		}  
		 
		for ($i=1;$i<13;$i++){ 
			$r1=round((($data[$i-1])/$max)*100,2);
            imagestring( $im,2,$x*($i-1)*2+40,$y+11,$month[$i-1],$black);   //����·ݵ�ֵ
            imagestring( $im,2,$x*($i-1)*2+36,$y+25,$r1."%",$red);      //��������˿ڵİٷֱ�
        }
		

		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����ͼ������˿ڳ�����</title>
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
        <p align="right"><font face="Tahoma" size="2">1���˿ڳ�����
            <input type="text" name="T1" size="8">
        </font></td>
        <td width="211"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;7���˿ڳ�����&nbsp;&nbsp;          
          <input name="T7" type="text" id="T7" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212">
        <p align="right"><font face="Tahoma" size="2">2���˿ڳ�����
            <input name="T2" type="text" id="T2" size="8">
</font></td>
        <td height="32"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;8���˿ڳ�����&nbsp;&nbsp;
          <input name="T8" type="text" id="T8" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">3���˿ڳ�����
          <input name="T3" type="text" id="T3" size="8">
        </font> </td>
        <td height="32"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;9���˿ڳ�����&nbsp;&nbsp;          
          <input name="T9" type="text" id="T9" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">4���˿ڳ�����
          <input name="T4" type="text" id="T4" size="8">
        </font></td>
        <td height="32"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;10���˿ڳ�����
          <input name="T10" type="text" id="T10" size="8">
        </font></td>
      </tr>
      <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">5���˿ڳ�����
          <input name="T5" type="text" id="T5" size="8">
        </font></td>
        <td height="30"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;11���˿ڳ�����
          <input name="T11" type="text" id="T11" size="8">
        </font></td>
      </tr>
	  <tr>
        <td width="212"><p align="right"><font face="Tahoma" size="2">6���˿ڳ�����
          <input name="T6" type="text" id="T6" size="8">
        </font></td>
        <td height="26"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;12���˿ڳ�����
          <input name="T12" type="text" id="T12" size="8">
        </font></td>
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
