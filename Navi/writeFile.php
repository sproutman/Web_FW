<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// 要写入的文件名字
$ip_name = $_POST["ip_name"];
$ip_address = $_POST["ip_address"];

$space = ' ';
$huanghang = "\n";


$filename = 'ip_Object.txt';

$fh = fopen($filename, "a+");

//preset
echo fwrite($fh, $ip_name);
echo fwrite($fh, $space);
echo fwrite($fh, $ip_address);
echo fwrite($fh, $huanghang);

fclose($fh);

?>

