<?php
include_once("top.php");
?>
<script language="javascript">
 function chkinput(form)
  {
    if(form.usernc.value=="")
	  {
	    alert("�������¼�ǳ�!");
		form.usernc.select();
		return(false);
	  
	  }  
	 if(form.email.value=="")
	  {
	   alert("������E-mail��ַ!");
	   form.email.select();
	   return(false);
	 }
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("��������ȷ��E-mail��ַ!");
	   form.email.select();
	   return(false);
	 }
   return(true); 		
  }
</script>
<script language="javascript">
function open_chknc(x)
{
 window.open("chkusernc.php?nc="+x,"newframe","top=250,left=450,width=150,height=100,menubar=no,toobar=no,location=no,scrollbars=no,resizeable=no");
}
</script>

<script language="javascript">
 function change_head(){
    form1.head.src=form1.userhead.value;
 }
</script>
<style type="text/css">
<!--
.STYLE2 {
	color: #2369DE;
	font-weight: bold;
}
.STYLE3 {
	color: #FF0000;
	font-weight: bold;
}
.STYLE4 {color: #FF0000}
-->
</style>

<table width="800" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/top.gif" width="800" height="23"></td>
  </tr>
</table>
<table width="800" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#82A3DF"><table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;&nbsp;<img src="images/menubar_left.gif" width="9" height="9">&nbsp;&nbsp;<strong>�û���¼</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="790" height="411" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="480" height="411" valign="top"><table width="450" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="left"><img src="images/topic.gif" width="10" height="9" />&nbsp;&nbsp;��¼ǰ����д��ص�¼��Ϣ<span class="STYLE3">��*ע�⣺��¼�ǳ�Ҫ��ͬ��</span></div></td>
              </tr>
            </table>
              <table width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <table border="0" align="center" cellpadding="0" cellspacing="0">
                
				<tr>
                  <td bgcolor="#CFD9EC"><table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
                   <form name="form1" method="post" action="saveuser.php" onsubmit="return chkinput(this)"> 
					<tr>
                      <td height="25" colspan="3" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="center" class="STYLE2">�û���¼</div></td>
                    </tr>
                    <tr>
                      <td width="70" height="30" bgcolor="#FFFFFF"><div align="center">��¼�ǳƣ�</div></td>
                      <td width="128" bgcolor="#FFFFFF">&nbsp;<input type="text" name="usernc" size="15" class="inputcss" maxlength="50"></td>
                      <td width="98" bgcolor="#FFFFFF"><div align="center"><input type="button" value="�Ƿ�����" onClick="open_chknc(form1.usernc.value)" class="buttoncss">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="60" bgcolor="#FFFFFF"><div align="center">ͷ��</div></td>
                      <td height="60" colspan="2" bgcolor="#FFFFFF">&nbsp;
                        <table width="230" height="60" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="90">&nbsp;<select name="userhead" onchange="javascript:change_head()">
							<?php
							for($i=0;$i<=11;$i++){
					        ?>
                      <option value="<?php echo("images/head/".$i.".gif");?>">ͷ��<?php echo $i?></option>
                           <?php
					         }
						   ?>
                            </select>
                            </td>
                            <td width="137"><img src="images/head/0.gif" width="60" height="60" id="head"/></td>
                          </tr>
                        </table></td>
                    </tr>
					<tr>
                      <td height="30" bgcolor="#FFFFFF"><div align="center">E-mail��</div></td>
                      <td height="30" colspan="2" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" size="20" class="inputcss" maxlength="100">
                        <span class="STYLE4">(Ҫ����ʵ)</span></td>
                    </tr>
                    <tr>
                      <td height="30" colspan="3" bgcolor="#FFFFFF"><div align="center">
                      &nbsp;&nbsp;<input type="submit" name="submit" class="buttoncss" value="����">&nbsp;&nbsp;<input type="reset" class="buttoncss" value="��д"></div></td>
                    </tr>
					</form>
                  </table>
				  
				  </td>
                </tr>
              </table>
              <table width="400" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="20"><font color="#FF0000"><marquee scrollamount="4">
                  ע��:�����ǳƼ��ɵ�¼����������!&nbsp;&nbsp;����˾��������ÿ�ܵ���һ������&nbsp;<strong>(����&nbsp;8��30-11��30&nbsp;��&nbsp;����&nbsp;1��30-5��30)</strong>&nbsp;Ϊ������!!!
                  </marquee>
                  </font></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            <td width="10" background="images/line_down.gif">&nbsp;</td>
            <td width="300"><table width="250" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
                      <td>������ʹ��ָ�ϣ�</td>
  </tr>
</table>
<table width="200" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><TEXTAREA rows=25 cols=40 class="inputcss">       ���տƼ�����������ʹ��ָ��

   
   
   1���û��ǳ�
      Ϊ���ܹ���λ��ͬ���û����������ҽ�Ϊ��ͬ���û����䲻ͬ���ǳƣ�֧�ֺ���û�ֱ�������ǳƼ��ɽ��뱾�����ҡ�
   
   2���û�ͷ��
      ����������Ա�ѡ��ϲ����ͷ��
   
   3��E-mail��ַ
      �������տƼ�������̳���û�������д��ʵ��E-mail��ַ���Ա����տƼ�������ʱ�������й�ͨ��
	  
    ��л�������տƼ���֧�֣�     	      
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
</table>
<?php
include_once("bottom.php");
?>