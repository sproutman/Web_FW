<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$doc = new DOMDocument('1.0','utf-8');
$doc->formatOutput = true;

$root = $doc->createElement('root');
$index = $doc->createElement('index');
$id = $doc->createAttribute('id');
$newsid = $doc->createTextNode('1');
$newsco = $doc->createTextNode('content');
$id->appendChild($newsid);

$index->appendChild($id);
$index->appendChild($newsco);
$root->appendChild($index);

$doc->appendChild($root);

$doc->save("php100.xml");

?>
