<?php
$conn=new com("adodb.connection");
$connstr="provider=microsoft.jet.oledb.4.0;data source=".realpath("./data/db_database07_186.mdb"); 
$conn->open($connstr);
?>