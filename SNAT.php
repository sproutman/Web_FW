<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$srcIP = $_POST["srcIP"];
$desIP = $_POST["desIP"];
$iptables = 'iptables -t nat POSTROUTING -s ';
$jnat = ' -j SNAT --to ';
$result = $iptables."".$srcIP."".$jnat."".$desIP;
//echo $srcIP;
//echo $desIP;
?>


<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form name="form" action="SNAT.php" method="post">
        <!--<div>TODO write content</div>-->
        <h1>BlueDon Web FW</h1>
        <h2>SNAT</h2>
        <h3>Source IP/net section</h3>
        <input type="text" name="srcIP">
        <br>
        <h3>Destination IP/net section</h3>
        <input type="text" name="desIP">
        <br>
        <br>
        <input type="submit" value="Submit" />

        <h2>iptables Generater:</h2>
        <p>
            
            <?php
            echo $result;
            ?>
        </p>
        </form>
        <br>
        
       
    </body>
</html>
