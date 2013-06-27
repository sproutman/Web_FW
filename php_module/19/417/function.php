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
?>
