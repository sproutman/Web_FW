<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>屏蔽鼠标右键</title>
</head>
<script language="javascript">
function click(){
if (event.button==2){
alert("禁止使用鼠标右键！！！");
}
}
document.onmousedown=click
</script>
<body>
<table width="795" height="366" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" background="images/bg.JPG"><table width="795" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="210" height="165">&nbsp;</td>
        <td width="559">&nbsp;</td>
        <td width="26">&nbsp;</td>
      </tr>
      <tr>
        <td height="185">&nbsp;</td>
        <td valign="middle">
		<form name="myform"  method="post" action="checkrk.php">
		<table width="509" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="83" height="24" align="center">商品名称</td>
            <td width="177"><input name="spname" type="text" id="spname"></td>
            <td width="79" align="center">商品型号</td>
            <td width="170"><input name="spxh" type="text" id="spxh"></td>
          </tr>
          <tr>
            <td height="24" align="center">商品规格</td>
            <td><input name="spgg" type="text" id="spgg"></td>
            <td align="center">商品数量</td>
            <td><input name="num" type="text" id="num"></td>
          </tr>
          <tr>
            <td height="24" align="center">商品单价</td>
            <td><input name="price" type="text" id="price"></td>
            <td align="center">应付货款</td>
            <td><input name="money" type="text" id="money"></td>
          </tr>
          <tr>
            <td height="24" align="center">供
          
               应 商</td>
            <td><input name="gys" type="text" id="gys"></td>
            <td align="center">操作员</td>
            <td><input name="czy" type="text" id="czy"></td>
          </tr>
          <tr>
            <td height="24" align="center">存放仓库</td>
            <td><input name="depot" type="text" id="depot"></td>
            <td align="center">入库日期</td>
            <td><input name="rdate" type="text" id="rdate"></td>
          </tr>
          <tr>
            <td height="24" colspan="4" align="center"><input type="submit" name="Submit" value="登记">
              &nbsp;&nbsp;
              <input type="reset" name="Submit2" value="重置"></td>
            </tr>
        </table>
	  </form>
		</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
