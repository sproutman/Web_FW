<?php
session_start();
include "conn/conn.php";
$furl=getenv("http_referer");
       $time=date("y-m-d h:m:s");
           if($zttj){
	          $zhuti=htmlspecialchars($zhuti);
			  $neirong=htmlspecialchars($neirong);
			  $neirong=str_replace("\n","<br>",$neirong);
			  $neirong=str_replace("","&nbsp;",$neirong); 			
              $query="insert into tb_zqlb (zq,zhuti,neirong,username,fbsj)
			          values('$zq','$zhuti','$neirong','$_SESSION[username]','$time')";
			  $result=mysql_query($query); 
	          if($result){
			     echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
				 echo "�����ɹ�!";
			  }else{ echo "��������ʧ��!!"; }    
	       }
		   if($hftj){
	        $date=date("y:m:d h:i:s");
	        $hfzt=htmlspecialchars($hfzt);
			$hfnr=htmlspecialchars($hfnr);
			$hfnr=str_replace("\n","<br>",$hfnr);
			$hfnr=str_replace("","&nbsp;",$hfnr);
			$query="insert into tb_hflb(hfzt,hfnr,hfsj,username,ljid,zq)values('$hfzt','$hfnr','$date','$username','$ljid','$zq')";
			$result=mysql_query($query);  //�ͳ�һ��query�ַ���
			
			if($result){
			
			      echo "�ظ��ɹ�!!";
			      echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
			
			}else{
			   echo "�ظ�ʧ��!!!";
			}
			}
?>
 