<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ˢ��ҳ��ɸѡ���ݿ��е�����</title></head>
<script language="javascript">
function sk(){
    scht=window.selects.value; //��ȡ�ύ������
//�����Ƴ������в�ѯ����б��е�ѡ��
    j=scho.length;
for(i=j-1;i>=0;i--){
    scho.remove(i);
}
if(scht!=""){    //��ʾ����ɸѡ���������� 
    j=searchSource.length;
for(i=0;i<j;i++){
    searchsource=searchSource.options(i).text;
    k=searchsource.indexOf(scht);
if(k!=-1){
     option1=document.createElement("option");
	 option1.text=searchsource;
     option1.value=searchSource.options(i).value;
	 scho.add(option1); }
    }
}else{
 //���û�������ѯ��������ʾ��������
   j=searchSource.length;
for(i=0;i<j;i++){
      searchsource=searchSource.options(i).text;
	  option1=document.createElement("option");
	  option1.text=searchsource;
	  option1.value=searchSource.options(i).value;
	  scho.add(option1); }
    }
}
</script>

<body>
<table width="468" height="306" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
  <tr>
    <td height="70">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="57" height="30">&nbsp;</td>
    <td width="351" align="center" valign="middle">
	   <input name="selects" type="text" id="selects" size="25" maxlength="30"> &nbsp;
       <input type="button" name="Submit"  onClick="javascript:return sk()" value="��ѯ"></td><td width="60">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="120">&nbsp;</td>
    <td align="center" valign="top">
	   <select name="scho" size="8" class="text" style="width:348px;">
         <?php $sound="word like '%$selects%'";
	            $query=mysql_query("select * from tb_like where $sound ");
	            if($query==true){ 
	               while($myrow=mysql_fetch_array($query)){
	      ?>
          <option value="<?php echo $myrow[word];?>">&nbsp;&nbsp;<?php echo $myrow[word];?></option>
         <?php  }} ?>
         </select>
         <select name="searchSource" size="9" style="display:none">
	     <?php $sound="word like '%$selects%'";
	            $query=mysql_query("select * from tb_like where $sound ");
	            if($query==true){ 
	               while($myrow=mysql_fetch_array($query)){
	       ?>
	       <option value="<?php echo $myrow[word];?>">&nbsp;&nbsp;<?php echo $myrow[word];?></option>
	       <?php  }} ?>
         </select>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>    </td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
