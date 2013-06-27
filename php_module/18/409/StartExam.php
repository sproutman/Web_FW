<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>屏蔽IE主菜单</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body topmargin ="0" leftmargin = "0">
<form name="form1" method="post" action="savehz.php">
				<table width="600" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
                        <td><img src="images/userhz.gif" width="600" height="30"></td>
  </tr>
</table>
<table width="600" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您好！感谢您购买本书，请您抽出宝贵的时间填写这份回执卡，并将此页剪下寄回我公司读者服务部。我们会在以后的工作中充分考虑您的意见和建议，并将您的信息加入公司的客户档案中，以便向您提供全程的一体化服务。您享有的权益： 
                        </p>
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;★ 免费获得我公司的新书资料； ★ 免费参加我公司组织的技术交流会及讲座；<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;★ 寻求解答阅读中遇到的问题； ★ 可参加不定期的促销活动，免费获取赠品；<br>
                        </p></td>
                    </tr>
  </table>
                  <table width="600" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr> 
                      <td height="10" colspan="4"><div align="center"></div></td>
                    </tr>
					<tr> 
                      <td height="20" colspan="4"><div align="left">读者信息</div></td>
                    </tr>
					  <tr> 
                      <td height="10" colspan="4"><div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td width="100" height="20"><div align="center">姓名：</div></td>
                      <td width="200">&nbsp;<input type="text" name="name" class="inputcss" size="22"></td>
                      <td width="100"><div align="center">性别：</div></td>
                        <td width="200">&nbsp;<select name="sex">
                            <option value="男" selected>男</option>
                            <option value="女">女</option>
                          </select></td>
                    </tr>
                    <tr> 
                      <td height="20"><div align="center">手机：</div></td>
                      <td height="20">&nbsp;<input type="text" name="tel" class="inputcss" size="22"></td>
                      <td height="20"><div align="center">职业：</div></td>
                      <td height="20">&nbsp;<input type="text" name="career" class="inputcss" size="22"></td>
                    </tr>
                    <tr> 
                      <td height="20"><div align="center">文化程度：</div></td>
                        <td height="20">&nbsp;<select name="culture">
                            <option selected>小学</option>
                            <option>初中</option>
                            <option>高中</option>
                            <option>中专</option>
                            <option>大专</option>
                            <option>本科</option>
                            <option>研究生</option>
                            <option>博士生</option>
                            <option>其他</option>
                          </select></td>
                      <td height="20"><div align="center">E-mail：</div></td>
                      <td height="20">&nbsp;<input type="text" name="email" class="inputcss" size="22"></td>
                    </tr>
                    <tr> 
                      <td height="20"><div align="center">邮编：</div></td>
                      <td height="20">&nbsp;<input type="text" name="yb" class="inputcss" size="22"></td>
                      <td height="20"><div align="center">通讯地址：</div></td>
                      <td height="20">&nbsp;<input type="text" name="address" class="inputcss" size="22"></td>
                    </tr>
					 <tr> 
                      <td height="10" colspan="4"><div align="center">
                        <input name="submit" type="submit" class="buttoncss" value="提交">
                        &nbsp;&nbsp;
                        <input name="reset" type="reset" class="buttoncss" value="重置">
                      </div></td>
                    </tr>
                  </table>
</form>
				  </body>
</html>
