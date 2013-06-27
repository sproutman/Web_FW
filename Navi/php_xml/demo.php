<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$doc = new DOMDocument('1.0','utf-8');
$doc->formatOutput = true;

$php100 = $doc->createElement('php100');
$doc->appendChild($php100);

$name = $doc->createElement('name');
$name->appendChild($doc->createTextNode('100'));
$php100->appendChild($name);


$doc->save("demo.xml");
?>
