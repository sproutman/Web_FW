<?php
       session_start();
       include("conn/conn.php"); 
	   $data=date("Y-m-d h:m:s");   //��ȡ��ǰ����ʱ��
       $sss=substr($data,0,7);      //��ȡ��ǰʱ���ǰ6���ַ���
	   if($_SESSION[temp]==""){     //�ж�$_SESSION[temp]==""��ֵ�Ƿ�Ϊ��,���е�tempΪ�Զ���ı���
		 //ʹ�����ݿ�洢����
		 $query="insert into tb_jsq(fwjl,data,data1)values('1','$sss','$data')";
         $result=mysql_query($query);  
		 $_SESSION[temp]=1;   //��¼�Ժ�,$_SESSION[temp]��ֵ�Ѿ����ǿ�ֵ,��$_SESSION[temp]��һ��ֵ1
	   }
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��վ���շ��������߷���</title>
<style>
body {background-color: #99FF33;}
.style2 {font-size: 24px}-->
</style>
</head>
<body>
<center>
<td><span class="style2"><strong>��վ���շ��������߷���</strong></span></td> <br>

<?php  //��ѯ���ݿ���ÿ���µķ�������
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
