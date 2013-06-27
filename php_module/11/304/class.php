<?php
session_start();
class car{

  
  
  public function addcar($x){
   $id=$x;
   $arraygwc=explode("@",$_SESSION["prolist"]);
  for($i=0;$i<count($arraygwc);$i++)
    {
	  if($arraygwc[$i]==$id)
	  {
	     echo "<script>alert('该商品已经在购物车中！');history.back();</script>";
		 exit;
	  }
	}
   $_SESSION["prolist"].="$id@"; 
   $_SESSION["num"].="1@";
   echo "<script>window.location.href='index.php';</script>";
  
  }
  
  
 public function changenum(){
  $arrayid=explode("@",$_SESSION["prolist"]);
  $arraynum=explode("@",$_SESSION["num"]);
   while(list($name,$value)=each($_POST))
   {
  
   if(!is_numeric($value)||$value=="")
	 {
	    echo "<script>alert('请输入正确的商品数量!');history.back();</script>";
		exit;  
	 }
   for($i=0;$i<count($arrayid);$i++)
    {  
     
	 if($arrayid[$i]==$name)
	  {
	    $arraynum[$i]=$value;
	    
	  } 
     }
   }
   $_SESSION["num"]=implode("@",$arraynum);
   echo "<script>window.location.href='index.php';</script>";
   }
   
   
   public function setnull(){
   $_SESSION["prolist"]="";
   $_SESSION["num"]="";
   echo "<script>window.location.href='index.php';</script>";
   
   }
   
   
   public function removeitem($x){
    $arrayid=explode("@",$_SESSION["prolist"]);
    $arraynum=explode("@",$_SESSION["num"]);
	for($i=0;$i<count($arrayid);$i++)
	 {
	   if($arrayid[$i]==$x)
	    {
		  unset($arrayid[$i]);
		  unset($arraynum[$i]);
		}
	 }
	 $_SESSION["prolist"]=implode("@",$arrayid);
	 $_SESSION["num"]=implode("@",$arraynum);
     echo "<script>window.location.href='index.php';</script>";
   }
  
}

?>