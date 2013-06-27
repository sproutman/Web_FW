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

<HTML>
    <HEAD>
        <TITLE>SNAT</TITLE>
    </HEAD>
    <BODY>
        <form name="form" action="SNAT.php" method="post">
            <!--<form name="form" action="writeFile.php" method="post">-->
            <!--<div>TODO write content</div>-->
            <h1>BlueDon Web FW</h1>
            <h2>SNAT</h2>
            <h3>Source IP/net section</h3>
            <!--<input type="text" name="srcIP">-->

            <!--// 打开文件同时，打印每一行-->
            <?
            $myFile = file("ip_Object.txt");
             $arr=array("Internal => 192.16.3.1");
             $array1;
             $array2;
            for ($index = 0; $index < count($myFile); $index++) {
//                print($myFile[$index] . "<BR>");
//
                //把 文件中每一行分裂成 两个变量

                $temp = $myFile[$index];
//                print_r($temp);

                list($name, $addr) = explode(" ", $temp);
                echo "$name,$addr <br>";
                $array1[$index] = $name;
                $array2[$index] = $addr;
//                echo $arr[$name];
            }

            echo'<select name="srcIP">';
//            $arr = array(1, 2, 3, 4);
//            foreach ($arr as &$value) {
//                $value = $value * 2;
//            }
            $index = 0;
            foreach ($array2 as &$value ) {
                echo'<option value="' . $value . '">' . $array1[$index] .'</option>';
                $index = $index + 1;
            }
            echo'</select>';
            ?>


<!--            <select name="srcIP">
                <option value="volvo" selected="selected" >Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
                <option value="192.168.2.3">qwe</option>
            </select>-->
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
    </BODY>

    <br>
</HTML>
