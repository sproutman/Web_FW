<?php session_start(); include ("../conn/conn.php");$furl=getenv("HTTP_REFERER");?>
<?php
     if($name=="mr" && $mima =="mrsoft"){   //这里的用户名和密码没有录入到数据库,是直接判断的
	 $ip=getenv("remote_addr");//取得IP
	 $new=date("y-m-d h:i:s");
	 session_register(name);
	 session_register(mima);
	 $logsrow="insert into tb_chartroom_logs (loguser,intime ,outtime,ip)values('$name','$new','','$ip')";
	 mysql_query($logsrow);
	
	    echo "管理员登录成功!";
	  echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
	 }else{
	 session_unset();  //unset session variables.
	 session_destroy();  //end session we created earlier.
	 //管理员登录失败
	 echo "<table width='100%' align=center><tr><td align=center>";
	 echo "用户名或密码错误,或者不是管理员<br>";
	 echo "<font color=red>管理员登录失败!</font><br><a href='adminlogin.php'>请重试</a>";
	 echo "</td></tr></table>";  }
?>