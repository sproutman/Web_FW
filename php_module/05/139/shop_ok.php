<?php
session_start();
if($_SESSION[user]==""&&$_SESSION[pass])
 {
  echo "<script>alert('���ȵ�¼����!');history.back();</script>"; 
  exit;
 }
  $lmbs=strval($_GET[lmbs]); //��ȡ�������ַ���ֵ
  $array=explode("@",$_SESSION[producelist]);  //�п�����ַ������ص����������
  for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$lmbs)
	  {
	     echo "<script>alert('����Ʒ�Ѿ������Ĺ��ﳵ��!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$_GET[lmbs]."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  
  header("location:gwc.php");
?> 
