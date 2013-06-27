<?php
$conn = new com("adodb.connection");  
$connstr="driver={microsoft access driver (*.mdb)}; dbq=". realpath("data/db_database12_185.mdb");
$conn->open($connstr);
?>