<link rel="stylesheet" type="text/css" href="style.css">
<table width="160" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="165" height="32"><img src="images/tell_top.gif" width="165" height="32" border="0" usemap="#Map"></td>
        </tr>
        <tr>
          <td height="52" background="images/tell_center.gif"><table width="148" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <?php
			       include_once("conn.php");
				   include_once("function.php");
				   $sql=mysql_query("select * from tb_tell order by createtime desc limit 0,7",$conn);
				   $info=mysql_fetch_array($sql);
				   if($info==false)
				    {
				   ?>
              <tr> 
                <td width="17" height="20"><img src="images/mark_0.gif" width="10" height="10"></td>
                <td width="333">ÔÝÎÞ¹«¸æ</td>
              </tr>
              <tr  > 
                <td height="5"></td>
                <td height="5" background="images/back_point_write.gif"></td>
              </tr>
              <?php
					   }
					 else
					 {
					  do
					   {
					 ?>
              <tr> 
                <td width="17" height="20"><img src="images/mark_0.gif" width="10" height="10"></td>
                <td width="333"> 
                  <?php 
			   	  
			  echo chinesesubstr($info[name],0,16);
			  if(strlen($info[name])>16)
			  {
			   echo " ...";
			  }
			  ?>
                  </td>
              </tr>
              <tr > 
                <td height="5"></td>
                <td height="5"  background="images/back_point_write.gif"></td>
              </tr>
              <?php
					      }
					    while($info=mysql_fetch_array($sql));
					   }
					?>
            </table></td>
        </tr>
        <tr>
          <td width="165" height="12"><img src="images/tell_bottom.gif" width="165" height="12"></td>
        </tr>
      </table>
      