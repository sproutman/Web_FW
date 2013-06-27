<?php session_start();  
      $user=$_POST[user];
      $pass=$_POST[pass]; 
if($user=="mr" && $pass=="mrsoft"){   //判断该用户和密码是否正确
   echo "登录成功!";
   session_register(user);   //注册新的session变量
   session_register(pass); 
   echo "<meta http-equiv=\"refresh\" content=\"3;url=140.php\">3秒钟后转入主页,请稍等......";
   }else{
   echo "登录失败!!";
   echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">3秒钟后转入前页,请稍等......";
   }
?>