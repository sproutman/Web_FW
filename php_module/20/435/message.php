<?php session_start(); include("conn/conn.php");$furl=getenv("http_referer");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����¼��</title>
</head>
<body>
<?php 
$furl=getenv("http_referer");
$username=$_SESSION['username'];
$q="select * from tb_chartroom_online where username='$username'";
$r=mysql_query($q);
$w=mysql_num_rows($r);
        $ip=getenv(remote_addr);
	     $dt=date("y-m-d G:i:s");  
		 if($username!=""){ 
	           if($select2=="������"){   //����Ƕ�������˵ʱ���뵽���ݿ������ֵ
	              $query="insert into tb_chartroom_messages (touser,fromuser,time,content,color)values('������','$username','$dt','$message','$color')";
				
	           }else{   //����ǶԵ�����"$select2"˵,����������ֵ
	              $query="insert into tb_chartroom_messages (touser,fromuser,time,content,color)values('$select2','$username','$dt','$message','$color')"; }   
	             $result=mysql_query($query); 
	        echo "<meta http-equiv=\"Refresh\" content=\"0;url=software_main.php\">";
			} else{
			  echo "�����µ�¼����";
			}
?>
</body>
</html>
