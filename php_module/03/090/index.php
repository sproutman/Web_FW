<?php session_start();?>
<?php 
if($gly==true && $mima==true){
if($ljid==true){
$ljid=$_GET['ljid'];
echo "����ǵ�����ʾ�Ի����ض�����ҳ!";}
?>
<?php }else{
echo "<script>alert ('����ǵ�����ʾ�Ի����ض�����ҳ!'); window.location.href='mrsoft.php';</script>";
}
?>