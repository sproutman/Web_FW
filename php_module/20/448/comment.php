<?php
session_start();
include "conn/conn.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../CSS/style.css" rel="stylesheet">
<title>������ҳ</title>
</head>
<script language="javascript">
function check(){
if (document.myform.txt_content.value==""){
	alert("�������ݲ���Ϊ��!");myform.txt_content.focus();return false;
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
              <TD height="29" align="center" valign="middle"> <TABLE width="255"  align="center" cellPadding=0 cellSpacing=0>
                <TBODY>
                  <TR align="center" valign="middle">
                    <TD width="121" height="24"  style="COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">��������</a></TD>
                    <TD width="132"  style=" COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="query.php">��ѯ����</a></TD>
                  </TR>
                </TBODY>
              </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
	<td width="759" height="13" background="images/top.jpg">&nbsp;
	</td>
    </TR>
    <TR>
      <td height="140" align="center" background="images/center.jpg"><table width="600" height="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="130" align="center" valign="middle"><table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
              <tr align="left" colspan="2" >
                <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"><img src="images/fig_03.gif" width="18" height="22"></SPAN></span><span class="tableBorder_LTR"> ��������</span> </td>
              </tr>
        <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <?php 
									$sql=mysql_query("select * from tb_article where id = ".$_SESSION[file_id]);
									$result=mysql_fetch_array($sql);
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
                </table></td>
              </tr>
          </table></td>
          </table></td>
        </tr>
        <tr>
          <td height="153" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?>
              <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"><img src="images/fig_03.gif" width="18" height="22"></SPAN></span><span class="tableBorder_LTR"> �鿴�������</span> </td>
                </tr>
                <?php
						if ($page){
						   $page_size=2;     //ÿҳ��ʾ2����¼
						   $query="select count(*) as total from tb_filecomment where fileid='$_SESSION[file_id]' order by id desc";   
							$result=mysql_query($query);       //��ѯ�ܵļ�¼����
							$message_count=mysql_result($result,0,"total");       //Ϊ������ֵ
							$page_count=ceil($message_count/$page_size);	  //���ݼ�¼��������ÿҳ��ʾ�ļ�¼��������ֵ�ҳ��
							$offset=($page-1)*$page_size;			//������һҳ�ӵڼ������ݿ�ʼѭ��  
							for ($i=1; $i<2; $i++) {         //����ÿҳ��ʾ���м�¼��Ϣ
							if ($i==1) {
								$sql=mysql_query("select * from tb_filecomment where fileid='$_SESSION[file_id]' order by id desc limit $offset, $page_size");			
								$result=mysql_fetch_array($sql);
								}
						   if($result==false){
						     echo "��������������Ϣ";
						   }else{
							do{
							?>
                <tr>
                  <td height="57" align="center" valign="top" ><table width="480"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table">
                      <tr bgcolor="#FFFFFF">
                        <td width="14%" align="center">����ID��</td>
                        <td width="15%"><?php echo $result[id]; ?></td>
                        <td width="11%" align="center">������</td>
                        <td width="18%"><?php echo $result[username]; ?></td>
                        <td width="12%" align="center">����ʱ��</td>
                        <td width="30%"><?php echo $result[datetime]; ?></td>
                      </tr>
                      <tr bgcolor="#FFFFFF">
                        <td align="center">��������</td>
                        <td colspan="5"><?php echo $result[content]; ?></td>
                      </tr>
                  </table></td>
                </tr>
                <?php
							}while($result=mysql_fetch_array($sql));
							}
							?>
              </table>
              <table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td width="52%">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>/<?php echo $page_count;?>ҳ ��¼��<?php echo $message_count;?> ��&nbsp;</td>
                  <td align="right" class="hongse01">
                    <?php
				  if($page!=1)
				   {
				     echo  "<a href=comment.php?page=1>��ҳ</a>&nbsp;";
					 echo "<a href=comment.php?page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=comment.php?page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=comment.php?page=".$page_count.">βҳ</a>";
				   }
				 } 
				 }
				?>
                  </td>
                </tr>
            </table></td>
        </tr>
        <tr>
          <td height="188" align="center" valign="top">
            <form name="myform" method="post" action="check_comment.php">
              <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"><img src="images/fig_03.gif" width="18" height="22"></SPAN></span><span class="tableBorder_LTR"> ��������</span> </td>
                </tr>
          <td height="112" align="center" valign="top" >
              <input name="htxt_fileid" type="hidden" value="<?php echo $_SESSION[file_id];?>">
              <table width="500"  border="1" cellpadding="1" cellspacing="0" bordercolor="#D6E7A5" bgcolor="#FFFFFF">
                <tr>
                  <td align="center">��Ҫ����</td>
                  <td width="410"><textarea name="txt_content" cols="66" rows="8" id="txt_content" ></textarea></td>
                </tr>
	            <tr>
                  <td align="center">��&nbsp;��&nbsp;��</td>
                  <td width="410"><input name="username" type="text" id="username" size="20"></td>
	            </tr>			
                <tr align="center">
                  <td colspan="2"><input type="submit" name="submit" value="�ύ" onclick="return check();">
&nbsp;
                    <input type="reset" name="submit2" value="����"></td>
                </tr>
            </table></td>
              </table>
          </form></td>
        </tr>
      </table></td>
    </TR>
    <TR>
      <td height="25" background="images/bottom.jpg">&nbsp;</td>
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
