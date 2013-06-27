<?php
include_once("top.php");
?>
<script language="javascript">
 function chkinput(form)
  {
    if(form.usernc.value=="")
	  {
	    alert("请输入登录昵称!");
		form.usernc.select();
		return(false);
	  
	  }  
	 if(form.email.value=="")
	  {
	   alert("请输入E-mail地址!");
	   form.email.select();
	   return(false);
	 }
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("请输入正确的E-mail地址!");
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
        <td height="25" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;&nbsp;<img src="images/menubar_left.gif" width="9" height="9">&nbsp;&nbsp;<strong>用户登录</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="790" height="411" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="480" height="411" valign="top"><table width="450" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="left"><img src="images/topic.gif" width="10" height="9" />&nbsp;&nbsp;登录前请填写相关登录信息<span class="STYLE3">（*注意：登录昵称要求不同）</span></div></td>
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
                      <td height="25" colspan="3" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="center" class="STYLE2">用户登录</div></td>
                    </tr>
                    <tr>
                      <td width="70" height="30" bgcolor="#FFFFFF"><div align="center">登录昵称：</div></td>
                      <td width="128" bgcolor="#FFFFFF">&nbsp;<input type="text" name="usernc" size="15" class="inputcss" maxlength="50"></td>
                      <td width="98" bgcolor="#FFFFFF"><div align="center"><input type="button" value="是否已用" onClick="open_chknc(form1.usernc.value)" class="buttoncss">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="60" bgcolor="#FFFFFF"><div align="center">头像：</div></td>
                      <td height="60" colspan="2" bgcolor="#FFFFFF">&nbsp;
                        <table width="230" height="60" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="90">&nbsp;<select name="userhead" onchange="javascript:change_head()">
							<?php
							for($i=0;$i<=11;$i++){
					        ?>
                      <option value="<?php echo("images/head/".$i.".gif");?>">头像<?php echo $i?></option>
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
                      <td height="30" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
                      <td height="30" colspan="2" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" size="20" class="inputcss" maxlength="100">
                        <span class="STYLE4">(要求真实)</span></td>
                    </tr>
                    <tr>
                      <td height="30" colspan="3" bgcolor="#FFFFFF"><div align="center">
                      &nbsp;&nbsp;<input type="submit" name="submit" class="buttoncss" value="进入">&nbsp;&nbsp;<input type="reset" class="buttoncss" value="重写"></div></td>
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
                  注意:输入昵称即可登录明日聊天室!&nbsp;&nbsp;本公司聊天室在每周的周一至周五&nbsp;<strong>(上午&nbsp;8：30-11：30&nbsp;和&nbsp;下午&nbsp;1：30-5：30)</strong>&nbsp;为您服务!!!
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
                      <td>聊天室使用指南：</td>
  </tr>
</table>
<table width="200" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><TEXTAREA rows=25 cols=40 class="inputcss">       明日科技在线聊天室使用指南

   
   
   1、用户昵称
      为了能够定位不同的用户，本聊天室将为不同的用户分配不同的昵称，支持汉语。用户直接输入昵称即可进入本聊天室。
   
   2、用户头像
      请根据您的性别选择喜爱的头像。
   
   3、E-mail地址
      进入明日科技在线论坛的用户，请填写真实的E-mail地址，以便明日科技可以随时与您进行沟通。
	  
    感谢您对明日科技的支持！     	      
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