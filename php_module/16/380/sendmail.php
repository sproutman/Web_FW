<?php
 include("conn.php");
 include("function.php");
$mailfrom=$_POST[from];                                                     
$mailsubject=$_POST[subject];                      
$mailbody = unhtml($_POST[content]);
$headers .= "MIME-Version: 1.0 \n";                      
$headers .= "Content-type: text/html; charset=iso-8859-1 \n"; 
$headers .= "From:$mailfrom\r\n"; 
$sum=0;
 while(list($name,$value)=each($_POST))
  {
  $sql=mysql_query("select * from user where id='".$name."'",$conn);
  $info=mysql_fetch_array($sql);
  if($info!=false)
    { 
     $mailto=trim($info[address]); 
     if(@mail($mailto, $mailsubject,$mailbody,$headers)==false)
      {
        echo "<script>alert('�ʼ�δ���ͳɹ���');history.back()</script>";
	    exit;
      }
	  $sum++;
	 }       
  }
 if($sum==0)
  {
     echo "<script>alert('��ѡ���ռ��ˣ�');history.back()</script>"; 
  }
  else
   { 
     echo "<script>alert('�ʼ����ͳɹ���');history.back()</script>"; 
  }	  

?>