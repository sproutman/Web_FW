<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����IE���˵�</title>
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
                      <td><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���ã���л�������飬������������ʱ����д��ݻ�ִ����������ҳ���¼Ļ��ҹ�˾���߷��񲿡����ǻ����Ժ�Ĺ����г�ֿ�����������ͽ��飬����������Ϣ���빫˾�Ŀͻ������У��Ա������ṩȫ�̵�һ�廯���������е�Ȩ�棺 
                        </p>
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�� ��ѻ���ҹ�˾���������ϣ� �� ��Ѳμ��ҹ�˾��֯�ļ��������ἰ������<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�� Ѱ�����Ķ������������⣻ �� �ɲμӲ����ڵĴ��������ѻ�ȡ��Ʒ��<br>
                        </p></td>
                    </tr>
  </table>
                  <table width="600" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr> 
                      <td height="10" colspan="4"><div align="center"></div></td>
                    </tr>
					<tr> 
                      <td height="20" colspan="4"><div align="left">������Ϣ</div></td>
                    </tr>
					  <tr> 
                      <td height="10" colspan="4"><div align="center"></div></td>
                    </tr>
                    <tr> 
                      <td width="100" height="20"><div align="center">������</div></td>
                      <td width="200">&nbsp;<input type="text" name="name" class="inputcss" size="22"></td>
                      <td width="100"><div align="center">�Ա�</div></td>
                        <td width="200">&nbsp;<select name="sex">
                            <option value="��" selected>��</option>
                            <option value="Ů">Ů</option>
                          </select></td>
                    </tr>
                    <tr> 
                      <td height="20"><div align="center">�ֻ���</div></td>
                      <td height="20">&nbsp;<input type="text" name="tel" class="inputcss" size="22"></td>
                      <td height="20"><div align="center">ְҵ��</div></td>
                      <td height="20">&nbsp;<input type="text" name="career" class="inputcss" size="22"></td>
                    </tr>
                    <tr> 
                      <td height="20"><div align="center">�Ļ��̶ȣ�</div></td>
                        <td height="20">&nbsp;<select name="culture">
                            <option selected>Сѧ</option>
                            <option>����</option>
                            <option>����</option>
                            <option>��ר</option>
                            <option>��ר</option>
                            <option>����</option>
                            <option>�о���</option>
                            <option>��ʿ��</option>
                            <option>����</option>
                          </select></td>
                      <td height="20"><div align="center">E-mail��</div></td>
                      <td height="20">&nbsp;<input type="text" name="email" class="inputcss" size="22"></td>
                    </tr>
                    <tr> 
                      <td height="20"><div align="center">�ʱࣺ</div></td>
                      <td height="20">&nbsp;<input type="text" name="yb" class="inputcss" size="22"></td>
                      <td height="20"><div align="center">ͨѶ��ַ��</div></td>
                      <td height="20">&nbsp;<input type="text" name="address" class="inputcss" size="22"></td>
                    </tr>
					 <tr> 
                      <td height="10" colspan="4"><div align="center">
                        <input name="submit" type="submit" class="buttoncss" value="�ύ">
                        &nbsp;&nbsp;
                        <input name="reset" type="reset" class="buttoncss" value="����">
                      </div></td>
                    </tr>
                  </table>
</form>
				  </body>
</html>
