<?php
$conn=new com("adodb.connection");
$connstr="provider=microsoft.jet.oledb.4.0;data source=".realpath("./data/score.mdb"); 
$conn->open($connstr);
?>