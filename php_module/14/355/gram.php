<?php
$img_height=300;                  //�����ĸ߶�
$img_width=0;                     //�������
$jiange=40;                       //�̶�֮��ļ��
$left=30;                         //��������Ŀ��
$right=30;                        //�Ҳ������Ŀ��
$up=30;                           //���������ĸ߶�
$down=40;                         //���������ĸ߶�
$max=1;                           //�������ֵ
$p_x = array();                   //���ݵ�x������
$p_y = array();                   //���ݵ�y������
$month = array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct","Nov","Dec");  //�·ݵı���
if ($_GET["lmbs"]=="") die("error id:0");      
$data=split(",",$_GET["lmbs"]);     //����","�ָ��ַ���$dataΪ��ȡ�����ݱ���
for($i=0;$i<count($data);$i++){
	if(!is_numeric($data[$i])) die("error id:1");
	if($data[$i]>$max) $max=$data[$i]; }
$img_width=$left+$right+count($data)*$jiange;    //�������������
$image = imagecreate($img_width,$img_height);     //��������
$green = imagecolorallocate($image, 153, 255, 51);    //ƥ����ɫ
$leftbiao_color = imagecolorallocate($image, 0, 0, 0);
$downn_color = imagecolorallocate($image, 0, 0, 255);
imageline ( $image, $left, $img_height-$down, $img_width-$right/2, $img_height-$down, $leftbiao_color);  //x������
imageline ( $image, $left, $up/2,  $left, $img_height-$down, $leftbiao_color);  //y������
//�����������������ϵĵ�
for($i=0;$i<count($data);$i++){    
	array_push ($p_x, $left+$i*$jiange);
	array_push ($p_y, $up+round(($img_height-$up-$down)*(1-$data[$i]/$max))); }
//���y����ߵ��ֵ
imageline ( $image, $left, $up,  $left+6, $up, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up,$max, $leftbiao_color);
//���y��3/4�߶ȵ�ֵ
imageline ( $image, $left, $up+($img_height-$up-$down)*1/4,  $left+6, $up+($img_height-$up-$down)*1/4, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up+($img_height-$up-$down)*1/4,$max*3/4, $leftbiao_color);
//���y��2/4�߶ȵ�ֵ
imageline ( $image, $left, $up+($img_height-$up-$down)*2/4,  $left+6, $up+($img_height-$up-$down)*2/4, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up+($img_height-$up-$down)*2/4,$max*2/4, $leftbiao_color);
//���y��1/4�߶ȵ�ֵ
imageline ( $image, $left, $up+($img_height-$up-$down)*3/4,  $left+6, $up+($img_height-$up-$down)*3/4, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up+($img_height-$up-$down)*3/4,$max*1/4, $leftbiao_color);
//���x��Ŀ̶�
for($i=0;$i<count($data);$i++){
	imageline ( $image, $left+$i*$jiange, $img_height-$down,  $left+$i*$jiange, $img_height-$down-6, $leftbiao_color);
	imagestring ( $image, 2, $left+$i*$jiange-$jiange/4, $up+($img_height-$up-$down)+2,$month[$i], $leftbiao_color); }
$data_color_int=0;   
//Ϊÿ�������������
for($i=0;$i<count($data);$i++){
	if($i+1<>count($data)){
		imageline ( $image, $p_x[$i], $p_y[$i],  $p_x[$i+1], $p_y[$i+1], $downn_color);
		imagefilledrectangle($image, $p_x[$i]-1, $p_y[$i]-1, $p_x[$i]+1, $p_y[$i]+1, $downn_color); }
}
imagefilledrectangle($image, $p_x[count($data)-1]-1, $p_y[count($data)-1]-1, $p_x[count($data)-1]+1, $p_y[count($data)-1]+1, $downn_color);
//���ÿ������������ֵ
for($i=0;$i<count($data);$i++){
	imagestring ( $image, 3, $p_x[$i]+4, $p_y[$i]-12,$data[$i], $leftbiao_color); }
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);   //�ͷ�ͼ����Դ
?>