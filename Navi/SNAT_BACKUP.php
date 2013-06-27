<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//$srcIP = $_POST["srcIP"];
//$desIP = $_POST["desIP"];
//$iptables = 'iptables -t nat POSTROUTING -s ';
//$jnat = ' -j SNAT --to ';
//$result = $iptables . "" . $srcIP . "" . $jnat . "" . $desIP;
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
        <!--<form name="form" action="SNAT.php" method="post">-->
        <!--<form name="form" action="writeFile.php" method="post">-->
        <!--<div>TODO write content</div>-->
        <h1>BlueDon Web FW</h1>
        <h2>SNAT</h2>
        <h3>Source IP/net section</h3>
        <!--<input type="text" name="srcIP">-->

        <!--// 打开文件同时，打印每一行-->
    <php>
        $myFile = file("ip_Object.txt");
        for ($index = 0; $index < count($myFile); $index++) {
        print($myFile[$index] . "<BR>");
        $temp = $myFile[$index];
        list($name, $addr) = explode(" ", $temp);
        echo "$name,$addr <br>";
    </php>


    <select name="srcIP">
        <option value="volvo" selected="selected" >Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
        <option value="192.168.2.3">qwe</option>
    </select>
    <br>
    <h3>Destination IP/net section</h3>
    <input type="text" name="desIP">
    <br>
    <br>
    <input type="submit" value="Submit" />

    <h2>iptables Generater:</h2>

</form>
<br>


</body>

</html>