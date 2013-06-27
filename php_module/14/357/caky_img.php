<?php session_start(); include("conn/conn.php");
    if($_GET["lmbs"]=="") die("0");  
        $shuju=split(",",$_GET["lmbs"]);   //读取提交的数据
        if(count($shuju)==0) die("2");
    //创建饼形图
$width=280;  //宽度
$height=130; //高度
$angle = array();  //角度
$total=0;
for ($i = 0; $i < count($shuju); $i++)  {
	if(!is_numeric($shuju[$i])) die("1");
	$total+=$shuju[$i]; }
for ($i = 0; $i < count($shuju); $i++) {
	array_push ($angle, round(360*$shuju[$i]/$total)); }
	
$image = imagecreate($width, $height);
$white    = imagecolorallocate($image, 0xEE, 0xEE, 0xEE);
$color = array(
	array(
		imagecolorallocate($image, 0x97, 0xbd, 0x00),
		imagecolorallocate($image, 0x00, 0x99, 0x00),
		imagecolorallocate($image, 0xcc, 0x33, 0x00),
		imagecolorallocate($image, 0xff, 0xcc, 0x00),
		imagecolorallocate($image, 0x33, 0x66, 0xcc),
		imagecolorallocate($image, 0x33, 0xcc, 0x33),
		imagecolorallocate($image, 0xff, 0x99, 0x33),
		imagecolorallocate($image, 0xcc, 0xcc, 0x99),
		imagecolorallocate($image, 0x99, 0xcc, 0x66),
		imagecolorallocate($image, 0x66, 0xff, 0x99) 
		),
	array(
		imagecolorallocate($image, 0x4f, 0x66, 0x00),
		imagecolorallocate($image, 0x00, 0x33, 0x00),
		imagecolorallocate($image, 0x48, 0x10, 0x00),
		imagecolorallocate($image, 0x7d, 0x64, 0x00),
		imagecolorallocate($image, 0x17, 0x30, 0x64),
		imagecolorallocate($image, 0x1a, 0x6a, 0x1a),
		imagecolorallocate($image, 0x97, 0x4b, 0x00),
		imagecolorallocate($image, 0x78, 0x79, 0x3c),
		imagecolorallocate($image, 0x55, 0x7e, 0x27),
		imagecolorallocate($image, 0x00, 0x93, 0x37)
		)
     );
$rounds_x=$width/2;  //原线
for ($h = $height/2+5; $h > $height/2-5; $h--) {
	$start=0;
	$stop=0;
	for ($i = 0; $i < count($shuju); $i++)  {
		$start=$start+0;
		$stop=$start+$angle[$i];
		$color_i=fmod($i,10);
		imagefilledarc($image, $rounds_x, $h, $width, $height-20, $start, $stop, $color[1][$color_i], IMG_ARC_PIE);
		$start+=$angle[$i];
		$stop+=$angle[$i];
	}
}
for ($i = 0; $i < count($shuju); $i++)  {
		$start=$start+0;
		$stop=$start+$angle[$i];
		$color_i=fmod($i,10);
		imagefilledarc($image, $rounds_x, $h, $width, $height-20, $start, $stop, $color[0][$color_i], IMG_ARC_PIE);
		$start+=$angle[$i];
		$stop+=$angle[$i];
	}	
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>