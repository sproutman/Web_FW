<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过session禁止页面刷新</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "华文仿宋";
	font-weight: bold;
}
.style2 {font-family: "华文琥珀"}
-->
</style>
</head>
<body>
<?php 
//使用文本存储数据
		if($_SESSION[temp]==""){
		 if(($fp=fopen("counter.txt","r"))==false){ echo "打开文件失败!";
		   }else{  $counter=fgets($fp,1024);   //读取文件中数据
		   fclose($fp);                        //关闭文本文件
		   $counter++;                         //计数器增加1
		   $fp=fopen("counter.txt","w");       //以写的方式打开文本文件
		
		   fputs($fp,$counter);                //将新的统计数据增加1
		   fclose($fp);    }                   //关闭文	
//从文本文件中读取统计数据
       if(($fp=fopen("counter.txt","r"))==false){echo "打开文件失败!";}else{
	       $counter=fgets($fp,1024);
	       fclose($fp);
           echo "数字计数器: " .$counter ; }   //输出访问次数
		   $_SESSION[temp]=1;  //登录以后,$_SESSION[temp]的值不为空,给$_SESSION[temp]赋一个值1
		   }else{
		   echo "<script>alert('您不可以刷新本页!!'); history.back();</script>";
		   }
?>
<table width="300" border="0" cellpadding="0" cellspacing="0" background="images/141.jpg">
  <tr>
    <td height="35" align="center"><span class="style1">通过session禁止页面刷新</span></td>
  </tr>
  <tr>
    <td height="40" align="center"><span class="style2">
      <?php  if(($fp=fopen("counter.txt","r"))==false){echo "打开文件失败!";}else{
	       $counter=fgets($fp,1024);
	       fclose($fp);
           echo "网页访问量: " .$counter ; }   //输出访问次数?>
    </span></td>
  </tr>
  <tr>
    <td height="25" align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>