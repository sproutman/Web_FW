<?php
session_start();
include_once("class.php");
$carobj=new car();
$carobj->removeitem($_GET[id]);

?>