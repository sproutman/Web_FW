<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE2 {color: #000000}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.bookname.value==""){
	  alert("������ͼ������!");
	  form.bookname.select();
	  return(false);
     }
  	
	return(true);
  }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php" >
	  <tr>
        <td bgcolor="#FFDA45"><div align="center">������ת��Ϊ����ʽ���
            <input type="submit" name="submit" value="ת��" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!=""){

?>

<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="214" height="25" bgcolor="#FFDA45"><div align="center" class="STYLE2">���� </div></td>
        <td width="59" bgcolor="#FFDA45"><div align="center" class="STYLE2">�۸�</div></td>
        <td width="61" bgcolor="#FFDA45"><div align="center">�����</div></td>
        <td width="67" bgcolor="#FFDA45"><div align="center" class="STYLE2">���</div></td>
        <td width="93" bgcolor="#FFDA45"><div align="center" class="STYLE2">��������</div></td>
      </tr>
      <?php
		 include("conn.php");
		 $rs=new com("adodb.recordset");
		 $rs->open("select bookname,syassort,price,number,format(analysetime,'yyyy��mm��dd��') as newdate from tb_booksort",$conn,3,1);
		 if($rs->eof|| $rs->bof)
		 {
		 ?>
      <tr>
        <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="center">û�в��ҵ������Ϣ!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		     while(!$rs->eof)
		     {
		?>
      <tr>
        
	      <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields(bookname);echo $f->value;?></div></td>
		  <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields(price);echo $f->value;?></div></td>
          <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields(number);echo $f->value;?></div></td>
          <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields(syassort);echo $f->value;?></div></td>
          <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields(newdate);echo $f->value;?></div></td>
      </tr>
      <?php
	         $rs->movenext;
	       }
	   }
	  ?>
    </table></td>
  </tr>
</table>
<?php
 }
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
