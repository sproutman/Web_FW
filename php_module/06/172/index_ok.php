<?php include_once("conn/conns.php");
    if($Submit==true){
    $k=0;
    for($i=0;$i<count($_POST)/6-1;$i++){
     //echo $_POST["$k@0"];
     //echo $_POST["$k@1"];
    $query=mysql_query("insert into $table_name values('".$_POST["$k@0"]."','".$_POST["$k@1"]."','".$_POST["$k@2"]."','".$_POST["$k@3"]."','".$_POST["$k@4"]."','".$_POST["$k@5"]."')",$id);
     $k++;
	   if($query==false){echo "失败!!"; exit;}
	 }
     echo "数据导入成功!!";
   }
?>