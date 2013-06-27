<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$doc = new DOMDocument();
$doc->load('01_xml.xml');
//echo $doc->saveXML();

$ip_obj = $doc->getElementsByTagName("IP对象");

//$ip_name = $doc->getElementsByTagName("ip_name");
//$ip_addr = $doc->getElementsByTagName("ip_addr");
//echo $ip_name->item(0)->nodeValue;
//echo $ip_name->item(0)->
echo "</br>";
//echo $ip_name->item(1)->nodeValue;

foreach ($ip_obj as $ipo) {
    $titles = $ipo->getElementsByTagName("ip_name");
    $title = $titles->item(0)->nodeValue;

    $authors = $ipo->getElementsByTagName("ip_addr");
    $author = $authors->item(0)->nodeValue;


    echo "$title - $author\n";
    echo "</br>";
}

//echo "</br>";

//foreach ($ip_addr as $note) {
//    echo $note->nodeValue;
//    echo "</br>";
//}
?>
