<?php session_start();include("conn/conn.php");
 if($Submit=="�ύ"){
    $array1=array();  //����һ������
    $array2=array();
    $i=0;
while(list($name,$value)=each($_POST)){
 if($value!="�ύ"){
    $array1[$i]=$name;
    $array2[$i]=$value; }
$i++;
} 
    $str=implode(",",$array1);    //���������ַ���
    $str1=implode("','",$array2);
    $str1="'".$str1."'"; 
    $query=mysql_query("insert into tb_form($str) values ($str1) ",$id);
     if($query==true){
	 echo "������ӳɹ�!!";
	 }
}
?>