<?php
    if ($_POST["Submit"]!=""){
        $data = array($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["T4"],$_POST["T5"],$_POST["T6"],$_POST["T7"],$_POST["T8"],$_POST["T9"],$_POST["T10"],$_POST["T11"],$_POST["T12"]);
        $month= array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
        $max = 0;
         for ($i=0;$i<12;$i++){
          $max=$max+$data[$i];       //������Ʒ�������ۼӺ�
        }

        $im = imagecreate(520,350); 
        $green = imagecolorallocate($im,214,235,214); // ������ɫֵ
        $black = imagecolorallocate($im,0,0,0);   
        $red = imagecolorallocate($im,255,0,0);
        $blue = imagecolorallocate($im,0,0,255); 

        imageline($im,10,5,10,230, $blue );        //����Y��������
        imageline($im,10,230,500,230, $blue );     //����X��������
        imagestring($im,3,8,1,"Y",$black);        //����ַ�Y
        imagestring($im,3,502,222,"X",$black);    //����ַ�X
		
		$l=190;
		$k1=10;
		$k2=490; 
	    for($j=0;$j<12;$j++){
		  imageline($im,$k1,$l,$k2,$l,$black);      //����X�������ߺ�����
		  $l=$l-40;		
		}

		$f=50; 
		$z1=10;
		$z2=228;
	     for($j=0;$j<12;$j++){
		  imageline($im,$f,$z1,$f,$z2,$black);     //����Y��������������
		  $f=$f+40;	
		 }		

        $x = 20;
        $y = 230;
        $x_width = 20;
        $y_ht = 0;
        for ($i=0;$i<12;$i++){
          $y_ht = ($data[$i]/$max)* 1000;     //������Ʒ������ռǧ�ֱ�
          imagefilledrectangle($im,$x,$y,$x+$x_width,($y-$y_ht),$red);      //���Ʋ��������ͼ
          imagestring( $im,2,$x-1,$y+1,$month[$i],$black);
          imagestring( $im,2,$x-1,$y+15,$data[$i],$black);    //�����·�ֵ��������֮��ľ���
          $x += ($x_width+20);   //����������ͼ֮��Ŀ��Ϊ20����;
        }
        imagepng($im);
		imagedestroy($im);     //�ͷ�ͼ����Դ
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����Ʒ������������ͼ����</title>
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
        <p align="left"><b><font face="Tahoma">����</font></b></td>
      </tr>
      <tr>
        <td width="143">
        <p align="right"><font face="Tahoma" size="2">1�·���Ʒ������:</font></td>
        <td width="81" height="26" align="center"> <input type="text" name="T1" size="8"></td>
        <td width="104"><font face="Tahoma" size="2">7�·���Ʒ������:</font></td>
        <td width="95"><input name="T7" type="text" id="T7" size="8"></td>
      </tr>
      <tr>
        <td width="143">
        <p align="right"><font face="Tahoma" size="2">2�·���Ʒ������:</font></td>
        <td height="32" align="center"><input type="text" name="T2" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">8�·���Ʒ������:</font></td>
        <td height="32"><input name="T8" type="text" id="T8" size="8"></td>
      </tr>
      <tr>
        <td width="143" align="right">
          <font face="Tahoma" size="2">3�·���Ʒ������:</font></td>
        <td height="32" align="center"><input type="text" name="T3" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">9�·���Ʒ������:</font></td>
        <td height="32"><input name="T9" type="text" id="T9" size="8"></td>
      </tr>
      <tr>
        <td width="143"  align="right">
          <font face="Tahoma" size="2">4�·���Ʒ������:</font></td>
        <td height="32" align="center"><input type="text" name="T4" size="8"></td>
        <td height="32"><font face="Tahoma" size="2">10�·���Ʒ������:</font></td>
        <td height="32"><input name="T10" type="text" id="T10" size="8"></td>
      </tr>
      <tr>
        <td width="143" align="right">
          <font face="Tahoma" size="2">5�·���Ʒ������:</font></td>
        <td height="30" align="center"><input type="text" name="T5" size="8"></td>
        <td height="30"><font face="Tahoma" size="2">11�·���Ʒ������:</font></td>
        <td height="30"><input name="T11" type="text" id="T11" size="8"></td>
      </tr>
	  <tr>
        <td width="143" align="right">
          <font face="Tahoma" size="2">6�·���Ʒ������:</font></td>
        <td height="30" align="center"><input type="text" name="T6" size="8"></td>
        <td height="30"><font face="Tahoma" size="2">12�·���Ʒ������:</font></td>
        <td height="30"><input name="T12" type="text" id="T12" size="8"></td>
	  </tr>
      <tr align="center">
        <td colspan="4">        <p align="center"><font face="Tahoma">
        <input type="submit" value="�ύ" name="Submit"></font></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
