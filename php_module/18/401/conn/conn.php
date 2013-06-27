<?php
$conn = new com("adodb.connection");  
$connstr="driver={microsoft access driver (*.mdb)};pwd=mrsoft; dbq=". realpath("data/db_bookinfo.mdb");
$conn->open($connstr);
?>