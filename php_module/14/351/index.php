<?php 
 		if($_POST["submit"]!=""){
	    $link=mysql_connect('localhost','root','root');
        mysql_select_db($_POST[db_database],$link);      //���������ݿ������
        mysql_query("set names gb2312");
		$tb1=$_POST[tb1];       //�������ݱ�1��
		$tb2=$_POST[tb2];      //�������ݱ�2��
		
		$sql_max=mysql_query("select max(sl) as total1 from $tb1");   //�������ݱ�1��������ֵ
        $info1=mysql_fetch_array($sql_max);
		$max1=$info1[total1];   
		
		$query=mysql_query("select max(sl) as total2 from $tb2");    //�������ݱ�2��������ֵ
        $info2=mysql_fetch_array($query);
		$max2=$info2[total2];   
	
		$sql1=mysql_query("select * from $tb1");        //�������ݱ�1�е�������Ϣ
        $result_tb1=mysql_fetch_array($sql1); 
		
		$sql2=mysql_query("select * from $tb2");       //�������ݱ�2�е�������Ϣ
        $result_tb2=mysql_fetch_array($sql2);

		$im = imagecreate(550,350);     //�������� 
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
		 

		//���Y������ֵ
		 $c=$max1>$max2?$max1:$max2;   //������Ŀ�������������ݱ�1�����ݱ�2�ԱȺ�����ֵ
		 $len=strlen($c);
		 $str="1";
		 for($z=1;$z<$len;$z++){
		 $str=$str."0";
		 }

		$l=185;
	    for($j=1;$j<6;$j++){
			$big=ceil(($c/$str))*$str;
   	        imagestring($im,2,2,$l,$j*$big/5,$red);
		    $l=$l-40;		
		 }	
		 
        $x = 60;
        $y = 230;
        $x_width = 20;
        $y_ht = 0;
		
        do{
		  $fnt="c:/windows/fonts/simhei.ttf";      //��������
		  $y_ht1 =230-floor((200/$big)*$result_tb1[sl]);      //�������ݱ�1��sl�������
          imagefilledrectangle($im,$x,$y,$x+$x_width,$y_ht1,$red);     //���Ʋ��������ͼ
		  imageTTFText($im,8,0,$x+2,$y+15,$black,$fnt,$$rsult_tb1[name]);      //дTTF���ֵ�ͼ��
          imagestring($im,2,$x-1,$y+20,$result_tb1[sl],$red);      //������ݱ�1�е�sl������
          $x +=($x_width+100);      //����������ͼ֮��Ŀ��Ϊ100����;

	 }while($result_tb1=mysql_fetch_array($sql1));


        $x_2 = 100;
        $y_2= 230;
        $x_width2 = 20;
        $y_ht2 = 0;
	 do{
		  $fnt="c:/windows/fonts/simhei.ttf";      //��������
	      $y_ht2 =230-floor((200/$big)*$result_tb2[sl]);      //�������ݱ�2��sl�������
          imagefilledrectangle($im,$x_2,$y_2,$x_2+$x_width2,$y_ht2,$blue);     //���Ʋ��������ͼ
          imagestring($im,2,$x_2-1,$y_2+20,$result_tb2[sl],$blue);   //������ݱ�2�е�sl������
          $x_2 +=($x_width2+100);      //����������ͼ֮��Ŀ��Ϊ100����;
	 }while($result_tb2=mysql_fetch_array($sql2));

		imagefilledrectangle($im,200,310,230,290,$red);      //���Ʋ��������ͼ
		imagefilledrectangle($im,200,340,230,320,$blue);     //���Ʋ��������ͼ
		imageTTFText($im,10,0,240,305,$black,$fnt,$tb1);      //дTTF���ֵ�ͼ��
		imageTTFText($im,10,0,240,335,$black,$fnt,$tb2);      //дTTF���ֵ�ͼ��

		
		imagepng($im, "a.png");
        echo "<img src='a.png'>";
		imagedestroy($im);     //�ͷ�ͼ����Դ
		echo "<br><br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4pt;>��&nbsp;ͼ��̬������ͬ�����ݱ�&nbsp;��</font>";
}
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ͼ��̬������ͬ�����ݱ�</title>
<style type="text/css">
body {
	background-color: #D6EBD6;
}
td{
font-size:9pt;
}
</style>
</head>
<body>
<form method="POST" name="myform" action="">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="423" height="305" background="images/bg.gif">
      <tr align="center">
        <td width="423" height="77">
          </td>
      </tr>
      <tr align="center">
        <td>
          <table width="100%" height="212"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="13%" height="165" rowspan="7">&nbsp;</td>
              <td height="36" colspan="2" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Ϊʹ���ĳ����ܹ��������У�����ʵ��д������Ϣ����ȷ���������ݱ��о���sl�ֶΣ�<br>              </td>
              <td width="5%" rowspan="7">&nbsp;</td>
            </tr>
            <tr>
              <td width="22%" height="10" align="center">���ݿ�����</td>
              <td width="60%"><input name="db_database" type="text" id="db_database" size="18">
                ��:db_database14</td>
            </tr>
            <tr>
              <td height="17" align="center">���ݱ���1��</td>
              <td height="17">
                <input name="tb1" type="text" id="tb1" size="18">
��:tb_kucun</td>
            </tr>
            <tr>
              <td height="7" align="center">���ݱ���2��</td>
              <td height="7"><input name="tb2" type="text" id="tb2" size="18">
              ��:tb_chuku</td>
            </tr>
            <tr>
              <td height="62" colspan="2" align="center"><input type="submit" value="�ύ" name="submit"></td>
            </tr>
          </table>
       </td>
      </tr>
    </table>
</form>
</body>
</html>
