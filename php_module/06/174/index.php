<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Aceess���ݵ��뵽MySQL���ݿ�</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE3 {font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="450" height="70" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#C0F8F8">
	  <tr>
	    <td height="25" colspan="6" align="center"><span class="STYLE3">Aceess���ݵ��뵽MySQL���ݿ�</span></td>
  </tr>
	  <tr>
        <td width="170" height="22" align="center"><div align="center" class="STYLE1">ѧ��</div></td>
        <td width="170" align="center"><div align="center" class="STYLE1">����</div></td>
        <td width="143" align="center"><div align="center" class="STYLE1">�༶</div></td>
        <td width="130" align="center"><div align="center" class="STYLE1">��Ŀ
        </div></td>
	    <td width="131" align="center"><div align="center" class="STYLE1">�ɼ�</div></td>
	    <td width="131">&nbsp;</td>
	  </tr>
	  <?php include("conn/conn.php");
		 $rs=new com("adodb.recordset");
		 $rs->open("select * from score ",$conn,3,1);	
	   
		 while(!$rs->eof){
	  ?>
	   <form name="form2" method="post" action="index_ok.php?lmbs=<?php $f=$rs->fields("sno"); echo $f->value;?>">
	  <tr>
        <td width="170" height="25"><div align="center">
          <input name="sno" type="text" id="sno" value="<?php $f=$rs->fields("sno"); echo $f->value;?>" size="8">
        </div></td>
        <td width="170"><div align="center">
          <input name="sname" type="text" id="sname" value="<?php $f=$rs->fields("sname"); echo $f->value;?>" size="8">
        </div></td>
        <td width="143" class="STYLE1"><div align="center">
          <input name="sclass" type="text" id="sclass" value="<?php $f=$rs->fields("sclass"); echo $f->value;?>" size="8">
        </div></td>
        <td width="130" class="STYLE1"><div align="center">
          <input name="ssubject" type="text" id="ssubject" value="<?php $f=$rs->fields("ssubject"); echo $f->value;?>" size="8">
        </div></td>
	    <td width="131" class="STYLE1"><div align="center">
		
		<input name="sscore" type="text" id="sscore" value="<?php $f=$rs->fields("sscore"); echo $f->value;?>" size="8">
	    </div></td>
	    <td width="131" class="STYLE1"><input type="submit" name="Submit" value="�ύ"></td>
	  </tr></form>	 
	   <?php
	  
	   
	      $rs->movenext;}
		 
	  ?>
</table>

<table width="450" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#CBF5DD">
  <tr>
    <td height="25" colspan="5" align="center" class="STYLE3">������������</td>
  </tr>
  <tr>
    <td height="22" align="center"><span class="STYLE1">ѧ��</span></td>
    <td align="center"><span class="STYLE1">����</span></td>
    <td align="center"><span class="STYLE1">�༶</span></td>
    <td align="center"><span class="STYLE1">��Ŀ </span></td>
    <td align="center"><span class="STYLE1">�ɼ�</span></td>
  </tr>
<?php include("conn/conns.php"); 
      $query=mysql_query("select * from tb_access");
      if($query==true){
	  while($myrow=mysql_fetch_array($query)){
?>
    <tr>
    <td height="21" align="center"><span class="STYLE1"><?php echo $myrow[sno];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[sname];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[sclass];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[ssubject];?></span></td>
    <td align="center"><span class="STYLE1"><?php echo $myrow[sscore];?></span></td>
  </tr>
  <?php }}?>
</table>
</body>
</html>
