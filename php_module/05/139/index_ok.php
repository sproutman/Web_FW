<?php session_start();  
      $user=$_POST[user];
      $pass=$_POST[pass]; 
if($user!="" && $pass!=""){   //判断该用户和密码是否正确
   echo "登录成功!";
   session_register(user);   //注册新的session变量
   session_register(pass); 
   session_register("producelist");  //发给用户一个购物车
	 $producelist="";
   session_register("quatity");    //初始化购物车内没有商品
     $quatity="";
   echo "<meta http-equiv=\"refresh\" content=\"3;url=shop.php\">3秒钟转入主页,请稍等......";
   }else{
    echo "<script>alert('登录失败!');history.back();</script>"; ;
   }
?>