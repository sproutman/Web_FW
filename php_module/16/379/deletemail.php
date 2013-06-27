<?php
session_start();
include("mailclass.php");
 $rec=new pop3($_SESSION[host],110,10);
 $rec->open();
 $rec->login($_SESSION[user],$_SESSION[pass]);
 $rec->dele($_GET[del]);
 $rec->close();
 header("location:receivemail.php");

?>