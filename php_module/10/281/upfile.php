<?php
$link=date("YmjHis");
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["filename"]["name"],".");
$upfiles="./upfiles/".$path;
if(move_uploaded_file($_FILES["filename"]["tmp_name"],$upfiles))
 {
  echo "<script>alert('�ļ��ϴ��ɹ�!');history.back();</script>";
 }
else
 {
  echo "<script>alert('�ļ��ϴ�ʧ��!');history.back();</script>";
 }
?>