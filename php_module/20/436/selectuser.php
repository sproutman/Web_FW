<?php
session_start();
session_unregister("snc");
$usernc=$_GET[usernc];
session_register("snc");
$_SESSION["snc"]=$usernc;
echo "<script>window.location.href='listuser.php';</script>";
?>