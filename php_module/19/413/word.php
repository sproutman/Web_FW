<?php
class word
{ 

   function start()
    {
      ob_start();
     }

    function save($path)
      {
        $data = ob_get_contents();
        ob_end_clean();
        $this->wirtetoword($path,$data);
     }
   function wirtetoword ($fn,$data)
     {
       $fp=fopen($fn,"wb");
       fwrite($fp,$data);
       fclose($fp);
    }
}

?>