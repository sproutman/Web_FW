<?php
session_start();
include "conn/conn.php";$furl=getenv("HTTP_REFERER");?>
<?php 
       $query="select lxdz,fig from tb_mruser where username='$username' and password='$password'";
       $result=mysql_query($query);
	   $info=mysql_fetch_array($result);
if ($result) {
   if (mysql_num_rows($result)!=0){
       $dljf=mysql_result($result,0,"lxdz"); 
  	   session_register("username");
       session_register("password");
       session_register("lxdz");	
	   $_SESSION[fig]=$info[fig];
	   $_SESSION[username]=$username;
       echo "<font class=\"#ff0000\">$username.��ϲ����¼�ɹ���</font>";
       echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">2����ת��ǰҳ,���Ե�....";
			 }else{
			 echo "��������û�ID<b>$username</b>����ȷ�򲻴���...";
			 echo "<meta http_equiv=\"refresh\" content=\"3;url=$furl\">3���ת��ǰҳ...";
			 
			 }
			} 
			 else{
			 echo mysql_error;
			echo "<font class=\"#ff0000\" >��¼ʧ��!!!</font>" ;
			 
		 }
		 
?>
