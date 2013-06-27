<?php include "conn/conn.php";?>
<html>
<head>
<title>将Web页面中的数据导出到Excel</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
-->
</style></head>
<body>
<table width="793" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  id="paytitle" height="127" align="center" valign="bottom" background="images/image_01.gif">&nbsp;</td>
  </tr>
  <tr>
    <td width="755" height="200" align="center" valign="top" background="images/image_02.gif">
	  <br>
	  <table id="cost" width="85%" height="48"  border="0" cellpadding="0" cellspacing="1" bordercolorlight="#FFFFFF" bordercolordark="#CCCCCC" bgcolor="#000000">
      <tr align="center" bordercolor="#CCCCCC" bgcolor="#EEEEEE">
        <td width="14%" height="30">电话号码</td>
        <td width="13%">本地话费</td>
        <td width="14%">IP国内费</td>
        <td width="14%">短信费</td>
        <td width="14%">来电显示</td>
        <td width="16%">总话费</td>
        <td width="15%">月份</td>
      </tr>
     <?php
	 $sql=mysql_query("select * from tb_telcost order by month desc");
	 $info=mysql_fetch_array($sql);
	 do{
	 ?>
	  <tr align="center" bgcolor="#FFFFFF">
        <td width="14%" height="30"><?php echo $info[tel];?></td>
        <td width="13%"><?php echo $info[bdcost];?></td>
        <td width="14%"><?php echo $info[ipcost];?></td>
        <td width="14%"><?php echo $info[ldcost];?></td>
        <td width="14%"><?php echo $info[ldcost];?></td>
        <td width="16%"><?php echo $info[total];?></td>
        <td width="15%"><?php echo $info[month];?></td>
      </tr>
	  <?php
	  }while($info=mysql_fetch_array($sql));
	  ?>
    </table>      
      <table width="85%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" align="right"><a href="#" onClick="outExcel();">打印</a>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="755" height="57" background="images/image_03.gif">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<script language="javascript">
function outExcel(){
	var table=document.all.cost;
	row=table.rows.length;
	column=table.rows(1).cells.length;
	var excelapp=new ActiveXObject("Excel.Application");
	excelapp.visible=true;
	objBook=excelapp.Workbooks.Add(); //添加新的工作簿
	var objSheet = objBook.ActiveSheet;

	title=objSheet.Range("D1").MergeArea;  //合并单元格
	title.Cells(1,0).Value =paytitle.innerHTML.replace("&nbsp;","话费单查询");  //输出标题
	title.Cells(1,1).Font.Size =16;
	for(i=1;i<row+1;i++){
		for(j=0;j<column;j++){
		  objSheet.Cells(i+1,j+1).value=table.rows(i-1).cells(j).innerHTML.replace("&nbsp;","话费单查询");
		}
	}
  	objBook.SaveAs("telcost.xls");
	objSheet.Printout;     //自动打印
	excelapp.UserControl = true;
}
</script>
