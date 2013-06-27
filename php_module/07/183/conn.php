<?php
$conn = new com("adodb.connection");  
$connstr="driver={microsoft access driver (*.mdb)}; dbq=". realpath("data/db_database07_187.mdb");
$conn->open($connstr);
?>