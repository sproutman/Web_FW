<?php session_start();  
      $user=$_POST[user];
      $pass=$_POST[pass]; 
if($user=="mr" && $pass=="mrsoft"){   //�жϸ��û��������Ƿ���ȷ
   echo "��¼�ɹ�!";
   session_register(user);   //ע���µ�session����
   session_register(pass); 
   echo "<meta http-equiv=\"refresh\" content=\"3;url=140.php\">3���Ӻ�ת����ҳ,���Ե�......";
   }else{
   echo "��¼ʧ��!!";
   echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">3���Ӻ�ת��ǰҳ,���Ե�......";
   }
?>