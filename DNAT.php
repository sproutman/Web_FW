<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$srcIP = $_POST["DIP"];
$desIP = $_POST["DDIP"];
$iptables = 'iptables -t nat PREROUTING -d ';
$protocol = $_POST["protocol"];
$port = $_POST["port"];
$jnat = ' -j DNAT --to ';
$pp =' -p ';
$ddport = " -dport ";
$result = $iptables."".$srcIP."".$pp."".$protocol."".$ddport."".$port."".$jnat."".$desIP;
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
        <form name="form" action="DNAT.php" method="post">
        <!--<div>TODO write content</div>-->
        <h1>BlueDon Web FW</h1>
        <h2>DNAT</h2>
        
        <h3>Source IP/net section</h3>
        <input type="text" name="DIP">
        <br>
        
        <h3>protocol</h3>
        <input type="text" name="protocol">
        <br>
        
        <h3>port</h3>
        <input type="text" name="port">
        <br>
        
        <h3>desIP</h3>
        <input type="text" name="DDIP">
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
