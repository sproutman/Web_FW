<?php
session_start();
include "conn/conn.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>������ҳ</title>
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
    <TR> 
      <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url(images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> 
          <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE width="237"  align="center" cellPadding=0 cellSpacing=0>
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD width="121" height="20"  style="COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">��������</a></TD> 
                      <TD width="113"  style=" COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="query.php">��ѯ����</a></TD>
                    </TR> 
                  </TBODY> 
                </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
	<td background="images/top.jpg">&nbsp;
	</td>
    </TR>
    <TR>
      <td height="177" align="center" background="images/center.jpg"><table width="600" height="247"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="32" align="center" valign="middle"><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <form  name="myform" method="post" action="">
                    <table width="560" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                      <tr>
                        <td width="100%" height="28" align="center" class="i_table">��ѯ������
                            <select name="sel_tj" id="sel_tj">
                              <option value="title" selected>��������</option>
                              <option value="author">����</option>
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
          <td height="213" align="center" valign="top">
            <?php
				  if ($_POST["Submit"]=="����"){
				  	 $tj=$_POST[sel_tj];
					 $key=$_POST[sel_key];
					 $sql=mysql_query("select * from tb_article where $tj like '%$key%'");
					 $result=mysql_fetch_array($sql);
					 $_SESSION[file_id]=$result[id];
				  if($result==false){
				  	echo ("[<font color=red>�Բ����������Ĳ�����Ϣ������!</font>]");
				  }
				  else{
				 ?>
            <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
              <tr align="left" colspan="2" >
                <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"><span class="tableBorder_LTR"> ��������</span> </td>
              </tr>
        <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="100" valign="top">
                  <?php 
							  do{
							  ?>
                  <table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table">
                    <tr bgcolor="#FFFFFF">
                      <td width="14%" align="center">����ID��</td>
                      <td width="15%"><?php echo $result[id]; ?></td>
                      <td width="11%" align="center">�� ��</td>
                      <td width="18%"><?php echo $result[author]; ?></td>
                      <td width="12%" align="center">����ʱ��</td>
                      <td width="30%"><?php echo $result[now]; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td align="center">��������</td>
                      <td colspan="5">&nbsp;&nbsp;<?php echo $result[title]; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td align="center">��������</td>
                      <td colspan="5"><?php echo $result[content]; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td colspan="3" align="center"><a href="comment.php">��������</a></td>
                      <td colspan="3" align="center">
                        <img src="images/A_delete.gif" width="52" height="16" alt="ɾ����������" onClick="window.location.href='del_file.php?file_id=<?php echo $result[id];?>'">
                      </td>
                    </tr>
                  </table>
                  <?php  
							}while($result=mysql_fetch_array($sql))
						 ?></td>
              </tr>
          </table></td>
            </table>
            <?php
						}
				 	 }
			        ?></td>
        </tr>
      </table></td>
    </TR>
    <TR>
      <td background="images/bottom.jpg">&nbsp;</td>
    </TR> 
    <TR> 
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> ��ӭ���ʲ�����
        ��ʹ��IE
        6.0
        ��1024��768�ֱ������������վ<BR> 
        CopyRight@
        2006
        ���տƼ�����</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
