<?php session_start();$furl=getenv("HTTP_REFERER"); ?>
<?php 
   session_unregister(username);
   session_unregister(password);
   echo "<p><meta http-equiv=\"Refresh\" content=\"3;url=$furl\">�û���ע��3����ת����ҳ,���Ե�...</p>";
?>

