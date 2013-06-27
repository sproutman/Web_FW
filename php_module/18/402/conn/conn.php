<?php
$conn = new com("adodb.connection");  
$connstr="driver={microsoft access driver (*.mdb)};dbq=". realpath("data/db_news.php");
$conn->open($connstr);
?>