<?php session_start();?>
<?php 
if($gly==true && $mima==true){
if($ljid==true){
$ljid=$_GET['ljid'];
echo "这就是弹出提示对话框并重定向网页!";}
?>
<?php }else{
echo "<script>alert ('这就是弹出提示对话框并重定向网页!'); window.location.href='mrsoft.php';</script>";
}
?>