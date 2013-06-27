<?php
$img_height=300;                  //画布的高度
$img_width=0;                     //画布宽度
$jiange=40;                       //刻度之间的间隔
$left=30;                         //左侧留出的宽度
$right=30;                        //右侧留出的宽度
$up=30;                           //上面留出的高度
$down=40;                         //下面留出的高度
$max=1;                           //最大数据值
$p_x = array();                   //数据的x轴坐标
$p_y = array();                   //数据的y轴坐标
$month = array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct","Nov","Dec");  //月份的变量
if ($_GET["lmbs"]=="") die("error id:0");      
$data=split(",",$_GET["lmbs"]);     //按照","分隔字符串$data为获取的数据变量
for($i=0;$i<count($data);$i++){
	if(!is_numeric($data[$i])) die("error id:1");
	if($data[$i]>$max) $max=$data[$i]; }
$img_width=$left+$right+count($data)*$jiange;    //画布的真正宽度
$image = imagecreate($img_width,$img_height);     //创建画布
$green = imagecolorallocate($image, 153, 255, 51);    //匹配颜色
$leftbiao_color = imagecolorallocate($image, 0, 0, 0);
$downn_color = imagecolorallocate($image, 0, 0, 255);
imageline ( $image, $left, $img_height-$down, $img_width-$right/2, $img_height-$down, $leftbiao_color);  //x轴坐标
imageline ( $image, $left, $up/2,  $left, $img_height-$down, $leftbiao_color);  //y轴坐标
//描述出数据在坐标上的点
for($i=0;$i<count($data);$i++){    
	array_push ($p_x, $left+$i*$jiange);
	array_push ($p_y, $up+round(($img_height-$up-$down)*(1-$data[$i]/$max))); }
//输出y轴最高点的值
imageline ( $image, $left, $up,  $left+6, $up, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up,$max, $leftbiao_color);
//输出y轴3/4高度的值
imageline ( $image, $left, $up+($img_height-$up-$down)*1/4,  $left+6, $up+($img_height-$up-$down)*1/4, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up+($img_height-$up-$down)*1/4,$max*3/4, $leftbiao_color);
//输出y轴2/4高度的值
imageline ( $image, $left, $up+($img_height-$up-$down)*2/4,  $left+6, $up+($img_height-$up-$down)*2/4, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up+($img_height-$up-$down)*2/4,$max*2/4, $leftbiao_color);
//输出y轴1/4高度的值
imageline ( $image, $left, $up+($img_height-$up-$down)*3/4,  $left+6, $up+($img_height-$up-$down)*3/4, $leftbiao_color);
imagestring ( $image, 3, $left/4, $up+($img_height-$up-$down)*3/4,$max*1/4, $leftbiao_color);
//输出x轴的刻度
for($i=0;$i<count($data);$i++){
	imageline ( $image, $left+$i*$jiange, $img_height-$down,  $left+$i*$jiange, $img_height-$down-6, $leftbiao_color);
	imagestring ( $image, 2, $left+$i*$jiange-$jiange/4, $up+($img_height-$up-$down)+2,$month[$i], $leftbiao_color); }
$data_color_int=0;   
//为每个点的坐标连线
for($i=0;$i<count($data);$i++){
	if($i+1<>count($data)){
		imageline ( $image, $p_x[$i], $p_y[$i],  $p_x[$i+1], $p_y[$i+1], $downn_color);
		imagefilledrectangle($image, $p_x[$i]-1, $p_y[$i]-1, $p_x[$i]+1, $p_y[$i]+1, $downn_color); }
}
imagefilledrectangle($image, $p_x[count($data)-1]-1, $p_y[count($data)-1]-1, $p_x[count($data)-1]+1, $p_y[count($data)-1]+1, $downn_color);
//输出每个坐标点的数据值
for($i=0;$i<count($data);$i++){
	imagestring ( $image, 3, $p_x[$i]+4, $p_y[$i]-12,$data[$i], $leftbiao_color); }
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);   //释放图像资源
?>