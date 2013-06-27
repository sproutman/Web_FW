<?php
class excel
{ 

   function start()
    {
      ob_start();
     }

    function save($path)
      {
        $data = ob_get_contents();
        ob_end_clean();
        $this->wirtetoexcel($path,$data);
     }
   function wirtetoexcel ($fn,$data)
     {
       $fp=fopen($fn,"wb");
       fwrite($fp,$data);
       fclose($fp);
    }
}

?>