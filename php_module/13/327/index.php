<link rel="stylesheet" type="text/css" href="style.css">
<script language="javascript">
 function change_sex()
  {
     if(form_regist.user_sex.value=="男")
	   {
	     form_regist.user_photo_man.style.display="";
		 form_regist.user_photo_woman.style.display="none";
		 form_regist.user_src.src="images/head/6.gif";
	   }
     else if(form_regist.user_sex.value=="女")
	  {
	    form_regist.user_photo_woman.style.display="";
	    form_regist.user_photo_man.style.display="none";
		form_regist.user_src.src="images/head/0.gif";
	  }
  }
</script>
<script language="javascript">
 function chkinput(form)
  {
    if(form.user_name.value=="")
	  {
	    alert("请输入用户昵称!");
		form.user_name.select();
		return(false);
	  
	  }  
     if(form.user_pwd1.value=="")
	  {
	    alert("请输入注册密码!");
	    form.user_pwd1.select();
		return(false);
	  }
	  if(form.user_pwd2.value=="")
	  {
	    alert("请输入确认密码!");
	    form.user_pwd2.select();
		return(false);
	  }
	  if(form.user_pwd1.value!=form.user_pwd2.value)
        {
		  alert("密码与确认密码不同!");
		  form.user_pwd1.select();
		  return(false);
		
		} 
	 if(form.user_pwd1.value.length<6)
	  {
	   alert("注册密码应大于或等于6位!");
	   form.user_pwd1.select();
	   return(false);
	 } 
	 if(form.user_email.value=="")
	  {
	   alert("请输入E-mail地址!");
	   form.user_email.select();
	   return(false);
	 }
	var i=form.user_email.value.indexOf("@");
	var j=form.user_email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0))
	 {
       alert("请输入正确的E-mail地址!");
	   form.user_email.select();
	   return(false);
	 }
  if(form.user_hy.value=="1")
   {
      if(form.user_truename.value=="")
	   {
	     alert("如果注册为会员,请输入真实姓名!");
	     form.user_truename.select();
		 return(false);
	   }
	   if(form.user_sex.value=="男女")
	   {
	     alert("如果注册为会员,请选择性别!");
	     form.user_sex.focus();
		 return(false);
	   }
	    if(form.user_zy.value=="请选择")
	    {
	     alert("如果注册为会员,请选择您的职业!");
	     form.user_zy.focus();
	     return(false);
	    }	
	   if(form.user_qq.value=="")
	    {
	     alert("如果注册为会员,请输入QQ号码!");
	     form.user_qq.select();
	     return(false);
	    }
		if(isNaN(form.user_qq.value)==true)
		{
		alert("QQ号码只能为数字!");
	     form.user_qq.select();
	     return(false);
		}
	  if(form.user_tel.value=="")
	    {
	     alert("如果注册为会员,请输入真实的联系电话!");
	     form.user_tel.select();
	     return(false);
	    }
	 if(form.user_address.value=="")
	    {
	     alert("如果注册为会员,请输入真实的联系地址!");
	     form.user_address.select();
	     return(false);
	    }
	} 
   return(true); 		
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
        <td height="25" background="images/menubar.gif" bgcolor="#FFFFFF"><div align="left">&nbsp;&nbsp;&nbsp;<img src="images/menubar_left.gif" width="9" height="9">&nbsp;&nbsp;<strong>用户注册</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="790" height="411" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="480" height="411" valign="top"><table width="450" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="left"><img src="images/topic.gif" width="10" height="9" />&nbsp;&nbsp;注册为普通用户</div></td>
              </tr>
            </table>
              <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
			  <form name="form_regist" method="post"  onsubmit="return chkinput(this)">
                <tr>
                  <td width="120" height="30">
                    <div align="center">用户昵称：</div></td>
                  <td width="330"><div align="left"><input type="text" name="user_name" size="25" maxlength="20" class="buttoncss">
				  *&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">注册密码：</div></td>
                  <td height="30"><div align="left"><input type="password" name="user_pwd1" size="25" maxlength="20" class="buttoncss">
                    *</div></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">重复密码：</div></td>
                  <td height="30"><div align="left"><input type="password" name="user_pwd2" size="25" maxlength="20" class="buttoncss">
                    *</div></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">E-mail：</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="user_email" size="25" maxlength="100" class="buttoncss" />
                  *请输入真实的E-mail地址</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="left"><img src="images/topic.gif" width="10" height="9" />&nbsp;继续注册为会员</div></td>
                  <td height="30"><div align="left">
                    <select name="user_hy">
                      <option selected="selected" value="1">是</option>
                      <option value="0">否</option>
                    </select>
                    如果继续注册为会员请填写以下信息</div>                    </td>
				</tr>
				 <tr>
                  <td height="30"><div align="center">真实姓名：</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="user_truename" size="25" maxlength="20" class="buttoncss" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">性&nbsp;&nbsp;别：</div></td>
                  <td height="30"><div align="left">
                  <select name="user_sex" onchange="javascript:change_sex();">
                    <option selected="selected" value="男女">请选择</option>
                    <option  value="男" >&nbsp;&nbsp;男</option>
                    <option  value="女" >&nbsp;&nbsp;女</option>
                  </select>
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">职&nbsp;&nbsp;业：</div></td>
                  <td height="30"><div align="left"> 
                            <select name="user_zy" id="user_zy">
                              <option selected value="请选择">请选择</option>
							  <option value="工人">工人</option>
                              <option value="农民">农民</option>
							  <option value="教师">教师</option>
							  <option value="司机">司机</option>
							  <option value="军人">军人</option>
							  <option value="学生">学生</option>
							  <option value="职员">职员</option>
							  <option value="干部">干部</option>
							  <option value="其他">其他</option>
                            </select>
                            *</div></td>
                </tr>
				<tr>
                  <td height="100" rowspan="2"><div align="center">头&nbsp;&nbsp;像：</div></td>
                  <td height="70"><div align="left"><img id="user_src" src="images/head/0.gif" width="60" height="60" /></div></td>
                </tr>
				<tr>
				  <td height="30"><div align="left">
				    <select name="user_photo_man" onchange="form_regist.user_src.src=this.value" style="display:none">
                    <?php  
				  
					for($i=1;$i<=6;$i++)
					 {
					 ?>
                      <option value="<?php echo("images/head/".($i+5).".gif");?>">头像<?php echo $i+6?></option>
                      <?php
					 }
					?>
                    </select>
					
				   <select name="user_photo_woman" onchange="form_regist.user_src.src=this.value" style="display:none">
                   <?php  
				  
					for($i=1;$i<=6;$i++)
					 {
					 ?>
                      <option value="<?php echo("images/head/".($i-1).".gif");?>">头像<?php echo $i?></option>
                      <?php
					 }
					?>
                    </select>
				  </div></td>
				  </tr>
				  <tr>
                  <td height="30"><div align="center">QQ号码：</div></td>
                  <td height="30"><div align="left">
                    <input type="text" name="user_qq" size="25" maxlength="20" class="buttoncss" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">联系电话：</div></td>
                  <td height="30"><div align="left">
                    <input name="user_tel" type="text" class="buttoncss" id="user_tel" size="25" maxlength="20" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="30"><div align="center">家庭住址：</div></td>
                  <td height="30"><div align="left">
                    <input name="user_address" type="text" class="buttoncss" id="user_address" size="50" maxlength="50" />
                  *</div></td>
                </tr>
				<tr>
                  <td height="15" colspan="2"><marquee>如果注册为明日科技的会员，您将收到明日科技的礼品，但您必须正确填写个人的信息！</marquee></td>
                </tr>
				<tr>
                  <td height="30" colspan="2"><div align="center"><input type="submit" value="立即注册" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="全部重写" class="buttoncss"></div></td>
                </tr>
				<tr>
                  <td height="15" colspan="2"></td>
                </tr>
			 </form>
              </table></td>
            <td width="10" background="images/line_down.gif">&nbsp;</td>
            <td width="300"><table width="250" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
                      <td>注册指南：</td>
  </tr>
</table>
<table width="200" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><TEXTAREA rows=30 cols=40 class="inputcss">       明日科技在线论坛注册指南

普通用户应录入的信息
   
   
   1、用户昵称
      为了能够定位不同的用户，本论坛将为不同的用户分配不同的昵称，支持汉语。
   2、用户密码
      为了提高论坛安全性，用户注册密码应大于6位。
   3、E-mail地址
      用户填写的真实的E-mail地址,成功注册为明日科技的普通用户或会员后，您可以打开邮箱查看确认信息和礼品。
	  
	  
继续注册为会员应录入的信息
  
  
   4、为了便于明日科技与您联系，请输入您的真实姓名。
   5、可从下拉列表中选择您的性别。
   6、可从下拉列表中选择您的职业。
   7、注册用户可以根据自己的个性选择喜欢的头像。
   8、为了便于明日科技与您联系，请输入您的QQ号码。
   9、为了便于明日科技与您联系，请输入您的联系电话。
   10、为了便于明日科技与您联系，请输入您的联系地址。
   
感谢您对明日科技的支持。     	      
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
