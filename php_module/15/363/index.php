<?php include "conn/conn.php";?>
<html>
<head>
<title>��Webҳ�еı�񵼳���Word����ӡ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<script language="javascript">
function outDoc(){
  var table=document.all.brand;
  row=table.rows.length;
  column=table.rows(1).cells.length;
  var wdapp=new ActiveXObject("Word.Application");
  wdapp.visible=true;
  wddoc=wdapp.Documents.Add();  //����µ��ĵ�
  thearray=new Array();
//��ҳ���б������ݴ����������
for(i=0;i<row;i++){
	thearray[i]=new Array();
	for(j=0;j<column;j++){
          thearray[i][j]=table.rows(i).cells(j).innerHTML;
	}
}
var range = wddoc.Range(0,0);
range.Text="��Ʒ�����嵥"+"\n";
wdapp.Application.Activedocument.Paragraphs.Add(range);
wdapp.Application.Activedocument.Paragraphs.Add();
rngcurrent=wdapp.Application.Activedocument.Paragraphs(3).Range;

var objTable=wddoc.Tables.Add(rngcurrent,row,column)     //������
for(i=0;i<row;i++){
	for(j=0;j<column;j++){
	objTable.Cell(i+1,j+1).Range.Text = thearray[i][j].replace("&nbsp;","");
	}
}
wdapp.Application.ActiveDocument.SaveAs("orderInfo.doc",0,false,"",true,"",false,false,false,false,false);
wdapp.Application.Printout();
wdapp=null;
}
</script>
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
-->
</style></head>
<body>
<table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="755" height="190" background="images/image_01.gif">&nbsp;</td>
  </tr>
  <tr>
    <td width="755" height="180" align="center" background="images/image_02.gif">
	<table  id="brand" width="92%" height="48"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#CCCCCC" bordercolorlight="#FFFFFF">
      <tr align="center">
        <td width="29%" height="30">��Ʒ����</td>
        <td width="12%">�ȼ�</td>
        <td width="12%">����</td>
        <td width="12%">��Ա��</td>
        <td width="12%">�г���</td>
        <td width="12%">�ؼ�</td>
        <td width="11%">�ۿ�</td>
      </tr>
     <?php
	 $sql=mysql_query("select * from tb_brand order by id desc");
	 $info=mysql_fetch_array($sql);
	 do{
	 ?>
	  <tr align="center">
        <td width="29%" height="30"><?php echo $info[spname];?></td>
        <td width="12%"><?php echo $info[level];?></td>
        <td width="12%"><?php echo $info[num];?></td>
        <td width="12%"><?php echo $info[memberprice];?></td>
        <td width="12%"><?php echo $info[marketprice];?></td>
        <td width="12%"><?php echo $info[extraprice];?></td>
        <td width="11%"><?php echo $info[rebate];?></td>
      </tr>
	  <?php
	  }while($info=mysql_fetch_array($sql))
	  ?>
    </table>      
      <table width="91%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" align="right"><a href="#" onClick="outDoc();">��ӡ&nbsp;</a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td width="755" height="49" background="images/image_03.gif">&nbsp;</td>
  </tr>
</table>
</body>
</html>
