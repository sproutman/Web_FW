<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>打开指定的Word文档并打印</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<script language="javascript">
function openWord(filename){
  try  {
	  var wrd=new ActiveXObject("word.Application");
	  wrd.visible=true;
	  wrd.Documents.Open(filename);
	  wrd.Application.Printout();
	  wrd=null;
  }
  catch(e){}  
}
</script>
<table width="350" height="150" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.gif">
  <tr>
    <td height="59">&nbsp;</td>
  </tr>
  <tr>
    <td height="77" align="center" valign="top"><input name="file1" type="file" class="textarea" id="file1" size="35">
      <br>
      <br>
    <input name="Submit2" type="button" class="btn_grey" onClick="openWord(file1.value)" value="打开Word并打印"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>