<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>可输入字符的下拉列表</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
function press(opt){
//opt表示现有可选项的数目
	form1.userclass.options[opt]=new Option(ok=(form1.userclass.options[opt])?
	form1.userclass.options[opt].innerText+String.fromCharCode(event.keyCode):
	String.fromCharCode(event.keyCode),ok)
	form1.userclass.selectedIndex=opt;
}
</script>
<script language="javascript">
function up(opt){
//opt表示现有可选项的数目
	if(form1.userclass.options[opt]){
		if(event.keyCode==8){
			var str=form1.userclass.options[opt].innerText;
			var len=str.length;
			form1.userclass.options[opt].innerText=str.substring(0,len-1);
			if(form1.userclass.options[opt].innerText==" ")userclass.remove(2);
		}
		if(event.keyCode==32){
			form1.userclass.options[opt].innerText+=" ";
		}
	}
}
</script>

<body>
<table width="310" border="1" cellpadding="0" cellspacing="0" background="images/admin2.gif">
  
  <tr align="center">
    <td height="25" colspan="3"><span class="style1"> 可输入字符的下拉列表</span></td>
  </tr>
  <form name="form1" method="post" action="index.php" onKeyPress="press(3)" onKeyUp="up(3)">
    <tr>
      <td width="58" align="center"><span class="style1">部门:</span></td>
      <td width="206">
        <select name="userclass" size="1" id="userclass">
          <option value="生产部" selected>生产部</option>
         <option value="业务部">业务部</option>
          <option value="技术部">技术部</option>
        </select></td>
      <td width="45">&nbsp;</td>
    </tr>
  </form>
</table>
</body>
</html>
