<?php
$dbname=$_POST[dbname];
$tbname=$_POST[tbname];
mysql_connect("localhost","root","root");
mysql_query("set names gb2312");
mysql_query("drop database ".$dbname."if exists");
mysql_query("create database ".$dbname."");
mysql_query("use ".$dbname."");
mysql_query("drop table ".$tbname."if exists");
mysql_query("CREATE TABLE ".$tbname."(
`id` INT( 8 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`bookname` VARCHAR( 50 ) NOT NULL ,
`pubname` VARCHAR( 50 ) NOT NULL ,
`writer` VARCHAR( 50 ) NOT NULL 
) ENGINE = MYISAM ;");

 $conn=new com("adodb.connection");
 $connstr="Driver={Microsoft Excel Driver (*.xls)};DBQ=".realpath("excel/book.xls");
 $conn->open($connstr);
 $sql="select * from [Sheet1$]";
 $rs=$conn->execute($sql);
 while(!$rs->eof)
 {
   $fields=$rs->fields(id);
   $id=$fields->value;
   $fields=$rs->fields(bookname);
   $bookname=$fields->value;
   $fields=$rs->fields(pubname);
   $pubname=$fields->value;
   $fields=$rs->fields(writer);
   $writer=$fields->value;
   mysql_query("insert into ".$tbname."(id,bookname,pubname,writer)values('$id','$bookname','$pubname','$writer')");
  $rs->movenext;
 }
echo "<script>alert('数据导出成功!');history.back();</script>";
?>