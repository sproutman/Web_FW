<?php session_start(); include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>ͼƬ��ѯ</title>
</head>
<script language="javascript">
function check(form){
if (document.myform.sel_key.value==""){
	alert("�������ѯ����!");myform.sel_key.focus();return false;
}
}
</script>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url(images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE width="300" align="center" cellPadding=0 cellSpacing=0 style="WIDTH: 300px" VERTICAL-ALIGN: text-top;>
                <TBODY>
                  <TR align="center" valign="middle">
                    <TD width="127" height="21" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">���ͼƬ</a></TD>
                    <TD width="241" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="browse_pic.php">&nbsp;���ͼƬ</a></TD>
                    <TD width="210" style="WIDTH: 90px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a href="query_pic.php" class='navlink' style="CURSOR:hand">&nbsp;&nbsp;��ѯͼƬ</a></TD>
                  </TR>
                </TBODY>
              </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <td height="8" background="images/top.jpg" >&nbsp;</td>
    </TR>
    <TR>
      <td height="191" align="center" background="images/center.jpg" ><table width="600" height="297"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="32" align="center" valign="middle"><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <form  name="myform" method="post" action="">
                    <table width="560" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                      <tr>
                        <td width="100%" height="28" align="center" class="i_table">��ѯ������
                            <select name="sel_tj" id="select">
                              <option value="id">ͼƬID</option>
                              <option value="tpmc" selected>ͼƬ����</option>
                              <option value="author">����</option>
                              <option value="scsj">�ϴ�ʱ��</option>
                            </select>
                    �ؼ���
                    <input name="sel_key" type="text" id="sel_key" size="30">
&nbsp;
                    <input type="submit" name="Submit" value="����" onClick="return check();"></td>
                      </tr>
                    </table>
                </form></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="265" align="center" valign="top">
            <?php
				  if ($_POST["Submit"]=="����"){
				  	 $tj=$_POST[sel_tj];
					 $key=$_POST[sel_key];
					 $sql=mysql_query("select * from tb_tpsc where $tj like '%$key%'");
					 $result=mysql_fetch_array($sql);
				  if($result==false){
				  	echo ("[<font color=red>�Բ�����������ͼƬ��Ϣ������!</font>]");
				  }
				  else{
				 ?>
            <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
              <tr align="left" colspan="2" >
                <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"><span class="tableBorder_LTR"> ��ѯ���</span> </td>
              </tr>
        <td height="192" align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center">
                  <?php 
							  do{
							  ?>
                  <table width="329" border="0" cellpadding="0" cellspacing="2" bgcolor="#EFF7DE">
                    <tr bgcolor="#EFF7DE">
                      <td colspan="4" align="center"><img src="image.php?recid=<?php echo $result[id];?>"  width="200" height="100" border="0" class="hidden_a_line"></td>
                    </tr>
                    <tr bgcolor="#EFF7DE">
                      <td>&nbsp;����:<?php echo $result[tpmc];?></td>
                      <td>����:<?php echo $result[author];?></td>
                      <td>ʱ��:<?php echo $result[scsj];?></td>
                      <td> <img src="images/A_delete.gif" width="52" height="16" alt="ɾ��ͼƬ" onClick="window.location.href='remove.php?pic_id=<?php echo $result[id]?>'"> </td>
                    </tr>
                  </table>
                  <?php  
							}while($result=mysql_fetch_array($sql))
						 ?>
                </td>
              </tr>
          </table></td>
            </table>
            <?php
						}
				 	 }
			        ?> </td>
        </tr>
      </table></td>
    </TR>
    <TR>
      <td height="16" background="images/bottom.jpg" >&nbsp;</td>
    </TR> 
	<TR>
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> ��ӭ���ʲ�����
        ��ʹ��IE
        6.0
        ��1024��768�ֱ������������վ<BR> 
        CopyRight@
        2007
        ���տƼ�����</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
