<?php
include_once("top.php");

if($_SESSION["nc"]=="")
 {
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='index.php';</script>";
  exit;
 }

?>

<table width="800" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/top.gif" width="800" height="23"></td>
  </tr>
</table>
<table width="800" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#82A3DF"><table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="48" height="25" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;&nbsp;<img src="images/menubar_left.gif" width="9" height="9">&nbsp;&nbsp;</div></td>
        <td width="749" background="images/menubar.gif" bgcolor="#FFFFFF"><marquee>��ӭ����¼���տƼ�������!&nbsp;��ǰ�û���<?php echo $_SESSION["nc"];?>&nbsp;&nbsp;
        </marquee></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><table width="200" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td></td>
          </tr>
        </table>
          <table width="780" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="600" height="250" valign="top" bgcolor="#EAEFF7"><table width="600" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td bgcolor="#EAEFF7">&nbsp;&nbsp;&nbsp;�������ݣ�</td>
                  </tr>
                </table>
                  <div align="center">
                    <iframe frameborder="0" id="center" name="center" scrolling="Yes" src="listchat.php" 
      style="HEIGHT: 220; VISIBILITY: inherit; WIDTH: 580px; Z-INDEX: 2"> </iframe>
                  </div></td>
              <td width="10" rowspan="2" background="images/line_down.gif"></td>
              <td width="170" rowspan="2" bgcolor="#CCD8EC" valign="top"><div align="center">
                  <table width="100" height="25" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>���������</td>
                    </tr>
                  </table>
                <iframe frameborder="0" id="right" name="right" scrolling="Yes" src="listuser.php" 
      style="HEIGHT: 360; VISIBILITY: inherit; WIDTH: 160px; Z-INDEX: 2"> </iframe>
              </div></td>
            </tr>
            <tr>
              <td height="150" valign="top" bgcolor="#CCD8EC"><script language="JavaScript" type="text/javascript">
			  function chkinput(form){
			    if(form.bbs_content.value==""){
				  alert("�Բ�����������������!");
				  form.bbs_content.select();
				  return(false);
				}
				 if(form.touser.value=="��ѡ������"){
				  alert("��ѡ������!");
				
				  return(false);
				}
				if(form.touser.value=="�����˵�¼"){
				  alert("�����˵�¼!");
				
				  return(false);
				}
				
				return(true);
			  }
			</script>
                  <form action="saveword.php" method="post" name="form_bbs" id="form_bbs"  onsubmit="return chkinput(this)">
                    <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td bgcolor="#CCD8EC"><div align="left">�������������ݣ�</div></td>
                      </tr>
                    </table>
                    <table width="500"  border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><textarea name="bbs_content" cols="85" rows="6" class="inputcss"></textarea></td>
                      </tr>
                    </table>
                    <table width="500" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><div align="center"> ���͸���
                              <input type="text" name="touser" size="12" disabled="disabled" 
						
						value="<?php
						$usernc=trim($_SESSION["nc"]);
					    include("conn/conn.php");
					    $sql=mysql_query("select * from tb_puser where usernc='".$usernc."'",$conn);
					    $info=mysql_fetch_array($sql);
					    if($info[mark]==1){
						    if($_SESSION["snc"]==""){
						      echo "������";
							 }else{
							  echo $_SESSION["snc"];
							 } 
						 }
						 else{
						 $sqlc=mysql_query("select count(*) as total from tb_puser where online=1 and mark=1",$conn);	
					     $infoc=mysql_fetch_array($sqlc);
						 if($infoc[total]==0)
						  {
						    echo "��ѡ������";
						  }else{		
							if($_SESSION["snc"]==""){
						      echo "��ѡ������";
							 }else{
							  echo $_SESSION["snc"];
							 }
							}  
						 }  
						?>">
						
						<input type="hidden" name="touser1" 
						
						value="<?php
						$usernc=trim($_SESSION["nc"]);
					    include("conn/conn.php");
					    $sql=mysql_query("select * from tb_puser where usernc='".$usernc."'",$conn);
					    $info=mysql_fetch_array($sql);
					    if($info[mark]==1)
					     {
						  if($_SESSION["snc"]==""){
						      echo "������";
							 }else{
							  echo $_SESSION["snc"];
							 } 
						 }
						 else
						 {
						  if($infoc[total]==0)
						  {
						    echo "��ѡ������";
						  }else{	
						    if($_SESSION["snc"]==""){
						      echo "��ѡ������";
							 }else{
							  echo $_SESSION["snc"];
							 }
							}  
						 }  
						?>">
                          &nbsp;&nbsp;
                          <input type="submit" name="submit" value="����" class="buttoncss" />
                          &nbsp;&nbsp;
                          <input name="reset" type="reset" class="buttoncss" value="��д">
                        </div></td>
                      </tr>
                    </table>
                  </form></td>
            </tr>
          </table>
          <table width="200" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="800" height="6" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>