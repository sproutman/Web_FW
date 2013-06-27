<?php session_start(); include "conn/conn.php";$furl=getenv("HTTP_REFERER");?>
<?php
    if($denglu=="登录"){
	   $ip=getenv("REMOTE_ADDR");	
	   $new=date("Y-m-d G:i:s");
	   $querys="select * from tb_chartroom_online where username='$username'";
       $results=mysql_query($querys);
       if(mysql_num_rows($results)>0) {  
	  echo "该用户已经存在,请选择其它的用户名,谢谢!!";
       echo "<meta http-equiv=\"Refresh\" content=\"3;url=$furl\">3秒钟转入主页,请稍等......";
	   }else{
	   $queryf="select * from tb_chartroom_user where username='$username'";
	   $resultf=mysql_query($queryf);
	   
	   if(@mysql_num_rows($resultf)>0){
	     session_register("username");
		    $queryA="update tb_chartroom_user set regtime='$new' where username='$username'";
			$resultA=mysql_query($queryA);
	         $queryA="insert into tb_chartroom_online (username,intime,ip,is_online)values('$username','$new','$ip','1')";
          $resultA=mysql_query($queryA);
          $query="update tb_chartroom_logs set intime='$new' where loguser=$username";
          $result=mysql_query($query);       
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=frame.php\">3秒钟转入主页,请稍等......";	
	   }else{
	      $queryd="insert into tb_chartroom_user (username,regtime)values('$username','$new')";
          $resultd=mysql_query($queryd,$id);
		  session_register("username");
          $queryA="insert into tb_chartroom_online (username,intime,ip,is_online)values('$username','$new','$ip','1')";
          $resultA=mysql_query($queryA);
          $query="insert into tb_chartroom_logs (loguser,intime,ip)values('$username','$new','$ip')";
          $result=mysql_query($query);       
            echo "$username.恭喜您登录成功！";
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=frame.php\">3秒钟转入主页,请稍等......";
            }}
			}else{
               echo "<meta http-equiv=\"Refresh\" content=\"0;url=$furl\">"; }
?>