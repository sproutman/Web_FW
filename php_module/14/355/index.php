<?php
       session_start();
       include("conn/conn.php"); 
	   $data=date("Y-m-d h:m:s");   //获取当前访问时间
       $sss=substr($data,0,7);      //获取当前时间的前6个字符串
	   if($_SESSION[temp]==""){     //判断$_SESSION[temp]==""的值是否为空,其中的temp为自定义的变量
		 //使用数据库存储数据
		 $query="insert into tb_jsq(fwjl,data,data1)values('1','$sss','$data')";
         $result=mysql_query($query);  
		 $_SESSION[temp]=1;   //登录以后,$_SESSION[temp]的值已经不是空值,给$_SESSION[temp]赋一个值1
	   }
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>网站年终访问量曲线分析</title>
<style>
body {background-color: #99FF33;}
.style2 {font-size: 24px}-->
</style>
</head>
<body>
<center>
<td><span class="style2"><strong>网站年终访问量曲线分析</strong></span></td> <br>

<?php  //查询数据库中每个月的访问总数
       $query="select count(*) as total from tb_jsq where data='2006-01'";
       $result=mysql_query($query);
       $hfjl1=mysql_result($result,0,'total');  
       $query="select count(*) as total from tb_jsq where data='2006-02'";
       $result=mysql_query($query);
       $hfjl2=mysql_result($result,0,'total');  
       $query="select count(*) as total from tb_jsq where data='2006-03'";
       $result=mysql_query($query);
       $hfjl3=mysql_result($result,0,'total'); 
       $query="select count(*) as total from tb_jsq where data='2006-04'";
       $result=mysql_query($query);
       $hfjl4=mysql_result($result,0,'total');  
       $query="select count(*) as total from tb_jsq where data='2006-05'";
       $result=mysql_query($query);
       $hfjl5=mysql_result($result,0,'total'); 
       $query="select count(*) as total from tb_jsq where data='2006-06'";
       $result=mysql_query($query);
       $hfjl6=mysql_result($result,0,'total');  
       $query="select count(*) as total from tb_jsq where data='2006-07'";
       $result=mysql_query($query);
       $hfjl7=mysql_result($result,0,'total'); 
       $query="select count(*) as total from tb_jsq where data='2006-08'";
       $result=mysql_query($query);
       $hfjl8=mysql_result($result,0,'total');  
       $query="select count(*) as total from tb_jsq where data='2006-09'";
       $result=mysql_query($query);
       $hfjl9=mysql_result($result,0,'total'); 
       $query="select count(*) as total from tb_jsq where data='2006-10'";
       $result=mysql_query($query);
       $hfjl10=mysql_result($result,0,'total');
       $query="select count(*) as total from tb_jsq where data='2006-11'";
       $result=mysql_query($query);
       $hfjl11=mysql_result($result,0,'total');  
       $query="select count(*) as total from tb_jsq where data='2006-12'";
       $result=mysql_query($query);
       $hfjl12=mysql_result($result,0,'total'); 
?>
<p><img src="gram.php?lmbs=<?php echo $hfjl1;?>,<?php echo $hfjl2;?>,<?php echo $hfjl3;?>,<?php echo $hfjl4;?>,<?php echo $hfjl5;?>,<?php echo $hfjl6;?>,<?php echo $hfjl7;?>,<?php echo $hfjl8;?>,<?php echo $hfjl9;?>,<?php echo $hfjl10;?>,<?php echo $hfjl11;?>,<?php echo $hfjl12;?>"/></p>
</center>
</body>
</html>
