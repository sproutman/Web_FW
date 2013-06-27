<?php
session_start();
$usernc=$_SESSION["nc"];
include_once("conn/conn.php");

mysql_query("delete from tb_puser where usernc='".$usernc."'",$conn);

session_unregister("nc");
session_unregister("snc");
header("location:index.php");
?>