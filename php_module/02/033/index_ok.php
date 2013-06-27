<?php session_start();include("conn/conn.php");
 if($Submit=="提交"){
    $array1=array();  //定义一个数组
    $array2=array();
    $i=0;
while(list($name,$value)=each($_POST)){
 if($value!="提交"){
    $array1[$i]=$name;
    $array2[$i]=$value; }
$i++;
} 
    $str=implode(",",$array1);    //将数组变成字符串
    $str1=implode("','",$array2);
    $str1="'".$str1."'"; 
    $query=mysql_query("insert into tb_form($str) values ($str1) ",$id);
     if($query==true){
	 echo "数据添加成功!!";
	 }
}
?>