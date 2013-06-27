<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片的分栏显示</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
include_once("conn.php");
?>
<body>
<table width="100" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
        <?php
	   $sql="select * from tb_image ";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,3);
		  $i=1; 
		 while(!$rs->eof)
		    { 
             if ($i % 5==0)
		      { 
		 ?>
          <td height="25">
            <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php $fields=$rs->fields(address);echo $fields->value;?>" width="76" height="110" border="0">&nbsp;</div>
		  </td>
        </tr>
        <?php
			  }
			 else
			  {
		?>
  <td height="25"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php $fields=$rs->fields(address);echo $fields->value;?>" width="76" height="110" border="0">&nbsp;</div>
  </td>
   
      <?php
			}
		  $rs->movenext;	
		  $i++;	
		}
	 ?>
	</tr>
  </table></td>
  </tr>
</table>
</body>
</html>
