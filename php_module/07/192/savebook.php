<?php
class addbook
 {
   
   private $sql1;
   public function __construct($x)
   {
     $this->sql1=$x;
   }
   public function  add()
   {
     include_once("conn.php");
     if(@mssql_query($this->sql1,$conn))
      {
        echo "<script>alert('新书添加成功!');history.back();</script>";
      }
     else
      {
        echo "<script>alert('新书添加失败!');history.back();</script>";
     }
   
   }
 
}
$bookname=$_POST[bookname];
$auto=$_POST[auto];
$pub=$_POST[pub];
$pubtime=$_POST[pubtime];
$sql="insert into tb_book(bookname,auto,pub,pubtime)values('$bookname','$auto','$pub','$pubtime')";
$adbook=new addbook($sql);
$adbook->add();
?>