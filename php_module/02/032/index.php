<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>选中单选按钮后显示其他表单元素</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="2" bordercolor="#71B8FF" background="images/fff.JPG">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">用户名:</span>      <input name="textfield" type="text" size="15">
      <span class="style1">密码:</span>    <input name="textfield2" type="text" size="15"></td>
  </tr>
  <tr>
    <td width="90" rowspan="2" align="center" class="style1">权限设置:</td>
    <td width="360" height="25" align="center"><p class="style1">
        <input type="radio" name="radiobutton" value="超级会员" onClick="tab.style.display='block'">
      超级会员
      <input type="radio" name="radiobutton" value="普通会员" onClick="tab.style.display='none'">
      普通会员</p>      </td>
  </tr>
  <tr>
    <td align="center"><table width="350" border="0" id="tab">
      <tr>
        <td><p>
          <span class="style1">
  <input type="checkbox" name="checkbox" value="checkbox">
  用户管理
  <input type="checkbox" name="checkbox2" value="checkbox">
  帖子管理
  <input type="checkbox" name="checkbox3" value="checkbox">
  栏目管理 </span></p>
          <p>
            <span class="style1">
  <input type="checkbox" name="checkbox4" value="checkbox">
  公告管理
  <input type="checkbox" name="checkbox5" value="checkbox">
  图片管理
  <input type="checkbox" name="checkbox6" value="checkbox">
   数据库管理</span></p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25"><input type="submit" name="Submit" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
</table>
</body>
</html>
