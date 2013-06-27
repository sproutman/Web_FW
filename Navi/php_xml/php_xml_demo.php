<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$doc = new DOMDocument('1.0','utf-8');
$doc->formatOutput = true;

$php100 = $doc->createElement('php100');
$php200 = $doc->createElement('php200');
$php300 = $doc->createElement('php300');
$php400 = $doc->createElement('php400');

//$content001
$cc1 = $doc->createTextNode('abc');
$cc2 = $doc->createTextNode('cde');


$php300->appendChild($cc1);
$php400->appendChild($cc2);

$php100->appendChild($php200);
$php200->appendChild($php300);
$php200->appendChild($php400);



$doc->appendChild($php100);
$doc->save("php_xml_demo.xml");
?>
