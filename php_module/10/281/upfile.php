<?php
$link=date("YmjHis");
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["filename"]["name"],".");
$upfiles="./upfiles/".$path;
if(move_uploaded_file($_FILES["filename"]["tmp_name"],$upfiles))
 {
  echo "<script>alert('文件上传成功!');history.back();</script>";
 }
else
 {
  echo "<script>alert('文件上传失败!');history.back();</script>";
 }
?>