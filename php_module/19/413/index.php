<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ѯ������浽Word</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script>
 function chkinput(form){
   if(form.sno.value==""){
     alert("������ѧ��ѧ��!");
	 form.sno.select();
	 return(false);
   }
   return(true);
 }

</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/top.gif" width="636" height="97" /></td>
  </tr>
</table>
<table width="636" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" background="images/center.gif"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#CDEF27"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
         <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)"> 
		  <tr>
            <td bgcolor="#FFFFFF"><div align="center">������ѧ�ţ�<input type="text" name="sno" size="25" class="inputcss">&nbsp;&nbsp;<input type="submit" name="submit" value="����"  class="buttoncss"></div></td>
          </tr>
		  </form>
        </table></td>
      </tr>
	  
    </table>
      <table width="500" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  
	  
	  <?php
	  if($_POST[submit]!="" || $_GET[id]!="")
	  {  
	     $sno=$_POST[sno];
		 if($_GET[sno]!=""){
		  $sno=$_GET[sno];
		 }
		 include_once("conn.php");
		 $sql=mysql_query("select * from tb_score where sno like '%".$sno."%'",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
		   echo "<div align=center>�Բ���û�в��ҵ���Ҫ�ҵ�ѧ���ɼ���Ϣ!</div>";
		  }
		 else
		 { 
		   
	  ?>
      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#BADA0D">
		  <?php
		  if($_GET[id]!="")
		  {
		    include_once("word.php");
		    $word=new word();
		    $word->start();
		  }
		 ?>
		 
		   <table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
             <tr>
              <td width="96" height="25" bgcolor="#E6F2A8"><div align="center">ѧ��</div></td>
              <td width="75" bgcolor="#E6F2A8"><div align="center">����</div></td>
              <td width="81" bgcolor="#E6F2A8"><div align="center">�༶</div></td>
              <td width="78" bgcolor="#E6F2A8"><div align="center">����</div></td>
              <td width="88" bgcolor="#E6F2A8"><div align="center">��ѧ</div></td>
              <td width="75" bgcolor="#E6F2A8"><div align="center">����</div></td>
            </tr>
			
			<?php
			 do
		      {
			   
			?>
            <tr>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sclass];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[wy];?></div></td>
            </tr>
			 
			<?php
			}
		   while($info=mysql_fetch_array($sql));
		    
		    ?>
			
			<?php
			if($_GET[id]!="")
			 {
		       $word->save("word/data.doc");
		     }
			
			?>
			<tr>
              <td height="25" colspan="6" bgcolor="#FFFFFF"><div align="center">
			 <?php
			 
			 if($_GET[id]==""){
			 ?> 
			  <input type="button" value="��������ݱ��浽Word" class="buttoncss" onclick="window.location.href='index.php?id=print&sno=<?php echo $sno?>'">
			  <?php
			  }
			  else
			  {
			   echo "<div align=center>��ѯ����Ѿ����浽Word��</div>";
			  }
			  ?>
			  </div></td>
              </tr>
          </table>
		  
		  </td>
        </tr>
      </table>
	  <?php
	       
	      }
	   }
	  ?>
	  
	  </td>
  </tr>
</table>
<table width="600" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><hr color="#0033FF"></td>
  </tr>
</table>

<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>

</body>
</html>
