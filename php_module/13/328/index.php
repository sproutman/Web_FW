<link rel="stylesheet" type="text/css" href="style.css">
<script language="javascript">
function select_face()
{
var somevalue;
somevalue=window.showModalDialog('browse.php','','dialogWidth=600px dialogHeight=450px status=no help=no scrollbars=no');
document.form_regist.user_src.src="images/head/"+somevalue+".gif";
 }
</script>
<table width="800" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/top.gif" width="800" height="23"></td>
  </tr>
</table>
<table width="800" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#82A3DF"><table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;&nbsp;<img src="images/menubar_left.gif" width="9" height="9">&nbsp;&nbsp;<strong>�û�ע��</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="790" height="411" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="480" height="411" valign="top"><table width="450" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="left"><img src="images/topic.gif" width="10" height="9" />&nbsp;&nbsp;ע��Ϊ��ͨ�û�</div></td>
              </tr>
            </table>
              <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
			  <form name="form_regist" method="post"  onsubmit="return chkinput(this)">
                <tr>
                  <td width="120" height="30">
                    <div align="center">�û��ǳƣ�</div></td>
                  <td width="330"><div align="left"><input type="text" name="user_name" size="25" maxlength="20" class="buttoncss">
				  *&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">ע�����룺</div></td>
                  <td height="30"><div align="left"><input type="password" name="user_pwd1" size="25" maxlength="20" class="buttoncss">
                    *</div></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">�ظ����룺</div></td>
                  <td height="30"><div align="left"><input type="password" name="user_pwd2" size="25" maxlength="20" class="buttoncss">
                    *</div></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">E-mail��</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="user_email" size="25" maxlength="100" class="buttoncss" />
                  *��������ʵ��E-mail��ַ</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="left"><img src="images/topic.gif" width="10" height="9" />&nbsp;����ע��Ϊ��Ա</div></td>
                  <td height="30"><div align="left">
                    <select name="user_hy">
                      <option selected="selected" value="1">��</option>
                      <option value="0">��</option>
                    </select>
                    �������ע��Ϊ��Ա����д������Ϣ</div>                    </td>
				</tr>
				 <tr>
                  <td height="30"><div align="center">��ʵ������</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="user_truename" size="25" maxlength="20" class="buttoncss" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">��&nbsp;&nbsp;��</div></td>
                  <td height="30"><div align="left">
                  <select name="user_sex" >
                    <option selected="selected" value="��Ů">��ѡ��</option>
                    <option  value="��" >&nbsp;&nbsp;��</option>
                    <option  value="Ů" >&nbsp;&nbsp;Ů</option>
                  </select>
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">ְ&nbsp;&nbsp;ҵ��</div></td>
                  <td height="30"><div align="left"> 
                            <select name="user_zy" id="user_zy">
                              <option selected value="��ѡ��">��ѡ��</option>
							  <option value="����">����</option>
                              <option value="ũ��">ũ��</option>
							  <option value="��ʦ">��ʦ</option>
							  <option value="˾��">˾��</option>
							  <option value="����">����</option>
							  <option value="ѧ��">ѧ��</option>
							  <option value="ְԱ">ְԱ</option>
							  <option value="�ɲ�">�ɲ�</option>
							  <option value="����">����</option>
                            </select>
                            *</div></td>
                </tr>
				<tr>
                  <td height="100" rowspan="2"><div align="center">ͷ&nbsp;&nbsp;��</div></td>
                  <td height="70"><div align="left"><img id="user_src" src="images/head/0.gif" width="60" height="60" /></div></td>
                </tr>
				<tr>
				  <td height="30">[<a href="#" onclick="select_face()" class="a1">ͷ��ѡ��</a>]</td>
				  </tr>
				  <tr>
                  <td height="30"><div align="center">QQ���룺</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="user_qq" size="25" maxlength="20" class="buttoncss" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">��ϵ�绰��</div></td>
                  <td height="30"><div align="left">
                    <input name="user_tel" type="text" class="buttoncss" id="user_tel" size="25" maxlength="20" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">��ͥסַ��</div></td>
                  <td height="30"><div align="left">
                    <input name="user_address" type="text" class="buttoncss" id="user_address" size="50" maxlength="50" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="15" colspan="2"><marquee>���ע��Ϊ���տƼ��Ļ�Ա�������յ����տƼ�����Ʒ������������ȷ��д���˵���Ϣ��</marquee></td>
                </tr>
				<tr>
                  <td height="30" colspan="2"><div align="center"><input type="submit" value="����ע��" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="ȫ����д" class="buttoncss"></div></td>
                </tr>
				<tr>
                  <td height="15" colspan="2"></td>
                </tr>
			 </form>
              </table></td>
            <td width="10" background="images/line_down.gif">&nbsp;</td>
            <td width="300"><table width="250" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
                      <td>ע��ָ�ϣ�</td>
  </tr>
</table>
<table width="200" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><TEXTAREA rows=30 cols=40 class="inputcss">       ���տƼ�������̳ע��ָ��

��ͨ�û�Ӧ¼�����Ϣ
   
   
   1���û��ǳ�
      Ϊ���ܹ���λ��ͬ���û�������̳��Ϊ��ͬ���û����䲻ͬ���ǳƣ�֧�ֺ��
   2���û�����
      Ϊ�������̳��ȫ�ԣ��û�ע������Ӧ����6λ��
   3��E-mail��ַ
      �û���д����ʵ��E-mail��ַ,�ɹ�ע��Ϊ���տƼ�����ͨ�û����Ա�������Դ�����鿴ȷ����Ϣ����Ʒ��
	  
	  
����ע��Ϊ��ԱӦ¼�����Ϣ
  
  
   4��Ϊ�˱������տƼ�������ϵ��������������ʵ������
   5���ɴ������б���ѡ�������Ա�
   6���ɴ������б���ѡ������ְҵ��
   7��ע���û����Ը����Լ��ĸ���ѡ��ϲ����ͷ��
   8��Ϊ�˱������տƼ�������ϵ������������QQ���롣
   9��Ϊ�˱������տƼ�������ϵ��������������ϵ�绰��
   10��Ϊ�˱������տƼ�������ϵ��������������ϵ��ַ��
   
��л�������տƼ���֧�֡�     	      
</TEXTAREA></td>
                    </tr>
                  </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="800" height="6" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
