<?php  include("conn/conn.php");?>
<?php  if($Submit==true){
        $names="images";
	    $data=date("y;m;d");
        $fp=fopen($image,"rb");
        $image=addslashes(fread($fp,filesize($image)));    
           if($image==true){
		      $query="insert into tb_image1 (image_name,image,data)values('$names','$image','$data')";
		      $result=mysql_query($query,$id); 
			  echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\">«Î…‘µ»...";
		   }else{
		      echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\">«Î ‰»ÎÕº∆¨..."; }  }
?>