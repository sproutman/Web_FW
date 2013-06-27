<?php
$from=$_POST[from];
$to=$_POST[to];
$cc=$_POST[cc];
$bcc=$_POST[bcc];
$title=$_POST[title];
$content=$_POST[content];

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=gb2312\r\n";
$headers .= "To: $to\r\n";
$headers .= "From: $from\r\n";
if($cc!="")
 {
  $headers .= "Cc: $cc\r\n"; 
 }
 if($bcc!="")
  {
   $headers .= "Bcc: $bcc\r\n";
  
  }
if(@mail($to, $title, $content, $headers))
{
   echo "<script>alert('邮件发送成功!');history.back();</script>";
}
else
{
   echo "<script>alert('邮件发送失败!');history.back();</script>";
}


?>