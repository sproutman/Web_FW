<?php
include("conn.php");
$carrier="吉林省明日科技有限公司";
$userid=trim($_POST[regtel]);
$password=trim($_POST[regpwd]);
$content=trim($_POST[mess]);
while(list($name,$value)=each($_POST))
{
  if(is_numeric($name)==true)
  {
   $mobilenumber=trim($_POST[tel]);
   $sql=mysql_query("select * from message where id='".$name."'",$conn);
   $info=mysql_fetch_array($sql);
   $mobilenumber=$name;
   $msgtype="Text";
   include('nusoap/lib/nusoap.php');
   $s=new soapclient('http://smsinter.sina.com.cn/ws/smswebservice0101.wsdl','WSDL');
   $s->call('sendXml',array('parameters' =>array('carrier' => $carrier,'userid'=> $userid,'password' => $password,'mobilenumber' => $mobilenumber,'content' => $content,'msgtype' => $msgtype)));
   echo "<script>alert('短信发送成功!');history.back();</script>";
  
  }
}

?>
