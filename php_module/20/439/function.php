<? function keyED($txt,$encrypt_key){  
	$encrypt_key = md5($encrypt_key);  
	$ctr=0;  
	$tmp = "";  
	for ($i=0;$i<strlen($txt);$i++){  
		if ($ctr==strlen($encrypt_key)){
		 	$ctr=0;
	    }else{
	    $tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1);   }  
    $ctr++;  }  
	return $tmp; 
}  
function encrypt($txt,$key){  
	srand((double)microtime()*1000000);  
	$encrypt_key = md5($key);
	$ctr=0;  
	$tmp ="";  
	for ($i=0;$i<strlen($txt);$i++){  
		if ($ctr==strlen($encrypt_key)){
			 $ctr=0;
		} else{ 
		$tmp.= substr($encrypt_key,$ctr,1) . (substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1));  }
	$ctr++; }  
	return keyED($tmp,$key);  
}  
function decrypt($txt,$key){  
	$txt = keyED($txt,$key);  
	$tmp = "";  
	for ($i=0;$i<strlen($txt);$i++){  
		$md5 = substr($txt,$i,1);  
		$i++;  
		$tmp.= (substr($txt,$i,1) ^ $md5);  }  
	return $tmp;  
}  ?>

