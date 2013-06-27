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
<table width="603" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  id="paytitle" width="755" height="84" align="center" valign="bottom" background="images/image_01.gif">2007年2月份工资发放报表</td>
  </tr>
  <tr>
    <td width="755" height="233" align="center" valign="top" background="images/image_02.gif">
	  <br>
	  <table id="pay" width="82%" height="48"  border="0" cellpadding="0" cellspacing="1" bordercolorlight="#FFFFFF" bordercolordark="#CCCCCC" bgcolor="#000000">
      <tr align="center" bordercolor="#CCCCCC" bgcolor="#EEEEEE">
        <td width="14%" height="30">员工姓名</td>
        <td width="13%">基本工资</td>
        <td width="14%">工龄工资</td>
        <td width="14%">奖金</td>
        <td width="16%">加班费</td>
        <td width="14%">扣除</td>
        <td width="15%">实发工资</td>
      </tr>
     <?php
	 $sql=mysql_query("select * from tb_pay order by sfpay desc");
	 $info=mysql_fetch_array($sql);
	 do{
	 ?>
	  <tr align="center" bgcolor="#FFFFFF">
        <td width="14%" height="30"><?php echo $info[ygname];?></td>
        <td width="13%"><?php echo $info[basicpay];?></td>
        <td width="14%"><?php echo $info[glpay];?></td>
        <td width="14%"><?php echo $info[bonus];?></td>
        <td width="16%"><?php echo $info[jbpay];?></td>
		<td width="14%"><?php echo $info[deduct];?></td>
        <td width="15%"><?php echo $info[sfpay];?></td>
      </tr>
	  <?php
	  }while($info=mysql_fetch_array($sql))
	  ?>
    </table>      
      <table width="82%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" align="right"><a href="#" onClick="outExcel();">导出到Excel</a></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="755" height="36" background="images/image_03.gif">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<script language="javascript">
function outExcel(){
	var table=document.all.pay;
	row=table.rows.length;
	column=table.rows(1).cells.length;
	var excelapp=new ActiveXObject("Excel.Application");
	excelapp.visible=true;
	objBook=excelapp.Workbooks.Add(); //添加新的工作簿
	var objSheet = objBook.ActiveSheet;

	title=objSheet.Range("D1").MergeArea;  //合并单元格
	title.Cells(1,0).Value =paytitle.innerHTML.replace("&nbsp;","将Web页面中的数据导出到Excel");  //输出标题
	title.Cells(1,1).Font.Size =16;
	for(i=1;i<row+1;i++){
		for(j=0;j<column;j++){
		  objSheet.Cells(i+1,j+1).value=table.rows(i-1).cells(j).innerHTML.replace("&nbsp;","将Web页面中的数据导出到Excel");
		}
	}
	excelapp.UserControl = true;
}
</script>
