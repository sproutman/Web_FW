<?php session_start();  
      $user=$_POST[user];
      $pass=$_POST[pass]; 
if($user!="" && $pass!=""){   //�жϸ��û��������Ƿ���ȷ
   echo "��¼�ɹ�!";
   session_register(user);   //ע���µ�session����
   session_register(pass); 
   session_register("producelist");  //�����û�һ�����ﳵ
	 $producelist="";
   session_register("quatity");    //��ʼ�����ﳵ��û����Ʒ
     $quatity="";
   echo "<meta http-equiv=\"refresh\" content=\"3;url=shop.php\">3����ת����ҳ,���Ե�......";
   }else{
    echo "<script>alert('��¼ʧ��!');history.back();</script>"; ;
   }
?>