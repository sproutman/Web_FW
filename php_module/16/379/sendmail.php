<?php
include("function.php");
$mailfrom=$_POST[mailfrom];
$mailto=$_POST[mailto];
$mailcc=$_POST[mailcc];
$mailbcc=$_POST[mailbcc];
$mailsubject=$_POST[mailsubject];
//$mailbody = unhtml($_POST[mailbody]);
$mailbody = $_POST[mailbody]; 
//$mailbody = $_POST[mailbody]; 
$headers .= "MIME-Version: 1.0 \n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1 \n"; 
$headers .= "From:$mailfrom\r\nCc:$mailcc\r\nBcc:$mailbcc"; 
if(@mail($mailto, $mailsubject,$mailbody,$headers)) 
{ 
  echo "<script>alert('邮件发送成功！');history.back()</script>";  
      
} 
else 
{ 
  echo "<script>alert('邮件未发送成功！');history.back()</script>";      
}
?> 
