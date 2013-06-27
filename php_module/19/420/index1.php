<table width="349" border="1" align="center">
  <form name="form1" method="post" action="index.php">
  <tr>
    <td height="38">&nbsp;<input type="text" name="name" size="25"></td>
  </tr>
  <tr>
    <td height="39"><div align="center"><input type="submit" name="submit" value="Ìá½»"></div></td>
  </tr>
  </form>
</table>
<?php
if($_POST[submit]!=""){
$name=$_POST[name];
$fp=fopen("aa.txt","r");
$str=fread($fp,filesize("aa.txt"));
$name.=$str;
echo $name;
$fp1=fopen("aa.txt","w");
fwrite($fp1,$name);

}



?>