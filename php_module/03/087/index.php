<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script language="javascript">
function select_face()
{
var somevalue;
somevalue=window.showModalDialog("browse.php","请选择您喜欢的人物头像", "dialogWidth='310px';dialogHeight='240px';status='no';help='no';scrollbars='no'");
document.form_regist.user_src.src="images/head/"+somevalue+".gif";
 }
</script>
<table width="524" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="524"><img src="images/top.gif" width="524" height="23"></td>
  </tr>
</table>
<table width="522" height="44" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="522" height="44" bgcolor="#2369DE"><table width="522" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="520" height="25" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;&nbsp;<img src="images/menubar_left.gif" width="9" height="9">&nbsp;&nbsp;<strong>用户注册</strong></div></td>
      </tr>
      <tr>
        <td height="324" bgcolor="#FFFFFF"><table width="480" height="327" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="480" height="327" valign="top"><table width="484" border="0" align="center" cellpadding="0" cellspacing="0">
                <form method="post"  name="form_regist">
                  <tr>
                    <td width="123" height="30">
                      <div align="center">用户昵称：</div></td>
                    <td width="361"><div align="left">
                        <input type="text" name="user_name" size="25" maxlength="20" class="buttoncss">
                *&nbsp;</div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center">注册密码：</div></td>
                    <td height="30"><div align="left">
                        <input type="password" name="user_pwd1" size="25" maxlength="20" class="buttoncss">
                *</div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center">E-mail：</div></td>
                    <td height="30"><div align="left">
                        <input type="text" name="user_email" size="25" maxlength="100" class="buttoncss" />
                *请输入真实的E-mail地址</div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center">真实姓名：</div></td>
                    <td height="30"><div align="left">
                        <input type="text" name="user_truename" size="25" maxlength="20" class="buttoncss" />
                *</div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center">职&nbsp;&nbsp;业：</div></td>
                    <td height="30"><div align="left">
                        <select name="user_zy" id="user_zy">
                          <option value="请选择">请选择</option>
                          <option value="教师">教师</option>
                          <option value="司机">司机</option>
                          <option value="军人">军人</option>
                          <option value="学生">学生</option>
                          <option value="职员" selected>职员</option>
                          <option value="干部">干部</option>
                          <option value="其他">其他</option>
                        </select>
                *</div></td>
                  </tr>
                  <tr>
                    <td height="100" rowspan="2"><div align="center">头&nbsp;&nbsp;像：</div></td>
                    <td height="63"><div align="left"><img id="user_src" src="images/head/0.gif" width="60" height="60" /></div></td>
                  </tr>
                  <tr>
                    <td height="24">[<a href="#" onclick="select_face()" class="a1">头像选择</a>]</td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center">QQ号码：</div></td>
                    <td height="30"><div align="left">
                        <input type="text" name="user_qq" size="25" maxlength="20" class="buttoncss">
                *</div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center">联系电话：</div></td>
                    <td height="30"><div align="left">
                        <input name="user_tel" type="text" class="buttoncss" id="user_tel" size="25" maxlength="20">
                *</div></td>
                  </tr>
                  <tr>
                    <td height="40" colspan="2"><div align="center">
                        <input name="submit" type="submit" class="buttoncss" value="立即注册">
&nbsp;&nbsp;
                <input name="reset" type="reset" class="buttoncss" value="全部重写">
                    </div></td>
                  </tr>
                </form>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
