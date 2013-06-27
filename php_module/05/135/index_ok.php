<?php 
    setcookie("cookie1",$_POST[user],time()+10);
    
    if($user!=""&&$pass!=""){
	header("location:138.php");
	}	  
  ?>