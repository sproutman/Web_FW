<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ɼ���ѯϵͳ</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="750" height="70"></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#CC0000"><table width="750" height="25" border="0" cellpadding="0" cellspacing="1">
      <tr>
	    <form name="form1" method="post" action="<?php echo $PHP_SELF;?>">
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">������ѧ�ţ�
          <input type="text" name="sno" size="25"><input type="submit"name="submit"value="��ѯ"></div></td>
		 </form>
      </tr>
	  <?php
	  if($_POST[submit]!="")
	   {
	     include("conn.php");
		 $rs=new com("adodb.recordset");
		 $rs->open("select * from score where sno='".$_POST[sno]."'",$conn,3,1);
		 if($rs->eof|| $rs->bof)
		 {
		 ?>
		<tr>
        <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="center">û�в��ҵ���ѧ���ɼ���</div> </td>
        </tr>
		 <?php 
		 }
		 else
		  { 
		    $sum=0;
			
	  ?> 
	  <tr>
        <td width="170" height="20" bgcolor="#FFFFFF"><div align="center">ѧ��</div></td>
        <td width="170" bgcolor="#FFFFFF"><div align="center">����</div></td>
        <td width="143" bgcolor="#FFFFFF"><div align="center">�༶</div></td>
        <td width="130" bgcolor="#FFFFFF"><div align="center">��Ŀ
        </div></td>
	    <td width="131" bgcolor="#FFFFFF"><div align="center">�ɼ�</div></td>
	  </tr>
	  <?php
	  while(!$rs->eof)
		{
	  ?>
	  <tr>
        <td width="170" height="20" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("sno"); echo $f->value;?></div></td>
        <td width="170" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("sname"); echo $f->value;?></div></td>
        <td width="143" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("sclass"); echo $f->value;?></div></td>
        <td width="130" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("ssubject"); echo $f->value;?></div></td>
	    <td width="131" bgcolor="#FFFFFF"><div align="center">
		<?php 
		$f=$rs->fields("sscore"); 
		echo $f->value;
		if($f->value<60)
		 {
		  $sum++;
		 }
		?></div></td>
	  </tr>
	  <?php
	      $rs->movenext;
		  }
		}
	  }
	  ?>
    </table></td>
  </tr>
</table>
  <?php
	  if($_POST[submit]!="")
	   {
	  
	  ?> 
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="right">�������Ŀ��<?php echo $sum?>��</div></td>
  </tr>
</table>
  <?php
	  }
  ?>
  <table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><div align="center">��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br>Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br><br>�������ڴ���1024*768�ķֱ�����ʹ��</div></td>
    </tr>
  </table>
</body>
</html>
