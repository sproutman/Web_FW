<?php

//<对象配置> 
//  <IP对象> 
//    <ip_name>LAN1</ip_name>  
//    <ip_addr>192.168.145.2</ip_addr> 
//  </IP对象>  
//  <IP对象> 
//    <ip_name>LAN2</ip_name>  
//    <ip_addr>193.168.145.2</ip_addr> 
//  </IP对象> 
//</对象配置>

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$mac_name    = $_POST["mac_name"];
//echo $mac_name;
$mac_address = $_POST["mac_address"];        
        
//header
$doc = new DOMDocument('1.0','utf-8');
//$doc->formatOutput = true;
$doc->load("demo_demo.xml");

$root = $doc->getElementsByTagName("对象配置")->item(0);
$mac_node = $doc->createElement("MAC对象");
//

$mac_nm = $doc->createElement("MAC名称");
$mac_nm->nodeValue="$mac_name";
$mac_node->appendChild($mac_nm);

$mac_ad = $doc->createElement("MAC值");
$mac_ad->nodeValue="$mac_address";
$mac_node->appendChild($mac_ad);

$root->appendChild($mac_node);
$doc->save("demo_demo.xml");


?>
