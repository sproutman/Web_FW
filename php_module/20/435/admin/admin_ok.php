<?php session_start(); include ("../conn/conn.php");$furl=getenv("HTTP_REFERER");?>
<?php
     if($name=="mr" && $mima =="mrsoft"){   //������û���������û��¼�뵽���ݿ�,��ֱ���жϵ�
	 $ip=getenv("remote_addr");//ȡ��IP
	 $new=date("y-m-d h:i:s");
	 session_register(name);
	 session_register(mima);
	 $logsrow="insert into tb_chartroom_logs (loguser,intime ,outtime,ip)values('$name','$new','','$ip')";
	 mysql_query($logsrow);
	
	    echo "����Ա��¼�ɹ�!";
	  echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
	 }else{
	 session_unset();  //unset session variables.
	 session_destroy();  //end session we created earlier.
	 //����Ա��¼ʧ��
	 echo "<table width='100%' align=center><tr><td align=center>";
	 echo "�û������������,���߲��ǹ���Ա<br>";
	 echo "<font color=red>����Ա��¼ʧ��!</font><br><a href='adminlogin.php'>������</a>";
	 echo "</td></tr></table>";  }
?>