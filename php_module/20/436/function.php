<?php
function unhtml($content)
 {
    $content=htmlspecialchars($content);
    $content=str_replace(chr(13),"<br>",$content);
    $content=str_replace(chr(32),"&nbsp;",$content);
    $content=str_replace("¡¾","<",$content);
    $content=str_replace("¡¿",">",$content);
    $content=str_replace("|_|"," ",$content);
   return trim($content);
 }
 
 function getday($now)
 {
   $day=intval(substr($now,11,2));
   $x=$day+8;
   if($x>=24)
   {
     $x=$x-24;
   }
   return substr($now,0,11).$x.substr($now,13,6);
 } 
?>
