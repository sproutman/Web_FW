<?php include "conn/conn.php";if ($page=="") {$page=1;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���տƼ���̳</title>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #3333CC;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #FF0000;
}
.style1 {	font-size: 9pt;
	font-family: "����";
	font-weight: normal;
}
.style2 {	font-size: 12px;
	font-family: "����";
}
body {
	background-color: #EFF3FF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
td{
font-size:9pt;
}
-->
</style></head>

<body>
<center>
  <table width="776" border="0" cellpadding="0" cellspacing="0">
    <tr align="center" valign="middle">
      <td colspan="3"><?php include "head.php";?></td>
    </tr>
    <tr>
      <td width="109" height="25" background="images/2.gif">&nbsp;</td>
      <td width="531" align="right" valign="middle" background="images/2.gif"><marquee direction="left" scrollamount="1" scrolldelay="7" onMouseOver="this.stop();" onMouseOut="this.start();">
      <img src="images/run.gif"  width="19" height="18">��ӭ�������տƼ���վ�� &nbsp;&nbsp;<?php echo $date;?>
                        </marquee></td>
      <td width="136" background="images/2.gif">&nbsp;</td>
    </tr>
  </table>
</center>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" background="images/9.gif">
  <tr align="center">
    <td  colspan="6" valign="top" class="style1"><table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="161" height="31" align="center">== <?php echo $zq;?>ר�� ==</td>
          <td width="615">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr align="center" bgcolor="#B2C0EF">
    <td width="53" height="29" class="style1">״̬</td>
    <td width="429" class="style1">��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ��</td>
    <td width="82" class="style1">����</td>
    <td width="76" class="style1">�ظ�/����</td>
    <td width="136" class="style1">����ʱ�� </td>
  </tr>
</table>
<table width="776" height="29"  border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 
  if ($page){
	$page_size=4;     //ÿҳ��ʾ4����¼
	$query="select count(*) as total from  tb_zqlb where zq='$zq'";   
	$result=mysql_query($query);       //��ѯ�ܵļ�¼����
	$message_count=mysql_result($result,0,"total");       //Ϊ������ֵ
	$page_count=ceil($message_count/$page_size);	  //���ݼ�¼��������ÿҳ��ʾ�ļ�¼��������ֵ�ҳ��
	$offset=($page-1)*$page_size;			//������һҳ�ӵڼ������ݿ�ʼѭ��  
	for ($i=1; $i<2; $i++) {         //����ÿҳ��ʾ���м�¼��Ϣ
		if ($i==1){
		    $sql=mysql_query("select * from tb_zqlb where zq='$zq' order by id desc limit $offset, $page_size");			
			$myrow=mysql_fetch_array($sql);
		}
	if($result!=true){
	  echo "���޼�¼��";
   }else{
  do{
   ?>
  <tr>
    <td height="29" align="center"><table width="776" border="0" cellpadding="0" cellspacing="0" background="images/10.gif"  >
      <tr>
        <td height="26"><table width="776" height="27" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="52" align="center"><img src="images/reader.gif" width="16" height="16"></td>
            <td width="431" height="26" align="center" class="style1"><a href="zthf.php?zhuti=<?php echo urlencode($myrow[zhuti]);?>&lmbs=<?php echo $myrow[id];?>"><?php echo $myrow[zhuti];?></a></td>
            <td width="82" align="center" class="style1"><?php echo $myrow[username];?></td>
            <td width="76" align="center" class="style1">
              <?php
	    $quer="select count(*) as hfjl from tb_hflb where ljid='$myrow[id]'";
		$resul=mysql_query($quer);
	    $hfjl=mysql_result($resul,0,'hfjl');
	    echo $hfjl;
		?>
  /<?php echo $myrow[fwjl];?>
            <td width="135" align="center" class="style1"><?php echo $myrow[fbsj];?></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
    <?php }while($myrow=mysql_fetch_array($sql));}?>
  </tr>
</table>
              <table width="776" height="19" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#B2C0EF">
                  <td width="26%">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>/<?php echo $page_count;?>ҳ ��¼��<?php echo $message_count;?> ��&nbsp;</td>
                  <td width="74%" align="right" class="hongse01">
                    <?php
				  if($page!=1){
				     echo  "<a href=lmzy.php?page=1&zq=".$zq.">��ҳ</a>&nbsp;";
					 echo "<a href=lmzy.php?page=".($page-1)."&zq=".$zq.">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				      echo "<a href=lmzy.php?page=".($page+1)."&zq=".$zq.">��һҳ</a>&nbsp;";
				      echo  "<a href=lmzy.php?page=".$page_count."&zq=".$zq.">βҳ</a>";
				   }
				  } 
				  }
				?>
&nbsp;&nbsp;&nbsp; </td>
                </tr>
</table>
<div align="center"><?php include"under.php"?></div>
</body>
</html>
